<?php

$fauna = [
    "Africa" => [
        "Bufo bufo",
        "Goliathus giganteus",
        "Bitis gabonica"
    ],
    "Antarctica" => [
        "Hydrurga leptonyx",
        "Otariidae",
        "Mirounga leonina"
    ],
    "Asia" => [
        "Ailuropoda melanoleuca",
        "Viverra zibetha",
        "Tamias"
    ],
    "Australia" => [
        "Macropus eugenii",
        "Phascolarctos cinereus",
        "Rattus fuscipes"
    ],
    "Europe" => [
        "Nepa",
        "Mustela lutreola",
        "Bison bonasus"
    ],
    "North America" => [
        "Procyon lotor",
        "Neovison vison",
        "Lepus flavigularis"
    ],
    "South America" => [
        "Mico leucippe",
        "Myrmecophaga tridactyla",
        "Callicebus donacophilus"
    ]
];

//basic task
$new_animals = new_animals($fauna);

//additional task
print_animal($fauna);


function new_animals($fauna){
    $animals = array();
    $new_animals = array();
    foreach ($fauna as $continent){
        foreach ($continent as $animal){
            if (str_word_count($animal, 0) == 2){
                $animals[] = explode(" ", $animal);
            }
        }
    }
    
    $first_word = array_column($animals, 0);
    $second_word = array_column($animals, 1);
    shuffle($second_word);

    echo "<h3>New animals: </h3>";

    for ($i = 0; $i < count($animals); $i++) {
        $a = $i + 1;
        $new_animals[$i] = "<p style='padding: 0; margin: 0'>{$a}. {$first_word[$i]} {$second_word[$i]} </p>";
        echo $new_animals[$i];
    };

    return $new_animals;
}

function print_animal($fauna){
    $continents = array();
    foreach ($fauna as $continent => $animal){
        $continents[] = $continent;
        echo "<h2>$continent</h2>";
        echo (implode (", ", $animal)) . ".";
    }

}
