<?php
echo "hello";
echo 5+2;
echo "5+2";

$name ="花田";
echo $name;

$keisan =7;
$goukei=$keisan * $keisan;

echo $goukei;

echo 'phpの勉強をしています';
echo "<br>";
// 演習2
echo "<p>"."5 + 7"."</p>";
echo "<br>";
echo 5 + 7;
// 変数の作り方
$name = "変数を作る";
echo $name;
echo "<br>";
// 演習３
// 2. $apple という変数を作り、文字列で「りんご」と代入しよう
// 3. $num という変数を作り、10+10を代入して計算しよう
$apple = "りんご";
$num = 10 + 10;
echo $apple;
echo "<br>"; //<br>タグは改行をするために使っているだけで使わなくても、使ってもどちらでもOKです🤗
echo $num;

?>

<?php 
$keisan = 30;
if($keisan > 10){
    echo'30は10より大きい数字です';
}
?>

<br>

<?php 
//乱数の範囲を指定し、1~6の間で乱数を生成
echo mt_rand(1,6);

?>

<br>

<?php 
$number = mt_rand(1,4);
if($number===1){
   echo'<img src="img/img_1.jpg" />';
}else if($number===2){
    echo'<img src="img/img_2.jpg" />';
}else if($number===3){
    echo'<img src="img/img_3.jpg" />';
}else if($number===4){
    echo'<img src="img/img_4.jpg" />';
}

?>
