<?php include 'header.php'?>

<?php 

if(isset($_POST['Name'])) {
  $to = 'justin.clark.mba@gmail.com';
  $subject = 'Clean Contact Page';
  $message = 'Hello from: ' . $_POST['Name'];
  $replyTo = 'clarj132@northseattle.edu';
  $headers = 'From: noreply@clark.mba' . PHP_EOL .
    'Reply-To: ' . $replyTo . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
  mail($to, $subject, $message, $headers);
  echo '<p>' . $_POST['Name'] . ', your message has been sent successfully!';
}else{
  echo '
    <form action="" method="post">
    First Name: <input type="text" name="Name" /><br />
    <input type="submit" />
    </form>
  ';
}

?>

<?php include 'footer.php'?>