<?php
    $domain = 'wp_susy';
?>
 <div class="wrap">
            <h1><?php _e('WP SUSY Members Settings', $domain) ?></h1>
            <form action="options.php" method="post">
                <?php wp_nonce_field('update-options'); ?>
                <table class="form-table" role="presentation">
                    <tbody>
                        <tr>
                            <th scope="row"><h3><?php _e('Button Settings', $domain) ?></h3></th>
                        </tr>
                        <tr>
                            <th scope="row"><label for=""><?php _e('Shortcode', $domain) ?></label></th>
                            <td style="display: inline-flex;">
                                <input name="" type="text" id="susy_shortcode" value="[wpsusy-social-btn]" readonly>
                                <img class="social_btn_icon" src="<?php echo WPSUSY_URL.'assets/img/social-btn.png';?>" alt=""/>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row"><label for=""><?php _e('Button Redius', $domain) ?></label></th>
                            <td>
                                <input name="susy_btn_redius" type="text" id="" value="<?php echo get_option("susy_btn_redius"); ?>"> px
                            </td>
                        </tr>

                        <tr>
                            <th scope="row"><label for=""><?php _e('Button Border Color', $domain) ?></label></th>
                            <td>
                                <input name="susy_btn_border_color" type="color" id="wpsusy_color_1" value="<?php echo get_option("susy_btn_border_color"); ?>">
                            </td>
                        </tr>

                        <tr>
                            <th scope="row"><label for=""><?php _e('Button Hover Border Color', $domain) ?></label></th>
                            <td>
                                <input name="susy_btn_border_hv_color" type="color" id="wpsusy_color_2" value="<?php echo get_option("susy_btn_border_hv_color"); ?>">
                            </td>
                        </tr>

                        <tr>
                            <th scope="row"><label for=""><?php _e('Button Border Width', $domain) ?></label></th>
                            <td>
                                <input name="susy_btn_border_width" type="text" id="" value="<?php echo get_option("susy_btn_border_width"); ?>">
                            </td>
                        </tr>

                        <tr>
                            <th scope="row"><label for=""><?php _e('Button Text Color', $domain) ?></label></th>
                            <td>
                                <input name="susy_btn_txt_color" type="color" id="wpsusy_color_3" value="<?php echo get_option("susy_btn_txt_color"); ?>">
                            </td>
                        </tr>

                        <tr>
                            <th scope="row"><label for=""><?php _e('Button Text Hover Color', $domain) ?></label></th>
                            <td>
                                <input name="susy_btn_txt_hover" type="color" id="wpsusy_color_4" value="<?php echo get_option("susy_btn_txt_hover"); ?>">
                            </td>
                        </tr>

                        <tr>
                            <th scope="row"><label for=""><?php _e('Button Text Size', $domain) ?></label></th>
                            <td>
                                <input name="susy_btn_txt_size" type="text" id="" value="<?php echo get_option("susy_btn_txt_size"); ?>"> px
                            </td>
                        </tr>

                        <tr>
                            <th scope="row"><label for=""><?php _e('Whatsapp Message', $domain) ?></label></th>
                            <td>
                                <input name="susy_whatsapp_btn_msg" type="text" id="susy_whatsapp_msg_box" value="<?php echo get_option("susy_whatsapp_btn_msg"); ?>">
                            </td>
                        </tr>

                        <tr>
                            <th scope="row"><h3><?php _e('Single Data Settings', $domain) ?></h3></th>
                        </tr>

                        <tr>
                            <th scope="row"><label for=""><?php _e('Single Shortcode', $domain) ?></label></th>
                            <td>
                                <input name="" type="text" id="susy_shortcode" value="[wpsusy-fullname]" readonly>
                                <input name="" type="text" id="susy_shortcode" value="[wpsusy-email]" readonly>
                                <input name="" type="text" id="susy_shortcode" value="[wpsusy-phone]" readonly>
                                <input name="" type="text" id="susy_shortcode" value="[wpsusy-whatsapp]" readonly>
                                <input name="" type="text" id="susy_shortcode" value="[wpsusy-telegram]" readonly>
                                <p class="description"><?php _e('This shortcode supported attributes. you can change the shortcode button text, id, class, etc. Also, You can change WhatsApp message text on the Whatsapp shortcode. For example: <code>[wpsusy-fullname text="button text" class="custom_class" id="custom_id"]</code>. One more attribute is supported in Whatsapp shortcode. For example: <code>[wpsusy-whatsapp text="button text" class="custom_class" id="custom_id" message="whatsapp message"]</code>', $domain)?></p>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row"><label for=""><?php _e('Text Color', $domain) ?></label></th>
                            <td>
                                <input name="susy_sg_btn_txt_color" type="text" id="wpsusy_color_5" value="<?php echo get_option("susy_sg_btn_txt_color"); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for=""><?php _e('Text Hover Color', $domain) ?></label></th>
                            <td>
                                <input name="susy_sg_btn_txt_color_h" type="text" id="wpsusy_color_6" value="<?php echo get_option("susy_sg_btn_txt_color_h"); ?>">
                            </td>
                        </tr>





                        <tr>
                            <th></th>
                            <td>
                                <input type="hidden" name="action" value="update" />
                                <input type="hidden" name="page_options" value="susy_btn_redius, susy_btn_txt_color, susy_btn_txt_hover, susy_btn_border_color, susy_btn_border_width, susy_btn_border_hv_color, susy_btn_txt_size, susy_sg_btn_txt_color, susy_sg_btn_txt_color_h, susy_whatsapp_btn_msg" />
                                <input type="submit" class="button button-primary" id="submit" name="submit" value="<?php _e('Save Changes', $domain) ?>" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            
        </div>
<?php




