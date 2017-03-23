<html>
<head>
<title>フィボナッチ数列</title>
</head>
<body>

<?php
$f = new fibo();
$T = false ;
$f->x = $_POST["x"];
if(is_numeric($f->x)){
    if((0 > $f->x)|| 70 < $f->x){
    echo "定義域外の数値が入力されました。","<br/>";
    }else{
        $f->fibopri();
    }
}else{
    echo "半角数字で入力されていません。","<br/>";
}
class fibo{
    public $x;
    public $a;
    function __construct(){
        $this->a = array();
        $this->a[0] = 1;
        $this->a[1] = 1;
    }
    function fibopri(){
        if($this->x == 1){
            print "１項目のフィボナッチ数列<br/>";
            print $this->a[0]."<br/>";
            print "１項のフィボナッチ数列<br/>";
            print $this->a[0]."<br/>";
        }else{
            for($i = 0; $i < ($this->x - 2) ; $i++){
                $this->a[($i + 2)] = $this->a[($i + 1)] + $this->a[$i];
            }
            print $this->x."項目のフィボナッチ数列<br/>";
            print $this->a[($this->x - 1)]."<br/>";
            print "1項目から".$this->x."項目までのフィボナッチ数列<br/>";
            for($i = 0 ; $i < $this->x ; $i++){
                echo $this->a[$i]," ";
            }
            print"<br>";
        }
    }

} ?>
<a href="fibonacci01.html" >　前のページに戻る　</a>
</body>
</html>