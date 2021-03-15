<?php
require_once 'GetStatus.php';
//creo classe
class User{
    public $id;
    public $nome;
    public $cognome;
    public $nickname;
    public $status;
    public $mail;
    public $password;
    public $data_di_nascita;

    use GetStatus;
    
// dichiaro costruttore
    public function __construct($_id, $_nickname, $_mail){
        $this->id = $_id;
        $this->nickname = $_nickname;
        $this->mail = $_mail;
    }
}
// istanzio 3 nuovi user
$user1 = new User(001,'hackerman','mr@gmail.com');
$user1->nome = 'mario';
$user1->cognome = 'rossi';
$user1->status = 'advanced';
$user1->password = '123stella';
$user1->data_di_nascita = '30/10/1988';

$user2 = new User(002,'pokerboy','pb@gmail.com');
$user2->nome = 'paolo';
$user2->cognome = 'bianchi';
$user2->status = 'intermediate';
$user2->password = '123palla';
$user2->data_di_nascita = '21/07/1993';

$user3 = new User(003,'funnyguy','av@gmail.com');
$user3->nome = 'antonio';
$user3->cognome = 'verdi';
$user3->status = 'beginner';
$user3->password = '123bella';
$user3->data_di_nascita = '08/09/1995';

// stampo a schermo
echo $user1->nickname;
echo $user1->mail;
echo $user1->status;
echo $user1->password;
echo $user1->data_di_nascita;

echo $user2->nickname;
echo $user2->mail;
echo $user2->status;
echo $user2->password;
echo $user2->data_di_nascita;

echo $user3->nickname;
echo $user3->mail;
echo $user3->status;
echo $user3->password;
echo $user3->data_di_nascita;

$users = [$user1, $user2, $user3]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <hr>
    <?php foreach ($users as $user) {?>
        <div>
            <h3 style="text-transform:capitalize;background-color:lightgreen""><?= $user->nome .' ' . $user->cognome ?></h3>
            <div>
                <p>Nickname: <strong><?= $user->nickname ?></strong></p>
                <p>E-mail: <?= $user->mail ?></p>
                <p>Level: <span style="text-transform:uppercase;background-color:lightblue"><?= $user->status ?></span></p>
                <p>Password: <?= $user->password ?></p>
                <p>Date of birth: <?= $user->data_di_nascita ?></p>
            </div>
            <hr>
        </div>
    <?php } ?>
</body>
</html>