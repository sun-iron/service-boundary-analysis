<?php

// Get stack node item to array
//
function var_backtrace() {
    $back_stack = debug_backtrace();

    $i = 0;
    foreach($back_stack as $node) {
        // var_dump($node);
        $func = $node['function'];
        $path = $node['file'];
        $file = basename($node['file']);
        $line = $node['line'];

        print "[".$i++."]  ".$file.":".$func.
                "()--".$path."(".$line.")\n"; 
    }
}

function begin_backtrace($msg) {
        call_2nd();
}

function call_2nd() {
        call_3rd();
}

function call_3rd() {
  // print-out stack information via PHP function
  //print_r(debug_print_backtrace());
    
  // call for BACKTRACE funtion
  //
  var_backtrace();
}

begin_backtrace("show");

?>
