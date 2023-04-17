<?php


add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );
add_action( 'user_new_form', 'extra_user_profile_fields' );

function extra_user_profile_fields( $user ) { ?>
    <h3><?php _e("Extra profile information", "blank"); ?></h3>

    <table class="form-table">
        <tr>
            <th><label for="whatsapp"><?php _e("Whatsapp"); ?></label></th>
            <td>
                <input type="text" name="whatsapp" id="whatsapp" value="<?php echo esc_attr( get_the_author_meta( 'whatsapp', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your whatsapp."); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="skype"><?php _e("Skype"); ?></label></th>
            <td>
                <input type="text" name="skype" id="skype" value="<?php echo esc_attr( get_the_author_meta( 'skype', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your skype."); ?></span>
            </td>
        </tr>
        
    </table>
<?php }

add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id ) {
    if ( empty( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce'], 'update-user_' . $user_id ) ) {
        return;
    }
    
    if ( !current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
    update_user_meta( $user_id, 'whatsapp', $_POST['whatsapp'] );
    update_user_meta( $user_id, 'skype', $_POST['skype'] );
}

