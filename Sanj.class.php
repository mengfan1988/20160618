<?php
class Sanj extends Shape {
    public $name;
    public $width1;
    public $width2;
    public $width3;
    public $height;
    public function __construct($arr=array()) {
        if(!empty($arr)){
            $this->width1=$arr['width1'];
            $this->width2=$arr['width2'];
            $this->width3=$arr['width3'];
            $this->height=$arr['height'];
        }
        $this->name='三角形';
    }
    function area(){
        return $this->width1*$this->height;
    }
    function zhou() {
        return $this->width1+$this->width2+$this->width3;
    }
    function view() {
         $form="<form action='index.php?action=Sanj' method='post'>";
         $form.=$this->name."的宽1為：<input type='text' name='width1' value=".$this->width1.'>';
         $form.=$this->name."的寬2為：<input type='text' name='width2' value=".$this->width2.'>';
         $form.=$this->name."的寬3為：<input type='text' name='width3' value=".$this->width3.'>';
         $form.=$this->name."的高為：<input type='text' name='height' value=".$this->height.'>';
         $form.="<input type='submit' name='submit' value='計算'>";
         $form.="</form>";
         echo $form;
    }
    function yanz($arr) {
     $bg=true;
        if($arr['width1']<0){
            
            echo $this->name.'的寬1不能小於零';
            $bg=false;
        }
         if($arr['width2']<0){ 
             
            echo $this->name.'的寬2不能小於零';
           $bg=false;
        }
         if($arr['width3']<0){
             
            echo $this->name.'的寬3不能小於零';
            $bg=false;
        }
        if($arr['height']<0){
            
            echo $this->name.'的高不能小於零';
            $bg=false;
        }
        return $bg;
    }   
    
}
