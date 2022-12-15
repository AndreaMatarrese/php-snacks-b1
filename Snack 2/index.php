<!-- ## Snack 2 -->
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php snacks b1</title>
    </head>
    <body>
    </div>
    <div class="snack2">
        <?php 
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $age = isset($_GET['age']) ? $_GET['age'] : '' ;
        $email = isset($_GET['email']) ? $_GET['email'] : '';
        $pos_at = strpos($email, '@');
        $pos_dot = strpos($email,'.', $pos_at);
        // lunghezza nome
        if(strlen($name) > 3 && is_numeric($age) && $pos_at !== false && $pos_dot !== false){
            $message= 'Accesso riuscito';
        } else {
            $message= 'ACCESSO NEGATO';
        };
        
        ?>
        <h2>Snack 2</h2>
        <form action="" method="get">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name">
            <label for="age">Et&aacute;</label>
            <input type="text" id="age" name="age">
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
            <button>Verifica</button>
        </form>
        <div>
            <div>Il nome è: <strong><?= $name?></strong></div>
            <div>L'età è: <strong><?= $age?></strong></div>
            <div>L'email è: <strong><?= $email?></strong></div>
            <h1><?= $message?></h1>
        </div>
    </div>
        
</body>
<style>
    html{
        font-family: arial;
    }
</style>
</html>