<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3&callback=initMap&libraries=places&key=AIzaSyCO8WIGpCttR6bydhWF1rQ8gUjKpRmYTu4" async defer>
        </script>
        <link rel="stylesheet" href="/css/fa.css">


    </head>

    <body >

   
 

  <div class="main" id="map">
     
         <?php 
         $json_url = "http://washstation.servismart.net/washstation/frontend/web/index.php?r=stores/get";
         $json = file_get_contents($json_url);
         $json=str_replace('},]',"}]",$json);
         ?>

  </div>

   <div class="menu">
    <div class="menuitem">AVEIRO</div>
    <div class="menuitem">COIMBRA</div>
    <div class="menuitem">FARO</div>
    <div class="menuitem">FUNCHAL</div>
    <div class="menuitem">LEIRIA</div>
    <div class="menuitem">LISBON</div>
    <div class="menuitem">PORT</div>
    <div class="menuitem">SANTAREM</div>
    <div class="menuitem">SETUBAL</div>
    <div class="menuitem">VISEU</div>
  </div>



     
    <script>
       var map;
       var infowindow;
       var coordinates;
       var coord;




  
      function initMap() {

       var obj = JSON.parse('<?= $json; ?>');   
       var coordinates = obj.loja;
        var coord;
      // console.log(coordinates);
      
        var portugal = {
        lat: 38.813296,
        lng: -9.188284
        };
      //  console.log(portugal);
     map = new google.maps.Map(document.getElementById('map'), {
       center: portugal,
       zoom: 12,
       radius: 100,
       styles: [
    {
        "featureType": "all",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "weight": "2.00"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#9c9c9c"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [

            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#eeeeee"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#7b7b7b"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#46bcec"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#c8d7d4"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#070707"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    }
]
     });

     var infoWindow = new google.maps.InfoWindow();

        for(i in coordinates)
        {
           
            coord = coordinates[i];
            
            var lat = coord.gps;
       
            var loc = coord.gps.split(",")
 
            var lat = parseFloat(loc[0]);
          
            var lng = parseFloat(loc[1]);
            var myLatlng = new google.maps.LatLng(lat,lng);
            var image = {
            url: "/images/Logo WS_small_3.png",
 
           scaledSize: new google.maps.Size(40, 40)
           };
           

       
            var marker = new google.maps.Marker({
            map: map,
            position: myLatlng,
            animation: google.maps.Animation.DROP,
          //  title: coord.name ,
            icon: image
           });

        marker.addListener('click', toggleBounce);

       
           (function (marker, coord) {
            var name = coord.name;
           
           // console.log(gps);
            google.maps.event.addListener(marker, "mouseover", function (e) {
                    //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                    infoWindow.setContent("<div style = 'width:200px;min-height:40px;font-size:16px' >" +"<b>" + name.toUpperCase() + "</b>" +"</br>"+"</br>"+ coord.gps +'<a href="https://www.google.com/maps/dir/?api=1&origin=&destination="><img src="/images/direction.png"  style="height:30px;width:30px;"></a> '+ "</div>");
                    infoWindow.open(map, marker);
                });
            })(marker, coord);

 

   }

    

       function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }


     }    
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
   console.log(position.coords.latitude);
   console.log(position.coords.longitude);
}




 </script>
</body>
</html>
