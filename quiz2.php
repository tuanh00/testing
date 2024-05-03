<?php
/*
DW3-ICE1-Syntax - Class 2 Quiz 2
Name: Huynh Tu Anh, Chau
Date: 16 Jan 2024
*/

//1 echo'Declare an object and pass arguments'
echo 'Declare an object and pass arguments';

//2 Display the name of the creator of PHP 
//  echo'Rasmus Lerdorf is the creator of PHP';
echo 'Rasmus Lerdorf';

//3 Output: Hello Sonic
//  $Name='Sonic';
//  $msg='Hello $name';
$Name = 'Sonic';
$msg = "Hello $Name";
echo "$msg";

//4 Display it's so beautiful to share
echo 'It\'s so beautiful to share';

//5 output: <img src="site-icon.gif">
//  $img='site-icon.gif'; 
//  echo <img src='$img'/>;
$img = 'img.jpg';
echo "<img src='$img'/>";

//6 Declare and assign values class=(54%3)/2;
$class = (54 % 3) / 2;

//7 Output of the following lines
//  Output 1: Hello QuEbEc  
//  Output 2: Hello CAnAdA
echo ("Hello QuEbEc<br/>");
echo ("Hello CAnAdA<br/>");

//8 $val=((99%2)*9/2)*2; echo "$val";
$val = ((99 % 2) * 9 / 2) * 2;
echo $val;

//9 $messages['success']="Congratulations!";
//  $countSuccess=" 5 stars!";
//  Expected exit: Congratulations! 5 stars!
$messages['success'] = "Congratulations!";
$countSuccess = " 5 stars!";
echo "<p>{$messages['success']} {$countSuccess}</p>";

//10 echo  'I'm always happy in my parent's house';
echo 'I\'m always happy in my parents\'s house';

//11 $control='ready'; echo 'control=$Control';
$control = 'ready';
echo "control=$control";

//12 echo "<p><a href="index.php">OUR SERVICES</a></p>";
echo "<p><a href='index.php'>OUR SERVICES</a></p>";

//13 $country = 'Canada'; echo 'The country is: '$address;
$country = 'Canada';
echo "The country is: $country";

//*14 Output: <p>You Win!</p>
/*function abc(){
    return"You WIN!";
    }
    echo "<p>Result: abc()</p>";
*/
function abc()
{
    return "You WIN!";
}
echo "<p>Result: " . abc() . "</p>";

//15 Expected output: Error 6
/* $size=strlen("error");             
$message='Error $size'; */
$size = strlen("error");
$message = "Error $size";
echo $message;

//16 $salutation=Good morning; echo $salutation;
$salutation = 'Good morning';
echo $salutation;

//17Output : Display Quebec
/* const PROVINCE="Quebec";
echo "PROVINCE"; 
 */

define("PROVINCE", "Quebec");
echo PROVINCE;

//*18 Create a constant
/* define("POND_FINSESSION",40%);
$noteFinSessionSur100=95;
$noteFinSessionSur40=$noteFinSessionSur100 * $POND_FINSESSION;
echo $noteFinSessionSur40; */
define("POND_FINSESSION", 40);
$noteFinSessionSur100 = 95;
$noteFinSessionSur40 = $noteFinSessionSur100 * (POND_FINSESSION / 100);
echo $noteFinSessionSur40;

//*19 
/*
function whatDate { 
date_default_timezone_set('America/Toronto'); 
return getDate()['weekday'];
}
 */
function whatDate()
{
    date_default_timezone_set('Ameria/Toronto');
    return date('l');
}

//*20 echo $message[message]; 
$message = array("message" => "My name is Tu Anh");
echo $message["message"];


echo "PHP said : \"I'm the best programming language\"."
?>