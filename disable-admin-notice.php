<?php
/**
* Plugin Name: Disabel Admin Notice
* Plugin URI: https://asifkibria.com
* Description: Disbale annoying Admin Notice
* Version: 1.0.0
* Author: Asif Kibria
* Author URI: https://asifkibria.com
* License: GPL2
*/
function my_hide_notices_to_all_but_super_admin(){
  
         remove_all_actions( 'user_admin_notices' );
         remove_all_actions( 'admin_notices' );

}
add_action('in_admin_header', 'my_hide_notices_to_all_but_super_admin', 99);

?>