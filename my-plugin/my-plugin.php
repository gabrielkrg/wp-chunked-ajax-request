<?php

/*
Plugin Name: My Plugin
Description: 
Author: Gabriel
Version: 1.0.0
*/

require_once('src/Post.php');

/**
 * Add the top level menu page.
 */
function mpg_options_page()
{
    add_menu_page(
        'My plugin',
        'My plugin',
        'manage_options',
        'mpg',
        'mpg_options_page_html'
    );
}

/**
 * Register our mpg_options_page to the admin_menu action hook.
 */
add_action('admin_menu', 'mpg_options_page');

/**
 * Top level menu callback function
 */
function mpg_options_page_html()
{
    // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }

    // check if the user have submitted the settings
    // WordPress will add the "settings-updated" $_GET parameter to the url
    if (isset($_GET['settings-updated'])) {
        // add settings saved message with the class of "updated"
        add_settings_error('mpg_messages', 'mpg_message', __('Settings Saved', 'mpg'), 'updated');
    }

    // show error/update messages
    settings_errors('mpg_messages'); ?>
    <div class="wrap">

        <h2>Criar Posts</h2>
        <table>
            <tr>
                <td>
                    <form id="action">
                        <?php
                        // output save settings button
                        submit_button('Criar');
                        ?>

                    </form>
                </td>
                <td>
                    <span class="spinner"></span>
                </td>
            </tr>
        </table>
        <div id="response"></div>
    </div>
<?php
}

/**
 * Scripts Ajax Buttons Action
 */
add_action('admin_enqueue_scripts', 'mpg_enqueue_scripts');
function mpg_enqueue_scripts($hook)
{
    if ('toplevel_page_mpg' !== $hook) {
        return;
    }

    wp_enqueue_script(
        'ajax-script',
        plugins_url('assets/js/actions.js', __FILE__),
        array('jquery'),
        '1.0.0',
        true
    );


    $title_nonce = wp_create_nonce('title_example');
    wp_localize_script(
        'ajax-script',
        'my_ajax_obj',
        array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => $title_nonce,
        )
    );
}
