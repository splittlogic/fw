<?php

dd('helpers');

// Returns html formatted Bootstrap icon, called by name
// Usage: bi('alarm')
if (! function_exists('bi')) {
    function bi($name) {
        return '<i class="bi bi-' . $name . '"></i>';
    }
}