<?php
namespace Helper;
class InputHelper{
    static function input(string $info):string
    {
        echo "$info :";
        return strtolower(trim(fgets(STDIN)));
    }
    
}
?>