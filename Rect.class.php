<?php
class Rect extends Shape {
    private $width;
    private $height;
    public $name;
    function __construct($arr=array()) {
        if(!empty($arr)){
        $this->width=$arr['width'];
        $this->height=$arr['height'];
        }
        $this->name='矩形';
    }
    function area() {
        return $this->width*$this->height;
    }
    function zhou() {
        return 2*($this->width+$this->height);
    }
    function view() {
         $form="<form action='index.php?action=Rect' method='post'>";
         $form.=$this->name."的長為：<input type='text' name='height' value=".$this->height.'>';
         $form.=$this->name."的寬為：<input type='text' name='width' value=".$this->width.'>';
         $form.="<input type='submit' name='submit' value='計算'>";
         $form.="</form>";
         echo $form;
         
    }
    function yanz($arr) {
        $bg=true;
        if($arr['width']<0){
            echo $this->name.'的寬不能小於零';
            $bg=false;
        }
        if($arr['height']<0){
            echo $this->name.'的高不能小於零';
            $bg=false;
        }
        return $bg;
    }
}
