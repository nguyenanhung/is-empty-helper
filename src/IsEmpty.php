<?php
/**
 * Project is-empty-helper
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 03/02/2023
 * Time: 15:27
 */

namespace nguyenanhung\Libraries\Snippets\IsEmpty;

class IsEmpty
{
    public function isEmpty($var)
    {
        $isset = isset($var);
        if ($isset === true) {
            if (empty($var)) {
                return true;
            }

            return false;
        }

        return true;
    }
}
