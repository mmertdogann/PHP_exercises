<h1>Hello from Mert's HTML Page</h1>
<p>
    <?php
    $stuff = array("Hi", "There");
    echo $stuff[1], "\n";

    $stuff2 = array("name" => "Chuck",
                    "course" => "WA4E");
    echo $stuff2["course"], "\n";

    #The function print_r() shows PHP data
    echo("<pre>\n");
    print_r($stuff2);
    echo("\n</pre>\n");

    echo("<pre>\n");
    var_dump($stuff2);
    echo("\n</pre>\n");

    #We can construct arrays like this (index)
    $arr1 = array();

    $arr1[] = "Path of Exile";
    $arr1[] = "Diablo 2";
    echo("<pre>\n");
    print_r($arr1);
    echo("\n</pre>\n");


    #We can construct arrays like this (key,value)
    $arr2 = array();
    $arr2["name"] = "Mert";
    $arr2["surname"] = "Dogan";
    echo("<pre>\n");
    print_r($arr2);
    echo("\n</pre>\n");

    #Loop through arrays
    echo("<pre>\n");
    foreach ($arr2 as $k => $v) {
        echo "Key= ", $k, " Val= ", $v,"\n";
    }
    echo("\n</pre>\n");

    #Counted loop
    echo("<pre>\n");
    for ($i = 0; $i < count($arr1); $i++) {
        echo "I= ", $i, " Val= ", $arr1[$i],"\n";
    }
    echo("\n</pre>\n");

    #Like split

    $inp = "This is a sentence with seven words";
    $temp = explode(' ', $inp);
    echo("<pre>\n");
    print_r($temp);
    echo("\n</pre>");
    ?>
</p>
<p>Another paragraph.</p>