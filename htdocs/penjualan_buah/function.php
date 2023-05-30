<?php

// Function untuk mengubah tanggal Indo
  function tanggal_ind($tanggal) {
     $pisah   = explode('-',$tanggal);
     $larik   = array($pisah[2],$pisah[1],$pisah[0]);
     $satukan = implode('-',$larik);
     return $satukan;
  }
  
?> 
