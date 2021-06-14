<?php
$con = mysql_connect("localhost:3306","jupitero_formvalidate","S1686119515s@", "jupitero_formcheck");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("customform", $con);
$sql="INSERT INTO `Test-Data` (`user_name`, `user_email`, `subject`, `content`) VALUES ('. $name.', '. $email.', '. $subject.', '. $content')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Your Information Was Successfully Posted";
mysql_close($con);

if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$toEmail = "swadip.ut@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "index.php";

?>