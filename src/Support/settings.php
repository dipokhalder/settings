<?php

use Dipokhalder\Settings\Settings;

if (! function_exists('settings')) {
    /**
     * Get a settings manager instance.
     */
    function settings(): Settings
    {
        return app('settings');
    }
}
