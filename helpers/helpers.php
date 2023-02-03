<?php
if (!function_exists('isEmpty')) {
    function isEmpty($var)
    {
        $IsEmpty = new nguyenanhung\Libraries\Snippets\IsEmpty\IsEmpty();

        return $IsEmpty->isEmpty($var);
    }
}
