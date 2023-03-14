<?php
    $age = 18;
    $ward = 21;
    $pvc = 'true';
    

    if ($age < 18){

      echo "Voter not up to voting age  <br> <h1>Voter not Eligible to vote</h1>";
    }elseif($pvc == 'false'){

      echo "No voters card <br><h1> Voter not eligible to vote</h1>";
       }elseif ($ward <>20) {
        echo "Incorrect Voters ward <br> <h1>Voter not eligible to vote in this ward</h1>";
       }
       else{

      echo "Voter details correct <br><h1>Voter eligible to vote</h1>";
    }

    
?>