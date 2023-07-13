<?php /*
@package asirpm
@subpackage asirpm
@since 1.0
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlantic Sotheby's International Realty</title>
    <link rel="shortcut icon" href="<?php echo home_url()?>/favicon.ico" type="image/x-icon">
    <meta name="title" content="Atlantic Sotheby's International Realty">
    <meta name="description" content="Atlantic Sotheby’s International Realty is a full-service real estate brokerage and property management firm headquartered in Virginia Beach. We proudly serve the entire greater Hampton Roads area.">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Property Listings, Property Management,full-service real estate">
    <!-- Preload the LCP image with a high fetchpriority so it starts loading with the stylesheet. -->
    <link rel="preload" fetchpriority="high" as="image" href="<?php echo ImagesPath?>/img-background-main-section.webp" type="image/webp">
    <?php wp_head(); ?> 
</head>
<body>
    <div class="sub-header">
        <div class="container">
            <a href="http://kwpm.appfolio.com/portal">OWNER LOGIN</a>
            <a href="http://kwpm.appfolio.com/connect">TENANT LOGIN</a>
        </div>
    </div>
    <header class="header ">
        <div class="header__container horizontal maxwidth">
            <figure class="header__container--logo">
                    <a href="<?php echo home_url()?>">
                        <img width="326" height="108" loading="lazy" src="<?php echo ImagesPath?>/Atlantic Sotheby's International Realty- white logo.webp" alt="Atlantic Sotheby's  Logo">
                    </a>
            </figure>
            <nav class="flex gap">
                <button class="McButton" id="McButton"  aria-label="hambuerguer menu">
                    <b id="McBar1"></b>
                    <b id="McBar2"></b>
                    <b id="McBar3"></b>
                </button>
                <ul id="menu--items" class="menu-items flex">
                    <li class="withSubItems">
                        <a href="<?php echo home_url()?>/our-team/">About Us</a>
                        <ul class="subitem-container">
                           <li  class="subitem"><a href="<?php echo home_url()?>/our-property">Our Process</a></li> 
                           <li  class="subitem"><a href="<?php echo home_url()?>/our-team/">Our Team</a></li> 
                        </ul>
                    </li>
                    <li><a href="<?php echo home_url()?>/property-listings">Property Listings</a></li>
                    <li class="withSubItems"><a href="<?php echo home_url()?>/rent-your-property">Services</a>
                        <ul class="subitem-container">
                            <li  class="subitem"><a href="<?php echo home_url()?>/rent-your-property">Rent Your Property With US</a></li> 
                        </ul>
                    </li>
                    <li><a href="<?php echo home_url()?>/agent-referral">Agent Referral</a></li>
                    <li class="withSubItems">
                        <a href="<?php echo home_url()?>/faq">FAQs</a>
                        <ul class="subitem-container">
                            <li  class="subitem"><a href="<?php echo home_url()?>/faq/owner/">Owner</a></li>
                            <li  class="subitem"><a href="<?php echo home_url()?>/faq/tenant/">Tenant </a></li>  
                        </ul>
                    </li>
                    <li>
                        <menu class="menu horizontal">
                            <a href="tel:+(757)777-9898">
                                <img width="21" height="33"  loading="lazy" src="<?php echo IconsPath?>/icon phone.svg" alt="icon phone">
                                <a href="tel:(757)777-9898">757.777.9898</a>        
                            </a>
                        </menu>
                    </li>

                </ul>

            </nav>
           
        </div>
    </header>