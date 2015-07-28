<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>

    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="http://sugartheagency.wpengine.netdna-cdn.com/wp-content/themes/sugarnew/assets/ico/apple-touch-icon-152x152-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://sugartheagency.wpengine.netdna-cdn.com/wp-content/themes/sugarnew/assets/ico/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="http://sugartheagency.wpengine.netdna-cdn.com/wp-content/themes/sugarnew/assets/ico/apple-touch-icon-120x120-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://sugartheagency.wpengine.netdna-cdn.com/wp-content/themes/sugarnew/assets/ico/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://sugartheagency.wpengine.netdna-cdn.com/wp-content/themes/sugarnew/assets/ico/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://sugartheagency.wpengine.netdna-cdn.com/wp-content/themes/sugarnew/assets/ico/apple-touch-icon-57x57-precomposed.png">
    <link rel="shortcut icon" sizes="32x32" href="http://sugartheagency.wpengine.netdna-cdn.com/wp-content/themes/sugarnew/assets/ico/favicon-32.ico">
    
    <script>
        	function initializeMap() {
        
            var lat = '-26.105003';
            var lon = '28.056593';
            var centerLon = lon - 0.0105;
            var myOptions = {
                scrollwheel: false,
                draggable: true,
                disableDefaultUI: true,
                center: new google.maps.LatLng(lat, lon),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
        
            //Bind map to elemet with id map-canvas
            var map = new google.maps.Map(document.getElementById('map-canvas'), myOptions);
            var marker = new google.maps.Marker({
                map: map,
                position: new google.maps.LatLng(lat, lon),
            });
        
            google.maps.event.addListener(marker, 'click', function () {
                infowindowW.open(map, marker);
            });
        
            var myOptions2 = {
                scrollwheel: false,
                draggable: true,
                disableDefaultUI: true,
                center: new google.maps.LatLng(-29.8318242, 31.0231088),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
        
        
            var map2 = new google.maps.Map(document.getElementById('map-canvas-net'), myOptions2);
            var marker2 = new google.maps.Marker({
                map: map2,
                position: new google.maps.LatLng(-29.8318242, 31.0231088),
            });
        
            google.maps.event.addListener(marker2, 'click', function () {
                infowindow2.open(map2, marker2);
            });
        }
        google.maps.event.addDomListener(window,'load',initializeMap);
    </script>
      
</head>
<body <?php body_class(); ?>>