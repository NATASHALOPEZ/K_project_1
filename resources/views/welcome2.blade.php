<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
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