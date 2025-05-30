<?php

$errq       =       "99999";
$new        =       "";
$intq       =       intval($errq) + 1;
$intlen     =       strlen(strval($intq));

for($j = 1; $j <= (strlen($errq) - $intlen); $j++)
{
    $new    =   $new . "0";
}

$new       =    $new.strval($intq);
echo $new;

?>