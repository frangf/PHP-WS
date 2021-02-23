<?php

/*Spotify: https://developer.spotify.com/console/get-playlist-followers-contains/

JSON array format 3 elements

[
  true
]

JSON array format 3 elements
[
  true,
  false,
  false
]

ids

jmperezperez,thelinmichael,wizzler

JSON  1 OBJECTE
{
  "jmperezperez" : true
}

JSON  3 OBJECTE
{
  "jmperezperez" : true,
  "thelinmichael" : false,
  "wizzler" : false
}

JSON 1 STRING

"{
  "jmperezperez" : true
}"

JSON 3 STRING
"{
  "jmperezperez" : true,
  "thelinmichael" : false,
  "wizzler" : false
}"
*/

$jmperezperez = array(true);
echo "<b>PHP array</b><br>";
echo var_dump($jmperezperez)."<br>";
echo print_r($jmperezperez)."<br><br>";

$jmperezperez_json = json_encode($jmperezperez);
echo "<b>JSON array format</b><br>";
echo var_dump($jmperezperez_json)."<br>";
echo print_r($jmperezperez_json)."<br>";



 ?>
