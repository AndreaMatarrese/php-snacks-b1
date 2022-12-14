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
        $name = 
        // ( (strlen($_GET['name']) < 3)) ? $_GET['name'] : 'Nome troppo breve' ;

        if((isset($_GET['name'])) && (strlen($_GET['name']) < 3)){
            $name =
        }
        $age = isset($_GET['age']) ? $_GET['age'] : '' ;
        $email = isset($_GET['email']) ? $_GET['email'] : '';
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
        </div>
    </div>
        
</body>
<style>
    html{
        font-family: arial;
    }
</style>
</html>