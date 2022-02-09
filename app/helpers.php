<?php

use Illuminate\Support\Facades\Request;

/**
 * Checks witch page is active
 *
 * @param $path string path to the curren view
 * @param $active string
 * @return string
 */
function set_active(string $path, string $active = 'active'): string
{
    return Request::is($path) ? $active : '';
}
