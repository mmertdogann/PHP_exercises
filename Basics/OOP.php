<?php
#Access "static item" in a class  (No $this!!!) ***STATIC*** (No needs object)
#echo DateTime::RFC822."\n"

#Access items in an object                      ***DYNAMIC*** (Needs an object)
#echo $z->format('Y-m-d')."\n"


class Person {
    public $fullname = false;
    public $givenname = false;
    public $familyname = false;
    public $room = false;

    function get_name() {
        if ($this->fullname !== false) return $this->fullname;
        if ($this->familyname !== false && $this->givenname !== false)
            return $this->givenname . ' ' . $this->familyname;
        return false;
    }
}

$mert = new Person();
$mert->fullname = "Mert doğan";
$mert->room = "A415";

$melis = new Person();
$melis->familyname = "Doğan";
$melis->givenname = "Bilmem";
$melis->room = "A401";

print $mert->get_name() . "\n";
print $melis->get_name() . "\n";

echo "<pre>";
print_r($mert);
echo "</pre>";

#************************************************************************************************#

$x = new DateTime('1999-04-31');
$oops = DateTime::getLastErrors();
echo("<pre>");
print_r($oops);
echo("</pre>");

echo("<p></p>");
#******************************* Object with Constructors ****************************************#
class PartyAnimal {
    function __construct() {
        echo("Constructed\n");
    }
    function something() {
        echo("Something\n");
    }
    function __destruct() {
        // TODO: Implement __destruct() method.
        echo("Destructed\n");
    }


}

echo("--One\n");
$x = new PartyAnimal();
echo("--Two\n");
$y = new PartyAnimal();
echo("--Three\n");
$x->something();
echo("--The End?\n");

echo("<p></p>");

#************************************* Inheritance ********************************************#

class Hello {
    protected $lang;
    function __construct($lang) {
        $this->lang = $lang;
    }
    function greet() {
        if ($this->lang == 'fr') return 'Bonjour';
        if ($this->lang == 'es') return 'Hola';
        return 'Hello';
    }
}

class Social extends Hello {
    function bye() {
        if ($this->lang == 'fr') return 'Au revoir';
        if ($this->lang == 'es') return 'Adios';
        return 'Goodbye';
    }
}

$hi = new Social('es');
echo $hi->greet()."\n";
echo $hi->bye()."\n";

?>