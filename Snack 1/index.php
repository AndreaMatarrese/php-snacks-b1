<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */ -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php snacks b1</title>
    </head>
    <body>
    <div class="snack1">
    <?php 
        $arr_match=  [
            [
                "houseTeam" => [
                    "points" => 55,
                    "name" => 'Olimpia Milano',
                ],
                "hostTeam" => [
                    "points" => 15,
                    "name" => 'Cantù',
                ]
            ],
            [
                "houseTeam" => [
                    "points" => 75,
                    "name" => 'Napoli',
                ],
                "hostTeam" => [
                    "points" => 40,
                    "name" => 'Catanzaro',
                ]
            ],
            [
                "houseTeam" => [
                    "points" => 90,
                    "name" => 'HappyCasa Brindisi',
                ],
                "hostTeam" => [
                    "points" => 50,
                    "name" => 'Torino',
                ]
            ]
        ];
        
        ?>
    <h2>Snack 1</h2>
    <ul><?php
        $arr_match_len =count($arr_match);
        for($i=0;$i<$arr_match_len;$i++){
            $match = $arr_match[$i];
            echo '<li>'. $match['houseTeam']['name'] . ' - ' . $match['hostTeam']['name'] . ' | '
            . $match['houseTeam']['points'] . ' - ' . $match['hostTeam']['points'] .'</li>';
        }
    ?>

    </ul>
    </div>
</body>
<style>
    html{
        font-family: arial;
    }
</style>
</html>