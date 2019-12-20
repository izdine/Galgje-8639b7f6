<?php
$letter;
$isCorrect = false;
if (isset($_POST["EigenWoord"]) && $_COOKIE['lives'] !=0) {
$letter = $_POST["EigenWoord"];
for ($i = 0; $i <strlen($_COOKIE["woord"]); $i++) {
  if ($letter == $_COOKIE["woord"][$i]) {
    $_COOKIE["woord_string"][$i] = $_COOKIE["woord"][$i];
      setcookie("woord_string", $_COOKIE["woord"][$i]);
      $isCorrect = true;
    }
  }
if ($_COOKIE["won"] != "true") {
  if (!$isCorrect) {
    if ($_COOKIE["lives"] > 0){
      $_COOKIE["lives"] = $_COOKIE["lives"] -1;
        setcookie("lives", $_COOKIE["lives"]);
        }
    if ($_COOKIE["lives"] == 0) {
      $_COOKIE ["message"] = 'You lost the game you were hanged';
      setcookie("message", $_COOKIE["message"]);
      }
  }
}
if ($_COOKIE["woord_string"] == $_COOKIE["woord"]) {
  $_COOKIE["message"] = '＼(＾O＾)／Good job YOU WIN!! dinnt get hanged for now ( ͡° ͜ʖ ͡°)';
  $_COOKIE['won'] = 'true';
  setcookie("message", $_COOKIE["message"]);
  setcookie('won', $_COOKIE['won']);
}
}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Galgje the game</title>
  </head>
  <body>

    <form class="" method="post">
    <input type="submit" name="letters" value="A">
    <input type="submit" name="letters" value="B">
    <input type="submit" name="letters" value="C">
    <input type="submit" name="letters" value="D">
    <input type="submit" name="letters" value="E">
    <input type="submit" name="letters" value="F">
    <input type="submit" name="letters" value="G">
    <input type="submit" name="letters" value="H">
    <input type="submit" name="letters" value="I">
    <input type="submit" name="letters" value="J">
    <input type="submit" name="letters" value="K">
    <input type="submit" name="letters" value="L">
    <input type="submit" name="letters" value="M">
    <input type="submit" name="letters" value="N">
    <input type="submit" name="letters" value="O">
    <input type="submit" name="letters" value="P">
    <input type="submit" name="letters" value="Q">
    <input type="submit" name="letters" value="R">
    <input type="submit" name="letters" value="S">
    <input type="submit" name="letters" value="T">
    <input type="submit" name="letters" value="U">
    <input type="submit" name="letters" value="W">
    <input type="submit" name="letters" value="X">
    <input type="submit" name="letters" value="Z">
    <input type="submit" name="letters" value="Y">
<?php
for ($i=0; $i <strlen($_COOKIE['woord']); $i++) {
 echo "<h1 class='streepje'>" . $_COOKIE['woord_string'][$i] . "</h1>";
}
 ?>
 
 <?php
       if (isset($_COOKIE['message']))
       {
         echo "<h1>" . $_COOKIE['message'] . "</h1>";
         header("refresh:2; url=galgje.php");
       }
       ?>
  </body>
</html>