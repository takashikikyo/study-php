<?php 
// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function twice($twice) {
    $result = 0;
    $result = $twice * 2;
    return $result;
}
echo twice(18);
echo "\n";


// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a, $b){
    return $a + $b;
}
 
echo f(3,8);
echo "\n";


// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
$arr = array(1,3,5,7,9);
function times($arr) {
    $result = 1;
    foreach($arr as $a) {
        $result *= $a;
    }
    return $result;
}

echo times($arr);
echo "\n";


// 4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
 function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a) {
            $max_number = $a;
        }
    }
 return $max_number;
 }
 
 echo max_array(array(12,13,8,3));
 echo "\n";
 

// <!--5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。-->
// <!--strip_tags-->
$text = '<p>タグを省略する関数です</p>';
echo strip_tags($text);
echo "\n";

// array_push
$colors = array("blue", "red", "yellow");
array_push($colors, "purple", "green");
print_r($colors);
echo "\n";

// array_merge
$scores1 = array(75, 80, 58);
$scores2 = array(39, 90, 45);
$scores3 = array(100, 90, 77);
$scores_merge = array_merge($scores1, $scores2, $scores3);
print_r($scores_merge);
echo "\n";


// time, mktime
date_default_timezone_set('Asia/Tokyo');

$yesterday = mktime(0,0,0,11,5,2020);
print_r(date('Y年m月d日h時i分s秒', $yesterday));
echo "\n";


// datecd
date_default_timezone_set('Asia/Tokyo');
echo date('Y年m月d日 H時i分s秒', strtotime('2020/11/10 9:30:25') )."\n";

 ?>