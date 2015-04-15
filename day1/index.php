<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
  <?php include "include/header.php";   ?>
  <?php include "include/functions.php";   ?>


  <?php

  $age["david"] = 200;
  $age["joe"] = 320;

  $a = array("foo", "bar", "hello", "world");


  $a["oranges"] = "foobar";
  $a["apples"] = "foobarzzz";


foreach ($a as $key=>$value) {
    print "<li>". $key . " -> ". $value. "</li>";
}

  ?> <pre> <?php var_dump($a); ?> </pre>


 <?php



  print $a[1];



  ?>






</body>
</html>
