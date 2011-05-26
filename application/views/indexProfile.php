<h1>PROFILE</h1>
<?php
    $timeZone = 'Asia/jakarta';  // +2 hours
    date_default_timezone_set($timeZone);
   
    $dateSrc = 'GMT+7:00';
    $dateTime = new DateTime($dateSrc);
   
    echo 'date(): '.date('H:i:s', strtotime($dateSrc));
    // correct! date(): 14:50:00
   
    echo 'DateTime::format(): '.$dateTime->format('H:i:s');
    // INCORRECT! DateTime::format(): 12:50:00 
	?>