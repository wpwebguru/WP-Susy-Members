<?php
global $wpdb;

add_shortcode('wpsusy-social-btn', 'WPSUSY_get_user_data');
function WPSUSY_get_user_data(){
    ob_start();

    if (isset($_REQUEST['ref'])) {
        $domain = 'wp_susy';
        $ref = $_REQUEST['ref'];
        $user = get_user_by( 'login', $ref );
        $w_msg = __( get_option("susy_whatsapp_btn_msg"), $domain );

     //   return 'User Skype:- ' . $user->skype . ' Whatsapp:- ' . $user->whatsapp;
     ?>
        <div class="wpsusy_social_btn_wrap">

        <div class="wpsusy_btn">
                <div class="wpsusy_social wpsusy_phone">
                    <a 
                        href="tel:<?php echo $user->billing_phone;?>" 
                        target="popup" 
                        onclick="window.open('tel:<?php echo $user->billing_phone;?>','popup',`width=640,height=480,top=${window.outerHeight/2 - 215},left=${window.outerWidth/2 - 300}`); return false;"
                        >
                        <span class="wpsusy_icon">
                            <img class="btn_icon" src="<?php echo WPSUSY_URL.'assets/img/phone.png';?>" alt=""/>
                        </span>
                        <div class="wpsusy_text">
                            <span class="btn_txt"><?php _e('Phone', $domain)?></span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="wpsusy_btn">
                <div class="wpsusy_social wpsusy_whatsapp">
                    <a 
                        href="https://api.whatsapp.com/send?phone=<?php echo $user->whatsapp.'&text='.$w_msg;?>" 
                        target="popup" 
                        onclick="window.open('https://api.whatsapp.com/send?phone=<?php echo $user->whatsapp.'&text='.$w_msg;?>','popup',`width=640,height=480,top=${window.outerHeight/2 - 215},left=${window.outerWidth/2 - 300}`); return false;"
                        >
                        <span class="wpsusy_icon">
                            <img class="btn_icon" src="<?php echo WPSUSY_URL.'assets/img/whatsapp.png';?>" alt=""/>
                        </span>
                        <div class="wpsusy_text">
                            <span class="btn_txt"><?php _e('WhatsApp', $domain)?></span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="wpsusy_btn">
                <div class="wpsusy_social wpsusy_telegram">
                    <a 
                        href="<?php echo $user->telegram_profil1;?>" 
                        target="popup"
                        onclick="window.open('<?php echo $user->telegram_profil1;?>','popup',`width=640,height=480,top=${window.outerHeight/2 - 215},left=${window.outerWidth/2 - 300}`); return false;"
                        >
                        <span class="wpsusy_icon">
                            <img class="btn_icon" src="<?php echo WPSUSY_URL.'assets/img/telegram.png';?>" alt=""/>
                        </span>
                        <div class="wpsusy_text">
                            <span class="btn_txt"><?php _e('Telegram', $domain)?></span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="wpsusy_btn">
                <div class="wpsusy_social wpsusy_email">
                    <a href="mailto:<?php echo $user->user_email;?>" >
                        <span class="wpsusy_icon">
                            <img class="btn_icon" src="<?php echo WPSUSY_URL.'assets/img/email.png';?>" alt=""/>
                        </span>
                        <div class="wpsusy_text">
                            <span class="btn_txt"><?php _e('Email', $domain)?></span>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
     <?php
    }
    return ob_get_clean();
}

// User Full Name
add_shortcode('wpsusy-fullname', function( $atts ){
    if (isset($_REQUEST['ref'])) {
        $domain = 'wp_susy';
        $ref = $_REQUEST['ref'];
        $user = get_user_by( 'login', $ref );

        $values = shortcode_atts( array(
            'id' => '',
            'class' => 'wpsusy_single_btn',
        ), $atts,);

        return '<span id="'.$values['id'].'" class="'.$values['class'].'">'.$user->first_name.' '.$user->last_name.'</span>';
    }
});

// User E-mail
add_shortcode('wpsusy-email', function( $atts ){
    if (isset($_REQUEST['ref'])) {
        $domain = 'wp_susy';
        $ref = $_REQUEST['ref'];
        $user = get_user_by( 'login', $ref );

        $values = shortcode_atts( array(
            'text' => __('Click here', $domain),
            'id' => '',
            'class' => 'wpsusy_single_btn',
        ), $atts,);

        return '<a id="'.$values['id'].'" class="'.$values['class'].'" href="mailto:'.$user->user_email.'" target="_blank">'.__( $values['text'], $domain ).'</a>';
    }
});

// User Phone Number
add_shortcode('wpsusy-phone', function( $atts ){
    if (isset($_REQUEST['ref'])) {
        $domain = 'wp_susy';
        $ref = $_REQUEST['ref'];
        $user = get_user_by( 'login', $ref );

        $values = shortcode_atts( array(
            'text' => __('Click here', $domain),
            'id' => '',
            'class' => 'wpsusy_single_btn',
        ), $atts,);

        return '<a id="'.$values['id'].'" class="'.$values['class'].'" href="tel:'.$user->billing_phone.'" target="_blank">'.__( $values['text'], $domain ).'</a>';
    }
});

// User Whatsapp link
add_shortcode('wpsusy-whatsapp', function( $atts ){
    if (isset($_REQUEST['ref'])) {
        $domain = 'wp_susy';
        $ref = $_REQUEST['ref'];
        $user = get_user_by( 'login', $ref );

        $values = shortcode_atts( array(
            'text' => __('Click here', $domain),
            'id' => '',
            'class' => 'wpsusy_single_btn',
            'message' => __( get_option("susy_whatsapp_btn_msg"), $domain ),
        ), $atts,);

        return '<a id="'.$values['id'].'" class="'.$values['class'].'" href="https://api.whatsapp.com/send?phone='.$user->whatsapp.'&text='.$values['message'].'" target="_blank">'.$values['text'].'</a>';
    }
});

// User Telegram link

add_shortcode('wpsusy-telegram', function( $atts ){
    if (isset($_REQUEST['ref'])) {
        $domain = 'wp_susy';
        $ref = $_REQUEST['ref'];
        $user = get_user_by( 'login', $ref );

        $values = shortcode_atts( array(
            'text' => __('Click here', $domain),
            'id' => '',
            'class' => 'wpsusy_single_btn',
        ), $atts,);

        return '<a id="'.$values['id'].'" class="'.$values['class'].'" href="'.$user->telegram_profil1.'" target="_blank">'.__( $values['text'], $domain ).'</a>';
    }
});








