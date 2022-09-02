<?php

$lines = file('unique_codes.txt', FILE_IGNORE_NEW_LINES);

$user_serial = $_POST['Serial'];

//var_dump($lines);

$flag = false;
foreach($lines as $line){
  if ($user_serial == $line){
    //var_dump($line);
    $flag = true;
  }
}

if($flag == false){
  //product is not genuine
}

return $flag;

  // require_once "Mail.php";

  // $from = "jakepaulsucks42069@gmail.com";
  // $to = 'ximatoh105@mxgsby.com';

  // $host = "ssl://smtp.gmail.com";
  // $port = "465";
  // $username = 'jakepaulsucks42069@gmail.com';
  // $password = ${{secret.PASSWORD}};

  // $subject = "test";
  // $body = "test";

  // $headers = array ('From' => $from, 'To' => $to,'Subject' => $subject);
  // $smtp = Mail::factory('smtp',
  //   array ('host' => $host,
  //     'port' => $port,
  //     'auth' => true,
  //     'username' => $username,
  //     'password' => $password));

  // $mail = $smtp->send($to, $headers, $body);

  // if (PEAR::isError($mail)) {
  //   echo($mail->getMessage());
  // } else {
  //   echo("Message successfully sent!\n");
  // }

?>