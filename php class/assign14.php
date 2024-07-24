<?php 

/* Question 1: Event Scheduler
1. Create a PHP script that sets the timezone to America/New_York and displays
the current date and time in that timezone.
2. Modify the script to display the current date and time in three different
timezones: America/New_York , Europe/London , and Asia/Tokyo .
 */
$a= date_default_timezone_set("America/New_York");
$date=date("d-M-Y , l,  H:i:s A");
echo"$date <br>";//22-Jul-2024 , Monday, 08:40:12 AM

$Get1=date_default_timezone_set("America/New_York");
$date1=date("d-M-Y , l,  H:i:s A");
echo"$date1 this is the america/newyork time <br>";

$Get2=date_default_timezone_set("Europe/London");
$date1=date("d-M-Y , l,  H:i:s A");
echo"$date1 this is the Europe/London time <br>";

$Get3=date_default_timezone_set("Asia/Tokyo");
$date1=date("d-M-Y , l,  H:i:s A");
echo"$date1 this is the Asia/Tokyo time <br><hr>";

/* Question 2: Countdown Timer (Using forms to enter event date)
1. Write a PHP script to calculate and display the number of days remaining
until a specified future date (e.g., an upcoming event).
2. Extend the script to also display the remaining time in hours, minutes, and
seconds */
$currentdate=date_create("2024-07-21 ");
$specifieddate=date_create("2024-08-05 ");
$dateLeft=date_diff($currentdate,$specifieddate);
var_dump($dateLeft);
echo"$dateLeft->days is the days left for the offeer <br>";
echo"$dateLeft->h :$dateLeft->i:$dateLeft->s is the Hour:Minutes:seconds left for the offeer <br>";
/*object(DateInterval)[3]
  public 'y' => int 0
  public 'm' => int 0
  public 'd' => int 15
  public 'h' => int 0
  public 'i' => int 0
  public 's' => int 0
  public 'f' => float 0
  public 'invert' => int 0
  public 'days' => int 15
  public 'from_string' => boolean false
15 is the days left for the offeer
0 :0:0 is the Hour:Minutes:seconds left for the offeer */
echo"<hr>";
$currentdate=date_create("2024-07-21 00:00:00");//string value hua ye
$specifieddate=date_create("2024-08-05 00:00:00");
$dateLeft=date_diff($currentdate,$specifieddate);
var_dump($dateLeft);
echo"$dateLeft->days is the days left for the offeer <br>";
echo"$dateLeft->h :$dateLeft->i:$dateLeft->s is the Hour:Minutes:seconds left for the offeer <br>";

echo"<hr>";
/*Question 3: Date Difference Calculator (Use Forms)
1. Create a PHP script that takes two dates as input and calculates the
difference between them in days.
2. Extend the script to also display the difference in months and years. */

$a=date_create("2023-06-19");
$b=date_create("2024-07-21");
$d=date_diff($a,$b);
var_dump($d);
echo "$d->days number of days, $d->m number of months ,$d->y year is the difference ". date_format($a, 'Y-m-d') . ' and ' . date_format($b, 'Y-m-d') ."<br>";
$totalMonths = $d->y * 12 + $d->m;// year ko 12 se multiply jo month mein hua then add what difference of month given as as qabove its not proper
$totalYears = $d->y + ($d->m / 12);// year difference liya phir month ko divide kiya then add

// Display the total months and years
echo "Total months difference: " . $totalMonths . " months<br>";
echo "Total years difference: " . $totalYears . " years<hr>";

/*Question 4: Birthday Reminder (Use Forms for input b’day)
1. Write a PHP script to calculate the number of days left until the next
occurrence of a given birthday.
2. Modify the script to calculate the person's age on their next birthday.
 */
$dob=date_create("2001-02-01");
$nextbd=date_create("2025-02-01");
$curr=date_create("2024-07-21");
$daysForNextBD=date_diff($curr,$nextbd);
echo"$daysForNextBD->days is the number of days left for the birthday <br>";
$age=date_diff($dob,$nextbd);
$value=(($age->days)/365);
echo" the age of the person in the upcoming year is $value years on ".date_format($nextbd,"Y-m-d")." <hr>";

/*Question 6: Meeting Scheduler (Use Form)
1. Write a PHP script to schedule a meeting by adding a specified number of
hours and minutes to the current time. Display the meeting time in a
specified timezone.
2. Extend the script to display the meeting time in two other timezones as well.
 */
$r=date_default_timezone_set("Asia/kolkata");
$date=date("Y-m-d h:i:s");

echo $date."<br>";
$meet=date("Y-m-d h:i:s",strtotime($date."+2 hours"));//hours:mins:second
echo"in zone 'Asia/kolkata' the meeting time is $meet<hr>";

date_default_timezone_set("Asia/kolkata");
$date=date("Y-m-d h:i:s ");


//Y-m-d
//H:i
echo $date."<br>";
$meet=date("Y-m-d h:i:s ",strtotime($date."+2 hours"));//hours:mins:second
$meet = date("h:i:s ",strtotime($meet."+5 minutes"));//hours:mins:second
$meet = date("h:i:s ",strtotime($meet."+10 Seconds"));//hours:mins:second

