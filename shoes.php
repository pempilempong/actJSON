<?php
    header('Access-Control-Allow-Origin: *');
  
    $shoes = [
        [   
            "img" => "curry.jpg",
            "brand" => "Under Armour",
            "model" => "Curry 9",
            "colorway" => "Sesame Street Elmo",
            "size" => "US Men's",
            "sizes" => ["8","9","10","11",]
        ],
        [
            "img" => "lebron.png",
            "brand" => "Nike",
            "model" => "LeBron 20",
            "colorway" => "Violet Frost/Purple Pulse/Canyon Purple/Metallic Gold",
            "size" => "US Men's",
            "sizes" => ["8","9","10","11"]
        ],
        [
            "img" => "harden.jpg",
            "brand" => "Adidas",
            "model" => "Harden Vol. 5",
            "colorway" => "Team Navy/Cloud White/Vivid Red",
            "size" => "US Men's",
            "sizes" => ["8","9","10","11"]
        ],
        [
            "img" => "wade.png",
            "brand" => "Li-Ning",
            "model" => "Way of Wade 10",
            "colorway" => "Blossom",
            "size" => "US Men's",
            "sizes" => ["8","9","10","11"]
        ],
        [
            "img" => "kawhi.jpg",
            "brand" => "New Balance",
            "model" => "Kawhi 2",
            "colorway" => "Black / White",
            "size" => "US Men's",
            "sizes" => ["8","9","10","11"]
        ]

    ];

    $data = json_encode($shoes);
    echo $data;
    
?>