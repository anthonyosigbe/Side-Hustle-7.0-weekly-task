<?php
    $age = 18;
    $ward = 020;
    $pvc = 'true';
    

    if ($age < 18){

      echo "Voter not up to voting age <br> Not Eligible to vote";
    }elseif($pvc == 'false'){

      echo "No voters card: Not eligible to vote";
       }else{

      echo "Voter eligible to vote";
    }

    
?>