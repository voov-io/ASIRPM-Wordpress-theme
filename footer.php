<?php /*
@package asirpm
@subpackage asirpm
@since 1.0
*/
?>
<?php get_template_part('template-parts/modal-form')?>
<section class="services shadow">
        <div class="container maxwidth flex">
            <div class="copy-container center">
                <h2 class="subtitle ">Owners, Get Your Free<br>Rental Analysis</h2>
               <?php if (is_active_sidebar('contact-widget')) {
                    dynamic_sidebar('contact-widget');
               }?>
            </div>
            <picture class="img-container center">
                <img src="<?php echo ImagesPath?>/img get free Rental analysis.webp" alt="Tenant Placement img">
            </picture>
        </div>
    </section>
<footer class="footer">
        <nav class="footer__container gridauto footer container maxwidth paddingSection">
            <div class="footer__container-sub">
                <figure class="container__img " loading="lazy">
                    <a href="<?php echo home_url()?>">
                        <img loading="lazy" src="<?php echo ImagesPath?>/Atlantic Sotheby's International Realty- white logo.webp" alt="logo Atlantic Sotheby's International ">
                    </a>  
                    <figcaption class="footer__container--copy">Atlantic Sotheby’s International Realty is committed to compliance with all federal, state, and local fair housing laws.  Atlantic Sotheby’s International Realty will not discriminate against any person because of race, color, religion, national origin, sex, familial status, disability, or any other specific classes protected by applicable laws.</figcaption>
                </figure>
                <figure class="container__img " loading="lazy">
                    <a href="<?php echo home_url()?>">
                        <img loading="lazy" loading="lazy" src="<?php echo ImagesPath?>/best property management.webp" alt="logo best property management">
                    </a>
                    <figcaption>© All Rights Reserved. Privacy Policy</figcaption>
                </figure>
            </div>
            <div class="footer__container-sub">
                <h2>Links</h2>
                <ul>
                    <li><a href="<?php echo home_url()?>/property-listings">Property Listings</a></li>
                    <li><a href="<?php echo home_url()?>/rent-your-property">Services</a></li>
                    <li><a href="<?php echo home_url()?>/our-property">Property Management</a></li>
                    <li><a href="<?php echo home_url()?>/blog">Blog</a></li>
                    <li><a href="<?php echo home_url()?>/our-team/">About Us</a></li>
                </ul>
            </div>
            <div class="footer__container-sub">
                <h2>Contact</h2>
                <ul>
                    <li><img class="icon" src="<?php echo IconsPath?>/phone.svg" alt=""><a href="tel:+757.777.9898">757.777.9898</a></li>
                    <li><img class="icon" src="<?php echo IconsPath?>/email.svg" alt=""><a href="mailto:pm@atlanticsir.com">pm@atlanticsir.com</a></li>
                    <li>
                        <img class="icon" src="<?php echo IconsPath?>/map pin.svg" alt="">
                        <address>
                            <a href="https://www.google.com/maps/place/Atlantic+Sotheby's+International+Realty/@36.8308798,-76.1282047,15z/data=!4m6!3m5!1s0x89baeab9a0483a17:0xc20fe07347337446!8m2!3d36.8308798!4d-76.1282047!16s%2Fg%2F11g7_cdsg5?entry=ttu">
                                4416 Expressway Drive, Virginia Beach, VA 23452
                            </a>
                        </address>
                </li>
                </ul>
            </div>
            <div class="footer__container-sub">
                <h2>schedule</h2>
                <ul>
                    <li><img class="icon" src="<?php echo IconsPath?>/time.svg" alt=""><time>9 am</time> to <time>4 pm</time></li>
                    <li><img class="icon" src="<?php echo IconsPath?>/calendar.svg" alt=""><time>Monday to Friday</time></li>
                </ul>
            </div>
            <div class="footer__container-sub">
                <h2>Subscribe</h2>
                <ul>
                    <li>Subscribe to Our Blog</li>
                    <li>
                        <?php if (is_active_sidebar('newsletter-widget')) {
                            dynamic_sidebar('newsletter-widget');
                        }?>
                    </li>
                </ul>
            </div>
        </nav>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>