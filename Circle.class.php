<?php

class Circle extends Shape{
    const PI=3.14;
    public $r;
    public $name;
    public function __construct($arr=array()) {
        if(!empty($arr)){
            $this->r=$arr['r']; 
        }
        $this->name='圆形';
    }
    public function area(){
        return self::PI*$this->r*$this->r;
    }
    public function zhou(){
        return 2*self::PI*$this->r;
    }
    public function view(){
         $form="<form action='index.php?action=Circle' method='post'>";
         $form.=$this->name."的半径為：<input type='text' name='r' value=".$this->r.'>';
         $form.="<input type='submit' name='submit' value='計算'>";
         $form.="</form>";
         echo $form;
    }
    public function yanz($arr){
        $bg=true;
        if($arr['r']<0){
            
            echo $this->name.'的半径不能小於零';
            $bg=false;
        }
        return $bg;
    }
    
}
