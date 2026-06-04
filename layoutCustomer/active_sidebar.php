<?php

function active_sidebar(string $pagename): string
{
    $current = basename(dirname($_SERVER['PHP_SELF'])); // ambil nama folder
    $active   = 'flex items-center space-x-3 px-3 py-2.5 bg-primary text-on-primary rounded-lg transition-transform active:scale-95 font-medium text-sm';
    $inactive = 'flex items-center space-x-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 rounded-lg transition-transform active:scale-95 font-medium text-sm';
    return ($current === $pagename) ? $active : $inactive;
}

?>