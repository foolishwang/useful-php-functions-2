<?php
    
    /**
     * Add HTML anchor tags to all URLs in a string.
     * 
     * @author dotty
     * 
     * @param string $text Text to linkify
     * @return string Text provided but with anchor tags added.
     */
    function linkify_text($text, $linkTwitterTags=true) {
        $text = preg_replace("#(^|[\n ])(http://[\w]+[^ \"\n\r\t< ]*)#", "\\1<a href=\"\\2\" target=\"_blank\">\\2</a>", $text);
        $text = preg_replace("#(^|[\n ])((www)\.[^ \"\t\n\r< ]*)#", "\\1<a href=\"http://\\2\" target=\"_blank\">\\2</a>", $text);
        
        if ($linkTwitterTags) {
            $text = preg_replace("/ @(\w+)/", "<a href=\"http://www.twitter.com/\\1\" target=\"_blank\">@\\1</a>", $text);
            $text = preg_replace("/^@(\w+)/", "<a href=\"http://www.twitter.com/\\1\" target=\"_blank\">@\\1</a>", $text);
        }
        
        return $text;
    }