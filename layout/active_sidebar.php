<?php

function active_sidebar(string $pagename): string
{
    $current  = basename(dirname($_SERVER['PHP_SELF']));
    $active   = 'flex items-center space-x-3 px-3 py-2.5 bg-red-800 text-yellow-300 rounded-lg transition-transform active:scale-95 font-medium text-sm';
    $inactive = 'flex items-center space-x-3 px-3 py-2.5 text-white hover:bg-yellow-700 rounded-lg transition-transform active:scale-95 font-medium text-sm';
    return ($current === $pagename) ? $active : $inactive;
}

?>