<?php


$time = strtotime('1996-09-15 17:25:43');

function humanTiming ($time)
{

    $time = time() - $time; // to get the time since that moment

    $tokens = array (
        86400 => 'day',
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }

}

$convertToInt = ((int) humanTiming($time));

$myLife = ($convertToInt / 29767 * 100);
$totalLife = round($myLife,2) . "%";


// 81.5 years in days
// Is 29767.2
//
?>

<h4>I've been alive for <b><?php echo $convertToInt ?></b> days and I've have lived <b><?php echo $totalLife ?></b> of my life.
</h4>