echo"in zone 'Asia/kolkata' the meeting time is $meet<br>";
date_default_timezone_set("America/New_York");
$date=date("Y-m-d h:i:s");
echo $date."<br>";
$meet=date("Y-m-d h:i:s ",strtotime($date."+2 hours"));//hours:mins:second
$meet = date("h:i:s ",strtotime($meet."+5 minutes"));//hours:mins:second
$meet = date("h:i:s ",strtotime($meet."+10 Seconds"));//hours:mins:second
echo"in zone 'America/New_York' the meeting time is $meet<br>";
date_default_timezone_set("Europe/London");
$date=date("Y-m-d h:i:s");
echo $date."<br>";
$meet=date("Y-m-d h:i:s ",strtotime($date."+2 hours"));//hours:mins:second
$meet = date("h:i:s ",strtotime($meet."+5 minutes"));//hours:mins:second
$meet = date("h:i:s ",strtotime($meet."+10 Seconds"));//hours:mins:second
echo"in zone 'Europe/London' the meeting time is $meet<hr>";

/*24-07-22 22:37:09
in zone 'Asia/kolkata' the meeting time is 05:30:00 why after adding 2 hours it is showing 5?this is for H and 
the below is for h 24-07-22 10:38:26 PM
in zone 'Asia/kolkata' the meeting time is 05:30:00 AM */
/**Question 7: Subscription Renewal (Use form)
1. Create a PHP script that calculates the renewal date for a subscription by adding a specified number of 
months to the start date.
2. Extend the script to handle different subscription durations (e.g., monthly, quarterly, annually) and
 calculate the corresponding renewal date. */
 date_default_timezone_set("Asia/kolkata");

 $date=date("Y-m-d H:i:s");
 echo $date." ".date("A")."<br>";

 $renewal=date("Y-m-d H:i:s",strtotime($date."15 days"));
 echo"renewale time is $renewal <hr>";

/** */
function getDeadline($start_date,$days){
  $counter = 0;
  $deadline = $start_date;
  while($counter<$days){
      $deadline = date('Y-m-d',strtotime($deadline."+1 Day"));
      $day = date('l',strtotime($deadline."+1 Day"));
      echo $day." ".$deadline."<br>";
      if($day=="Saturday" || $day=="Sunday"){
        echo"$day hence this will not be coumnted <br>";
          continue;
      }
      $counter++;
  }
  return $deadline;
}

$a = getDeadline("2024-07-30",5);
echo"<hr>";

/* Question 9: Timesheet Calculation (Use form)
1. Create a PHP script that takes a start time and an end time for a work shift
and calculates the total hours worked.
2. Extend the script to calculate the total hours worked for multiple shifts
across different days and display the result.
 */

$start=date_create("2024-07-24 09:00:00");
$end=date_create("2024-07-24 17:05:39");
$diff=date_diff($start,$end);
echo"$diff->h hours $diff->s seconds $diff->i is the minutes for the shift ". date_format($end, 'H:i:s')." on ".date("Y-m-d")."<br><hr><br>";


/* Question 10: Promotion Countdownb (No Form)
1. Write a PHP script to calculate and display the number of days remaining until the end of a promotional period.
2. Modify the script to display the countdown in weeks and days (e.g., "2 weeks and 3 days remaining").
*/ 

$offerstart=date("Y-m-d l");
echo " offer started on $offerstart date <br>";

$validdays=10;
for($i=0;$i<=$validdays;$i++){
  $offertime=date("Y-m-d l",strtotime($offerstart."+ $i days"));
  if($i==$validdays){
    echo " $offertime offer is valid and offer will be present for ".( $validdays-$i )." last date today <br>";

  }else{
  echo " $offertime offer is valid and offer will be present for ".( $validdays-$i )." more days <br>";

}
}
echo"<hr><br>";
/* Question 12: Employee Time Off Tracker (Use Form)
1. Write a PHP script to calculate the remaining vacation days for an employee given their starting date and the number of vacation days they have taken.
2. Modify the script to handle different vacation policies (e.g., adding extra vacation days for years of service).
 */

/*    Question 13: Time Zone Converter (Use Form)
1. Create a PHP script that takes a date and time in one timezone and converts it to another timezone. Display the converted date and time.
*/
$arr=array("Africa/Kinshasa","Africa/Lagos","America/Chicago",	"America/Chihuahua","Asia/Hong_Kong","Asia/Katmandu",	"Asia/Khandyga",	"Asia/Kolkata");
for($i=0;$i<sizeof($arr);$i++){
date_default_timezone_set("$arr[$i]");
echo"$arr[$i] is the time zone and ".date("Y-M-d H:i:s l")." is the details of this time zone <br>";
}

echo("<hr><br>");

/* Question 15: Recurring Event Scheduler (No Form)
1. Create a PHP script to schedule a recurring event (e.g., weekly meeting) starting from a given date. Display the dates of the next 10 occurrences.
*/

$meetingdate=date("2024-07-30 H:i:s");
$day=date("l",strtotime($meetingdate));
echo"$meetingdate and $day is the day we will meet for meeting<br>";
$occurence=10;
for($i=0;$i<$occurence;$i++)
{
  $nextmeet=date("Y-m-d l H:i:s",strtotime($meetingdate."+7 days"));
  echo"$meetingdate  is the day we will meet for meeting<br>";
  $meetingdate=$nextmeet;


}
echo"<hr><br>";
/* Question 16: Age Calculator (Use Form)
1. Write a PHP script that takes a birthdate as input and calculates the current age. */
$dob=date_create("2001-02-01");
echo date_format($dob, "Y-m-d")."is the DOB ";

$currentdate=date_create("2024-07-24");
echo date_format($currentdate,"Y-m-d")." is the current date  ";
$diff=date_diff($dob,$currentdate);
echo (($diff->days)/365). "is the current age of the user<br><hr><br>";

?>