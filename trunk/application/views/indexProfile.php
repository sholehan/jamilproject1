<h1>PROFILE</h1>

<?php
//untuk menampilkan waktu timezone lokal

    $timeZone = 'Asia/jakarta';  // +2 hours
    date_default_timezone_set($timeZone);
   
    $dateSrc = 'GMT+7:00';
    $dateTime = new DateTime($dateSrc);
   
    echo 'date(): '.date('H:i:s', strtotime($dateSrc));
    // correct! date(): 14:50:00
   
    echo 'DateTime::format(): '.$dateTime->format('H:i:s');
    // INCORRECT! DateTime::format(): 12:50:00 
	
////////////***************\\\\\\\\\\\	
//untuk menentukan jarak waktu antara waktu ke-2 dgn waktu ke-1			
$start_date = strtotime($dateSrc); //start date from database - date("Y-m-d H:i:s") made as UNIX timestamp
$end_date = strtotime("20:00:00"); //end date from database - date("Y-m-d H:i:s") made as UNIX timestamp
$ajavahe = $end_date - $start_date;
$time_between = gmstrftime('%H: %M: %S:', $ajavahe); //gmstrftime() deals with different timezones correctly. (If in example you would be situated in Estonia and you would use strftime() you get wrong answer off by 2 hrs, because timezone is GMT+2 - with gmstrftime() comes right answer.)
echo "<br/>";
echo 'You have worked: '.$time_between;
?>

<br />

<?php
//untuk menjumlah waktu
$hour_one = "01:20:20";
$hour_two = "05:50:20";
$h =  strtotime($hour_one);
$h2 = strtotime($hour_two);

$minute = date("i", $h2);
$second = date("s", $h2);
$hour = date("H", $h2);

echo "<br>";

$convert = strtotime("+$minute minutes", $h);
$convert = strtotime("+$second seconds", $convert);
$convert = strtotime("+$hour hours", $convert);
$new_time = date('H:i:s', $convert);

echo $new_time;
?> 
<br />
<!--<?php

//untuk pengulangan hari yang sama dengan minggu2 kedepan atau sebelumnya
function nextWeeksDay($date_begin,$nbrweek)
{
$nextweek=array();
for($i = 1; $i <= $nbrweek; $i++)  { // 52 week in one year of course
$nextweek[$i]=date('D d M Y', strtotime('+'.$i.' week',$date_begin));
}
return $nextweek;
}
/// end function
/// example of a select date
// var
$date_begin = strtotime('06-05-2010'); //D Day Month Year  - like function format.
$nbrweek=52;
// call function
$result=nextWeeksDay($date_begin,$nbrweek);
// Preview
for($i = 1; $i <= $nbrweek; $i++)  {
echo '<br> - '.$result[$i];
}
?> -->
<br />
<?php
//untuk menambah waktu
date_default_timezone_set('Asia/jakarta');
$dateSrc = 'GMT+7:00';
$dateTime = new DateTime($dateSrc);

// Don't do this:
$today = '15:19:50';
$tomorrow = strtotime($today) + 60*60;
print date('H:i:s', $tomorrow);
// Output: 2009-11-01

// Do this instead:
$today = '15:30:50';
$tomorrow = strtotime('+1 ', strtotime($today));
print time('Y-m-d', $tomorrow);
?>