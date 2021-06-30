<?php
  $text1 = $_POST["date"];
  $text2 = $_POST["subject"];
  $text3 = $_POST["estimationNumber"];
  $text4 = $_POST["trialBlock"];
  $text5 = $_POST["currentPicture"];
  $text6 = $_POST["estimationMode"];
  $text7 = $_POST["estimatedAmount"];
  $text8 = $_POST["valueEstimation"];
  $text9 = $_POST["value"];
  $text10 = $_POST["correctEstimation"];
  $text11 = $_POST["responseTime"];
  $text12 = $_POST["preferedSport"];

  if ($text1 != "") {
    echo("Message sent!\n");
    echo("\nField 1:". $text1);
    echo("\nField 2:". $text2);
    // $file = fopen("test.txt", "a");
    // $file = fopen("Session1_" + $text2 + ".txt", "a");
    $file = fopen("SubXXX.txt", "a");

    fwrite($file, $text1);
    fwrite($file, $text2);
    fwrite($file, $text3);
    fwrite($file, $text4);
    fwrite($file, $text5);
    fwrite($file, $text6);
    fwrite($file, $text7);
    fwrite($file, $text8);
    fwrite($file, $text9);
    fwrite($file, $text10);
    fwrite($file, $text11);
    fwrite($file, $text12);
    fclose($file);

  } else {
    echo("Message delivery failed...");
  }

?>
