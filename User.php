<?php

class User{
    public $nickname;
    private $password;
    private $eta;
    public $status;
    
// dichiaro costruttore
    public function __construct($_nickname = ' ', $_password =' '){
        $this->nickname = $_nickname;
        $this->password = $_password;
        
    }

}
// istanzio l'oggetto con un nickname e una password
$hackerman = new User();
$password = new User();
// accedo all'oggetto instanziato
$hackerman->nickname = 'Nuovo user';
$password->password = 'Pasword segreta';

// stampo a schermo
echo $hackerman->nickname;
echo $password->password;





