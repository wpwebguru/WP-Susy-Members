<?php
add_action( 'admin_footer', 'WPSUSY_admin_enqueue_scripts' ); 
function WPSUSY_admin_enqueue_scripts(){
    ?>
    <script>
        jQuery(document).ready(function() {

            jQuery('#wpsusy_color_1').wpColorPicker();
            jQuery('#wpsusy_color_2').wpColorPicker();
            jQuery('#wpsusy_color_3').wpColorPicker();
            jQuery('#wpsusy_color_4').wpColorPicker();
            jQuery('#wpsusy_color_5').wpColorPicker();
            jQuery('#wpsusy_color_6').wpColorPicker();

        });
    </script>
    <?php
}













