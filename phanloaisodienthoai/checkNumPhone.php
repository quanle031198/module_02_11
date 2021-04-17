<?php
const VIETTEL = ["086", "096", "097", "098", "032", "033", "034", "035", "036", "037", "038", "039"];
const MOBIPHONE = ["089", "090", "093", "070", "076", "077", "078", "079"];
const VINAPHONE = ["088", "091", "094", "081", "082", "083", "084", "085"];


$viettel = [];
$vinaphone = [];
$mobiphone = [];

function checkNumPhone($arr)
{
     global $viettel,$vinaphone,$mobiphone;
     foreach ($arr as  $value) {
          $firstNum = substr($value, 0, 3);
          if (in_array($firstNum, VIETTEL)) {
               array_push($viettel, $value);
          } else if (in_array($firstNum, MOBIPHONE)) {
               array_push($mobiphone, $value);
          } else if (in_array($firstNum, VINAPHONE)) {
               array_push($vinaphone, $value);
          }
     }
}

