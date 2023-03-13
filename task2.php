<?php
    $pvc = 'true';
    $age = 18;
    $ward = 020;

    if ($age < 18){
      echo "Voter not up to voting age";
    }elseif($age >=18 && $pvc == false && $ward == 021){
      echo "No voters card & ward is 021";
    }else{
      echo "Voter eligible to vote";
    }
?>