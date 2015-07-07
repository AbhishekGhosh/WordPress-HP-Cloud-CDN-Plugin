<?php
/**
 * This file could be used to catch submitted form data. When using a non-configuration
 * view to save form data, remember to use some kind of identifying field in your form.
 */
    $number = ( isset( $_POST['number'] ) ) ? stripslashes( $_POST['number'] ) : '';
    self::update_dashboard_widget_options(
            self::wid,                                  //The  widget id
            array(                                      //Associative array of options & default values
                'example_number' => $number,
            )
    );

?>
<p>This file is present at `/wp-content/plugins/shell_plugin/shell-config.php`.</p>
<p>This is intended to be a configuration part of a widget inside WordPress by default. This is kept for the advanced users, sysadmins and the developers to extend functions of this plugin.</p>
