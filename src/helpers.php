<?php

// Set helper file path
$HelperPath = null;
if (file_exists(__DIR__.'/Helpers'))
{
    $HelperPath = __DIR__.'/Helpers' . "/";
}

// Get list of files in Helpers folder - Remove . & ..
if (!is_null($HelperPath))
{
    $HelperFiles = null;
    $HelperFiles = array_diff(scandir($HelperPath), array('.', '..'));

    // Include all Helper Files
    if (!is_null($HelperFiles) && !is_null($HelperPath))
    {
        if (is_array($HelperFiles))
        {
            if (!empty($HelperFiles))
            {
                foreach ($HelperFiles as $file)
                {
                    include_once($HelperPath . $file);
                }
            }
        }
    }
}


// Returns html formatted Bootstrap icon, called by name
// Usage: bi('alarm')
if (! function_exists('bi')) {
    function bi($name) {
        return '<i class="bi bi-' . $name . '"></i>';
    }
}