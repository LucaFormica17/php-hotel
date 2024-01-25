<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">  
                    <table class="table">
                        <thead>
                            <tr>
                                <?php 
                                    foreach (array_keys($hotels[0]) as $key) {
                                        echo "<th>".$key."</th>";
                                    }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach($hotels as $hotel){
                                    echo "<tr>";
                                    foreach($hotel as $value){
                                        if($value === true){
                                            echo "<th>Yes</th>";
                                        } elseif($value === false){
                                            echo "<th>No</th>";
                                        }
                                        else{
                                            echo "<th>".$value."</th>";
                                        }
                                    }
                                    "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>              
                </div>
            </div>
        </div>
    </main>
</body>
</html>