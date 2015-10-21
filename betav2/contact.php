<html>
<?php

    //include <head>
    include('templates/header.php');

?>

<body id="single-while-bg">

    <section class="hero">
        <section class="navigation fixed">
     <?php

            //menu-elements

            include('templates/menu_default.php');

            ?>

        </section>


        <section class="features">

            <div class="container">

                <div class="row">


                    <div class="col-md-6 margin--header no-shadow">

                        <h3>Caspo Energy LLC</h3>
                        <p><strong>Caspo Energy</strong><br>AGS Gold & Diamond Park, NAD Rd HMT Colony, North Kalamassery Kochi, Kerala 683503<br>683503 Kochi<br></p>

                        </br></br>

                        <h5>Contact @ Caspo</h5>
                        <p><i class="fa fa-envelope-o"></i> contact@caspoenergy.com
                        </br>
                        <i class="fa fa-whatsapp"></i>  +91 9239203233
                        </p>

                    </div>

                    <div class="contact--map col-md-6">
                        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:640px;width:100%;'><div id='gmap_canvas' style='height:600px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://www.maps-generator.com/'>Next</a> <script type='text/javascript' src='http://embedmaps.com/google-maps-authorization/script.js?id=71758bb3bb356497ab8c082c1fbae37f6312f11e'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(10.0535175,76.35576930000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(10.0535175,76.35576930000002)});infowindow = new google.maps.InfoWindow({content:'<strong>Caspo Energy</strong><br>AGS Gold & Diamond Park, NAD Rd HMT Colony, North Kalamassery Kochi, Kerala 683503<br>683503 Kochi<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

                    </div>

                </div>



            </div>

        </section>








    
    <div class="clear"></div>
        <div class="main-footer">
                       <?php

            //menu-elements 

            include('templates/footer_default_credits.php');
?>
        </div>






 <?php

            //menu-elements

            include('templates/footer_scripts.php');

        ?>


</body>
</html>