<?php

class User{
    public $nickname;
    private $password;
    private $eta;
    public $status;
    
// dichiaro costruttore
    public function __construct($_nickname = ' '){
        $this->nickname = $_nickname;
        $this->status = $_status;
        
    }

}
// istanzio 3 nuovi user con un nickname
$hackerman = new User();
$pokerboy = new User();
$funnyguy = new User();

// accedo agli oggetti istanziati
$hackerman->nickname = 'hackerman99 ';
$pokerboy->nickname = 'pokerboy79 ';
$funnyguy->nickname = 'funnyguy88 ';


// stampo a schermo
echo $hackerman->nickname;
echo $pokerboy->nickname;
echo $funnyguy->nickname;






