
<html>
<?php

    //include <head>
    include('templates/header.php');

?>


<body id="single-while-bg no-overflow">

    <section class="hero main-landing-page--img">
        <section class="navigation">
  <?php

            //menu-elements

            include('templates/menu_default.php');

            ?>

        </section>


        
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-push-1">
                    <div class="hero-content text-center">
                        <h1>Cooking Made Simple.</h1>
                        <p class="intro">World's first learning cooktop.</p>
                        
                        <div class="preorder-intro">
                            <a href="#" class="btn btn-fill btn-large btn-margin-right pre-order-btn-intro">Pre-Order now</a>
                        </div>
                            <!-- Begin MailChimp Signup Form -->
                        <div id="mc_embed_signup">
                        <form action="email.php" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate signup-form  form-input-group sign-up" novalidate>
                            <div id="mc_embed_signup_scroll signup-form">
                            
                       
                            
                            <input type="email" value="email" name="email" class="required email input-regular" placeholder="Enter your email address" id="mce-EMAIL" required >
                        
                             <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-fill sign-up-btn signup-intro">

                            <div id="mce-responses" class="clears">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;"><input type="text" name="b_a3de5825e5d3f1ac1e10b36a6_df22f19834" tabindex="-1" value=""></div>
                           
                            </div>
                        </form>
                        </div>

                        <!--End mc_embed_signup-->

                        

                         

                    </div>

                </div>

             
            </div>
        </div>
        
         <div class="footer-credits no-shadow">
                    <?php

            //menu-elements 

            include('templates/footer_default_credits.php');

        ?>
    </div>
    </section>



 <?php

            //menu-elements

            include('templates/footer_scripts.php');

        ?>

</body>
</html>