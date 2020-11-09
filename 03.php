<?php
$name = "崇";
if ($name == "崇") {
    echo "私は".$name."です";
} else {
    echo $name."ではありません";
}
?>

<?php 
$total = 0;

for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
?>


<?php 
$fruits = ["梨 ", "ぶどう ", "パイナップル ", "いちご ", "さくらんぼ "];
foreach ($fruits as $fruit) {
    echo $fruit;
}
?>

<?php
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i."\n";
  }
}
?>