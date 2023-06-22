<?php 
    function asirpm_services_part(){
        ob_start();
        get_template_part('template-parts/asirpm_services');
        return ob_get_clean();
    }
    add_shortcode('asirpm_services', 'asirpm_services_part');

    function asirpm_ReasonstoHire_part(){
        ob_start();
        get_template_part('template-parts/asirpm_ReasonstoHire');
        return ob_get_clean();
    }
    add_shortcode('asirpm_ReasonstoHire', 'asirpm_ReasonstoHire_part');

    function asirpm_what_our_part(){
        ob_start();
        get_template_part('template-parts/what_our');
        return ob_get_clean();
    }
    add_shortcode('asirpm_what_our', 'asirpm_what_our_part');

?>
