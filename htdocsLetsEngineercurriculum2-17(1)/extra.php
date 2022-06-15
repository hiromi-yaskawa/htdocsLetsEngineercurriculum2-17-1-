ループ文 × 条件分岐
<br>
<?php
$ct =0;
$sum =0;
do {
$ct++;
$num = rand(1,6);
printf("%d回目 = %d<br>",$ct,$num);
$sum += $num;
}while ($sum<=40);
printf("合計%d回でゴールしました。<br>",$ct);
?>


<br>
関数 × 条件分岐
<br>

<?php

if(date("H")>=6 and date("H")<=11){
echo "<p>おはようございます。</p>";
echo "<p>今日も一日頑張りましょう。</p>";
}else if(date("H")>=12 and date("H")<=17){
echo "<p>こんにちは。</p>";
echo "<p>今日は良い天気です。</p>";
} else if(date("H")>=18 and date("H") >=5){
echo "<p>こんばんは。</p>";
echo "<p>今日もお疲れ様でした。</p>";
} else {

}
?>
