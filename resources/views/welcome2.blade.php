<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
             html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            * {
            box-sizing: border-box;
              }

              #map {
              float: left;
              width: 100%;
              height: 100%;
              padding: 0 20px;
              overflow: hidden;
             }
             @media only screen and (max-width:800px) {
             /* For tablets: */
             #map {
              width: 80%;
              padding: 0;
            }
          
            }
            @media only screen and (max-width:500px) {
            /* For mobile phones: */
            #map {
            width: 100%;
            }
            }
    </style>
  </head>
  <body>
  <div id="loja"></div>
  <script type="text/javascript">
  (function() {
    var json = {"data":{"item":[{"@id":"7","fromMemberID":"7","FromMember":"david","notificationsType":"event","notificationsDesc":"A new event (Test Event Thursday, 16 September 2010) has been created.","notificationsDate":"16 Sep 2010","notificationsTime":"00:02:18"},{"@id":"8","fromMemberID":"7","FromMember":"david","notificationsType":"event","notificationsDesc":"A new event (Test Event Thursday, 16 September 2010) has been created.","notificationsDate":"16 Sep 2010","notificationsTime":"08:26:24"}]}};
    
    var i;
    for(i=0; i<json.data.item.length; i++)
    {
        alert(json.data.item[i].FromMember);
    }
})();
  </script>
</body>
  
</html>