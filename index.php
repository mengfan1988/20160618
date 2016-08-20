<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>图形计算器</title>
        <style>
            a{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
    <center>
        <h1>圖形計算器</h1>
        <a href="?action=Rect">矩形</a>
        <a>||</a>
        <a href="?action=Sanj">三角形</a>
        <a>||</a>
        <a href="?action=Circle">圆形</a>
    </center>
    <hr><br>
    <?php 
    function __autoload($classname){
        include $classname.'.class.php';
    }
    if(!empty($_GET['action'])){
        $classname=$_GET['action'];
        $Shape=new $classname($_POST);
        $Shape->view(); 
        if(isset($_POST['submit'])){
        if($Shape->yanz($_POST)){
        echo '面积为'.$Shape->area();
        echo '周长为'.$Shape->zhou();
        }
        } 
    }else{
        echo '请选择一个要计算的图形';
    }
            
            
            ?>
    </body>
</html>
