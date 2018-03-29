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


        <!-- Styles -->
<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

              #map {
              height: 100%;
              width: 100%;
             }
</style>
    </head>
    <body >
      <div id="map">
         <?php 
         $json_url = "http://washstation.servismart.net/washstation/frontend/web/index.php?r=stores/get";
         $json = file_get_contents($json_url);
         $json=str_replace('},

         ]',"}

         ]",$json);

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
       console.log(coordinates);
      
        var portugal = {
        lat: 38.75681,
        lng: -9.22303
        };

     map = new google.maps.Map(document.getElementById('map'), {
       center: portugal,
       zoom: 12,
       radius: 50
     });

        for(i in coordinates)
        {
           
            coord = coordinates[i];

            var lat = coord.gps;
       
            var loc = coord.gps.split(",")
 
            var lat = parseFloat(loc[0]);
          
            var lng = parseFloat(loc[1]);
       
            var myLatlng = new google.maps.LatLng(lat,lng);
       
            var marker = new google.maps.Marker({
            map: map,
            position: myLatlng,
            title: coord.name ,
            icon: "/images/Logo WS_small_3.png"
           });

 // console.log(content);

 

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
