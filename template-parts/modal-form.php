<div id="modal-overlay" class="modal-overlay">
    <section id="modal" class="services">
            <div class="container flex">
                <div class="copy-container center">
                    <h2 class="subtitle ">Owners, Get Your Free Rental Analysis</h2>
                <?php if (is_active_sidebar('contact-widget')) {
                        dynamic_sidebar('contact-widget');
                }?>
                </div>
                <picture class="img-container center">
                    <img src="<?php echo ImagesPath?>/img get free Rental analysis.webp" alt="Tenant Placement img">
                    <button id="btnclose"  class="btn-close"> 
                        <img  src="<?php echo IconsPath?>/close.webp" alt="button close">       
                    </button>
                </picture>
            </div>
    </section>
</div>