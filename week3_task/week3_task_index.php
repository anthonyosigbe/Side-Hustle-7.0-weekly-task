<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week3 Task</title>
</head>
<body>

<?php
  include 'week3_task_header.php';
?>

<?PHP
  
   $insert_data = mysqli_query($db_connect, "INSERT INTO multiply(num1,num2,num3) VALUES('5', '5', '5')");

   if($insert_data){
    echo "<h1>Data saved Successfully<br></h1>";
   }

  // $connect = mysqli_connect('localhost', 'root', '', 'task_db');

  // if ($connect) {
  //   echo "Connected";
  // } else {
  //   echo "Not Connected";
  // }
  

?>

<?php
  function multiply($num1, $num2, $num3 =5){
    $answer = $num1 * $num2 * $num3;
    return $answer;

  }

    echo multiply(5,5);


?>
  
</body>
</html>