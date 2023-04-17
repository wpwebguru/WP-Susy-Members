<?php
add_action( 'wp_head', 'WPSUSY_dynamic_public_css' );
function WPSUSY_dynamic_public_css(){
    ?>
    <style>
        .wpsusy_btn .wpsusy_social{
            border-radius: <?php echo get_option("susy_btn_redius"); ?>px;
            border-width: <?php echo get_option("susy_btn_border_width"); ?>px;
            border-color: <?php echo get_option("susy_btn_border_color"); ?>;
            border-style: solid;
        }
        .wpsusy_btn .wpsusy_social:hover{
            border-color: <?php echo get_option("susy_btn_border_hv_color"); ?>;
        }
        .wpsusy_btn .wpsusy_social .wpsusy_text{
            color: <?php echo get_option("susy_btn_txt_color"); ?>;
            font-size: <?php echo get_option("susy_btn_txt_size"); ?>px;
        }
        .wpsusy_btn .wpsusy_social:hover .wpsusy_text{
            color: <?php echo get_option("susy_btn_txt_hover"); ?>;
        }
        .wpsusy_single_btn{
            color: <?php echo get_option("susy_sg_btn_txt_color"); ?>;
        }
        .wpsusy_single_btn:hover{
            color: <?php echo get_option("susy_sg_btn_txt_color_h"); ?>;
        }

    </style>
    
    <?php
}












