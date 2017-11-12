<?php

namespace Azub;

/**
* 
*/
class Test 
{
    public static function hello(){
        echo "<h1>".date('Y-m-d H:i:s')." changed conflicted master 22</h1>";
    }
    public static function testconflict(){
        echo "conflct new function";
    }
}

?>