<?php
    
    /**
     * Truncate text to length and, if necessary, append an ellipsis.
     * 
     * @author dotty
     * 
     * @param string $text Text to truncate
     * @param int $length Maximum length of string that should be returned.
     * @return string Truncated text. 
     */
    function truncate_with_ellipsis($text, $length) {
        $text_length     = strlen($text);
        $ellipsis        = "...";
        $ellipsis_length = strlen($ellipsis);
        
        // First, check if the text can be returned straight away.
        if ($text_length < $length) {
            return $text;
        }
        
        // Otherwise:
        if ($text_length + $ellipsis_length > $length) {
            $text  = substr($text, 0, $length - $ellipsis_length);
            $text .= $ellipsis;
        }
        
        return $text;
    }