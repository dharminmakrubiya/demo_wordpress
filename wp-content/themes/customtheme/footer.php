<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

</body>

</html>

<footer class="section bg-footer">

    <div class="container">
    <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        if (has_custom_logo()) {
            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
        } else {
            echo '<h1>' . get_bloginfo('name') . '</h1>';
        }

        ?>
        <div class="row">
            
            <div class="column col-lg-3">

            </div>
            <div class="col-lg-3">
                <div class="">

                    <h6 class="footer-heading text-uppercase text-white">Information</h6>
                    <ul class="list-unstyled footer-link mt-4">
                        <li><a href="">Pages</a></li>
                        <li><a href="">Our Team</a></li>
                        <li><a href="">Feuchers</a></li>
                        <li><a href="">Pricing</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="">
                    <h6 class="footer-heading text-uppercase text-white">Ressources</h6>
                    <ul class="list-unstyled footer-link mt-4">
                        <li><a href="">Monitoring Grader </a></li>
                        <li><a href="">Video Tutorial</a></li>
                        <li><a href="">Term &amp; Service</a></li>
                        <li><a href="">Zeeko API</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="">
                    <h6 class="footer-heading text-uppercase text-white">Help</h6>
                    <ul class="list-unstyled footer-link mt-4">
                        <li><a href="">Sign Up </a></li>
                        <li><a href="">Login</a></li>
                        <li><a href="">Terms of Services</a></li>
                        <li><a href="">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="">
                    <h6 class="footer-heading text-uppercase text-white">Contact Us</h6>
                    <p class="contact-info mt-4">Contact us if need help withanything</p>
                    <p class="contact-info">+91-99999 99999</p>
                </div>
            </div>

        </div>
    </div>

    <div class="text-center mt-5">
        <p class="footer-alt mb-0 f-14">2022 @ Dharmin , All Rights Reserved</p>
    </div>
</footer>