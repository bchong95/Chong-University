
<?php
$first =$_GET['First'];
$last =$_GET['Last'];
$major =$_GET['Major'];
$college =$_GET['College'];
$email =$_GET['Email'];
$address =$_GET['Address'];
$city =$_GET['City'];
$state =$_GET['State'];
$zip =$_GET['Zip'];
//define the receiver of the email
$to = $email;
//define the subject of the email
$subject = 'Your Chong University Decision'; 
//define the message to be sent. Each line should be separated with \n
$message = date("m/d/Y")."\n".$first." ".$last."\n".$address."\n".$city." ".$state." ".$zip."\n\n"."Dear ".$first." ".$last."\n\n";
$message = $message."Congratulations! You are about to join one of the most respected and exciting undergraduate schools in the world."."\n\n";
$message = $message."We are delighted to inform you of your acceptance for undergraduate study at the Chong University of Happiness, one of America's most fun institutions of higher DGAFING. You have been admitted to the Undergraduate Program in ".$major." in our College of ".$college." for the Fall 2013 Semester."."\n\n";
$message = $message."Allow us to commend you on your achievement. Admission to the Chong University of Happiness undergraduate degree programs is competitive. Each year, in fact, we admit only a select group of students who demonstrate the high level of preparedness expected of our undergraduate students. We look forward to working with you as you pursue your academic goals at Chong's. "."\n\n";
$message = $message."To ensure your smooth registration for classes, you need to contact Dean Brandon Chong your undergraduate advisor, by telephone at (818) 561-1729; or by email, chong@chong.edu. Dean Chong will help you select the right classes and will provide you with the special Priority Number you need to complete your registration. "."\n\n"; 
$message = $message."Please note that an undergraduate degree at Chong's requires a residency of at least 12 credits during two consecutive semesters. For individual program requirements, please check our online undergraduate guidelines."."\n\n";
$message = $message."Once again, allow us to congratulate you on your acceptance for undergraduate study at the Chong University of Happiness. Please accept our best wishes for a most rewarding course of study. "."\n\n";
$message = $message."Yours truly,"."\n"."\n";
$message = $message."Brandon S. Chong"."\n"."\n";
$message = $message."Executive Director,"."\n"."\n";
$message = $message."International and Undergraduate Enrollment"."\n"."\n";
//define the headers we want passed. Note that they are separated with \r\n
$headers .= 'From: Chong@Chong.edu' . "\r\n";
$headers .= 'Cc: ChongUniversity@brandonchong.net' . "\r\n";
//send the email
$mail_sent = @mail( $to, $subject, $message, $headers);
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
echo $mail_sent ? "Thank You Applying! \n Your Decision Should Arrive Soon!" : "Application Failed to Send :(";
?>
