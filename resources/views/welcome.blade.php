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

    <ul class="topnav" style="background-color: #BAD9F7">
    <li><img src="/images/logo.png" style="position: relative; left: 120px; padding: 5px; height:70px"></li>
      <li class="right"><a  href="#news">Services</a></li>
     <li class="right"><a href="#contact">Contact</a></li>
     <li class="right"><a  href="#home"><img src="/images/logo_home1.png" style="height: 30px; width: 30px;"></a></li>

   
    </ul>
 
    
  

      <div id="map">
         <?php 
         $json_url = "http://washstation.servismart.net/washstation/frontend/web/index.php?r=stores/get";
         $json = file_get_contents($json_url);
         $json=str_replace('},]',"}]",$json);
         ?>
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
            title: coord.name ,
            icon: image
           });

        marker.addListener('click', toggleBounce);

        var contentString = coord.name;

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        /*  marker.addListener('click', function() {
          infowindow.open(map, marker);
        });*/
 // console.log(content);

 

   }
       function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }

 /* var infowindow = new google.maps.InfoWindow();
 google.maps.event.addListener(marker, 'mouseover', (function(marker) {
            return function() {
                coord = coordinates[i];
                var content = coord.name;
                infowindow.setContent(content);
                infowindow.open(map, marker);
            }
          })(marker));*/
         
        }



 </script>
</body>
</html>
