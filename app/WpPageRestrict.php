<?php

namespace WpPageRestrict;

class WpPageRestrict
{
    public function __construct()
    {
        add_action('template_redirect', [$this, 'redirect_non_logged_users']);
    }

    public function plugin_init()
    {
    }

    public function redirect_non_logged_users()
    {
        if (!is_user_logged_in()) {
            wp_redirect(wp_login_url(get_permalink()));
            exit();
        }
    }
}
