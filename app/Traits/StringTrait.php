<?php

namespace App\Traits;

trait StringTrait
{
    /**
     * Clear string from spaces, tags and html special chars
     *
     * @param [type] $string
     * @return string
     */
    protected function clearString($string): string
    {
        // removing spaces from the beginning and end of a line
        $string = trim($string);

        // remove escaped characters
        $string = stripslashes($string);

        // remove tags
        $string = strip_tags($string);

        // converting special characters to HTML
        $string = htmlspecialchars($string);
        
        return $string;
    }
}
