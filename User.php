<?php
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
    
// dichiaro costruttore
    public function __construct($_id){
        $this->nickname = $_id;
    }
}
// istanzio 3 nuovi user
$primo = new User(001);
$primo->$nome = 'mario';
$primo->$cognome = 'rossi';
$primo->$nickname = 'hackerman';
$primo->$status = 'advanced';
$primo->$mail = 'mr@gmail.com';
$primo->$password = '123stella';
$primo->$data_dinascita = '30/10/1988';

$secondo = new User(002);
$secondo->$nome = 'paolo';
$secondo->$cognome = 'bianchi';
$secondo->$nickname = 'pokerboy';
$secondo->$status = 'intermediate';
$secondo->$mail = 'pb@gmail.com';
$secondo->$password = '123palla';
$secondo->$data_dinascita = '21/07/1993';

$terzo = new User(003);
$terzo->$nome = 'antonio';
$terzo->$cognome = 'verdi';
$terzo->$nickname = 'funnyguy';
$terzo->$status = 'beginner';
$terzo->$mail = 'av@gmail.com';
$terzo->$password = '123bella';
$terzo->$data_dinascita = '08/09/1995';

// stampo a schermo
echo $primo->nickname;
echo $primo->mail;
echo $primo->data_dinascita;
echo $primo->status;

echo $secondo->nickname;
echo $secondo->mail;
echo $secondo->data_dinascita;
echo $secondo->status;

echo $secondo->nickname;
echo $secondo->mail;
echo $secondo->data_dinascita;
echo $secondo->status;