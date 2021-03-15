<?php

class User{
    public $nickname;
    private $password;
    private $eta;
    public $status;
    
// dichiaro costruttore
    public function __construct($_nickname = ' ', $_status =' '){
        $this->nickname = $_nickname;
        $this->status = $_status;
        
    }

}
// istanzio l'oggetto con un nickname e una password
$hackerman = new User();
$pallone12 = new User();
// accedo all'oggetto instanziato
$hackerman->nickname = 'Nuovo user';
$newUser->status = 'Advanced';

// stampo a schermo
echo $hackerman->nickname;
echo $newUser->status;





