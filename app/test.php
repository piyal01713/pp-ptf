<?php
    $customer = ["aa_","aa_","aa_","aa_"];
      $i = 0;
      do{
        $customer[$i] = $customer[$i].$i;
        $i++;
      } while ($i == 4);
      echo $i;   //print only 1
      var_dump($customer);  
    ?>