<?php

    echo strrev(" .dlrow olleH");
    echo str_repeat("Hip ", 2);
    echo strtoupper("hooray!");
    echo strlen("intro");
    echo "\n";

    function greet() {
        print "Hello\n";
    }

    greet();
    greet();

    function howdy($lang) {  #function howdy($lang='es') -> default value
        if ( $lang == 'es' ) return "Hola";
        if ( $lang == 'fr' ) return "Bonjour";
        return "Hello";
    }
    print howdy('es') . " Glenn\n";
    print howdy('fr') . " Sally\n";

    #CALL by Value
    function double($alias) {
        $alias = $alias * 2;
        return $alias;
    }

    $val  = 10;
    $dval = double($val);
    echo "Value = $val Doubled = $dval\n";

    #CALL by Reference
    function triple(&$realthing) {
        $realthing = $realthing * 3;
    }

    $val = 10;
    triple($val);
    echo "Triple = $val\n";

    #Global Scope
    function dozap() {
        global $val;
        $val = 100;
    }
    $val = 10;
    dozap();
    echo "DoZap = $val\n";

    
?>