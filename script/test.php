<?

include '../script/dbincludes.php';

$informationarrayyear="2015";
$informationarraymonth="July";
$informationarrayday="04";
$informationarrayhour="18";
$informationarraymin="32";

//echo mergedate($informationarrayyear, $informationarraymonth, $informationarrayday, $informationarrayhour, $informationarraymin);


////hour minute second month day year
//$testdate=mktime(0, 0, 0, 7, 1, $informationarrayyear);
//
//$date = date('Y-m-d H:i:s', $testdate);
//echo $date;

$datetimeinput ="2016-12-25 20:45:00";

echo returndateday($datetimeinput);
echo returndatemonth($datetimeinput);
echo returndatehour($datetimeinput);


?>