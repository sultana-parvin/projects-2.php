<?php
  $Naissance = "20-07-1995";
  $date = date("Y-m-d");
  $diff = date_diff(date_create($Naissance), date_create($date));
  echo 'Votre age est '.$diff->format('%y') ;

?>

<?php
$time = gettimeofday();
echo "\n";
echo " A cet instant, le timestamp est ".$time['sec']." secondes et ".
$time['usec']." microsecondes depuis le 1er Janvier 1970.<br />";
echo date ("d/m/Y H:i:s", 1207742661)
?>