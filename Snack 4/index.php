<!-- ## Snack 4 -->
<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php snacks b1</title>
    </head>
    <body>
    <div class="snack4">
        <h2>Snack 4</h2>
        <?php 
            $arr_random = [];
            while (count($arr_random) < 15){
                $numbers= rand(1,100);
                if(!in_array($numbers,$arr_random)){
                    $arr_random[] = $numbers;
                }
            }      
            var_dump($arr_random)      
        ?>
        
    </div>
        
</body>
<style>
    html{
        font-family: arial;
    }
</style>
</html>