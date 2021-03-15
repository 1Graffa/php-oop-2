<?php

class User{
    public $nickname;
    public $password;
    public $eta;
    public $status;
    public $bonus = 0;
    
// dichiaro costruttore
    public function __construct($_nickname = ' '){
        $this->nickname = $_nickname;
        $this->status = $_status;
    }
    public function setBonus($status){
        if($status == 'advanced'){
            $this->bonus = 100;
        }
        elseif($status == 'intermediate'){
            $this->bonus = 50;
        }
        else {
            $this->bonus = 20;
        }
    }
    public function getBonus(){
        return $this->bonus;
    }
}
// istanzio 3 nuovi user con un nickname e uno status
$hackerman = new User();
$pokerboy = new User();
$funnyguy = new User();

// accedo agli oggetti istanziati
$hackerman->nickname = 'hackerman99 ';
$hackerman->password = '123stella ';
$hackerman->eta = '30';
$hackerman->status = 'advanced';

$pokerboy->nickname = 'pokerboy79 ';
$pokerboy->password = '123palla ';
$pokerboy->eta = '25';
$pokerboy->status = 'intermediate';

$funnyguy->nickname = 'funnyguy88 ';
$funnyguy->password = '123opla ';
$funnyguy->eta = '19';
$funnyguy->status = 'beginner';

// stampo a schermo
echo $hackerman->nickname;
echo $hackerman->password;
echo $hackerman->eta;
echo $hackerman->status;


echo $pokerboy->nickname;
echo $pokerboy->password;
echo $pokerboy->eta;
echo $pokerboy->status;


echo $funnyguy->nickname;
echo $funnyguy->password;
echo $funnyguy->eta;
echo $funnyguy->status;










