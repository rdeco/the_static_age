<?php
// create custom plugin settings menu
add_action('admin_menu', 'staticAge_create_menu');

function staticAge_create_menu() {

	//create new submenu
	add_submenu_page( 'themes.php', 'The Static Age Theme Options', 'Theme Options', 'administrator', __FILE__, 'staticAge_settings_page');

	//call register settings function
	add_action( 'admin_init', 'staticAge_register_settings' );
}

function staticAge_register_settings() {
	//register our settings
	register_setting( 'staticAge-settings-group', 'staticAge_logo' );	
	register_setting( 'staticAge-settings-group', 'staticAge_facebook' );
}

function staticAge_settings_page() {

?>

<div class="wrap">
<h2>The Static Age Theme Settings</h2>

<form id="landingOptions" method="post" action="options.php">
    <?php settings_fields( 'staticAge-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Logo:</th>
        <td>
       		<input type="text" name="staticAge_logo" value="<?php print get_option('staticAge_logo'); ?>" /><br/>
       		*Upload using the Media Uploader and paste the URL here.
       	</td>
       	</tr>
       	
       	<tr valign="top">
        <th scope="row">Facebook Link:</th>
        <td>
       		<input type="text" name="staticAge_facebook" value="<?php print get_option('staticAge_facebook'); ?>" />
       	</td>
        </tr> 
        
        
    </table>
    <p class="submit">
    	<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>
</div>
<?php } ?>
