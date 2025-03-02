<?php

namespace Dipokhalder\Settings;

use Settings;
use Dipokhalder\Settings\Settings as SettingsManager;

trait HasSettings
{
    /**
     * Retrieve the settings manager instance for this model.
     */
    public function settings(): SettingsManager
    {
        return Settings::for($this);
    }
}
