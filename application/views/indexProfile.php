<h1>PROFILE</h1>

<p>
<!--  <?php
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
//$jumlah = date_sunset(
echo "<br/>";
echo 'You have worked: '.$time_between;
?>-->
  <!--
  <br />
  
  <?php
//untuk menjumlah waktu
$hour_one = "01:20:20";
$hour_two = "05:50:20";
$h =  strtotime($hour_one);
$h2 = strtotime($hour_two);
$h3= $h2 - $h;
$h4 = $h3 / 3600;
$minute = date("i", $h2);
$second = date("s", $h2);
$hour = date("H", $h2);

echo "<br />";
echo 'jam 1->    '.$hour_one;
echo "<br />";
echo $h;
echo "<br />";
echo 'jam 2->    '.$hour_two;
echo "<br />";
echo $h2;
echo "<br />";
echo 'hasil   :'.$h3;
echo "<br />";
echo 'hasil   :'.$h4;
echo "<br />";
$convert = strtotime("+$minute minutes", $h);
$convert = strtotime("+$second seconds", $convert);
$convert = strtotime("+$hour hours", $convert);
$new_time = date('H:i:s', $convert);

$kom= strtotime("+$minute minutes", $h);
	echo "<br />";echo "<br />";echo "<br />";echo "<br />";echo "<br />";
	echo $kom;
	echo "<br />";
echo $new_time;
?> -->
  <br />
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
  <br />
<!--  <?php
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
print time('H-s-i', $tomorrow);
?>-->
  <br />
  <br />
<!--  <?php
  /**
   *
   *  Gets the first weekday of that month and year
   *
   *  @param  int   The day of the week (0 = sunday, 1 = monday ... , 6 = saturday)
   *  @param  int   The month (if false use the current month)
   *  @param  int   The year (if false use the current year)
   *
   *  @return int   The timestamp of the first day of that month
   *
   **/ 
  function get_first_day($day_number=1, $month=false, $year=false)
  {
    $month  = ($month === false) ? strftime("%m"): $month;
    $year   = ($year === false) ? strftime("%Y"): $year;
   
    $first_day = 1 + ((7+$day_number - strftime("%w", mktime(0,0,0,$month, 1, $year)))%7);
 
    return mktime(0,0,0,$month, $first_day, $year);
  }

// this will output the first wednesday of january 2007 (wed 03-01-2007)
echo strftime("%a %d-%m-%Y", get_first_day(3, 1, 2007));
?>-->
  <br />
  <br />
<!--  <?php

/* calculate the sunset time for Lisbon, Portugal
Latitude: 38.4 North
Longitude: 9 West
Zenith ~= 90
offset: +1 GMT
*/

echo date("D M d Y"). ', sunset time : ' .date_sunset(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1);
?>
-->