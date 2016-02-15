<?php
$indexo = isset($_GET['indexo']) ? $_GET['indexo'] : '';
$tkt = isset($_GET['tkt']) ? $_GET['tkt'] : '';
$follow = isset($_GET['follow']) ? $_GET['follow'] : '';
$escal = isset($_GET['escal']) ? $_GET['escal'] : '';
$tktType = isset($_GET['tktType']) ? $_GET['tktType'] : '';
$probstat = isset($_GET['probstat']) ? $_GET['probstat'] : '';
$pop = isset($_GET['pop']) ? $_GET['pop'] : '';
$tktstat = isset($_GET['tktstat']) ? $_GET['tktstat'] : '';
$calledcst = isset($_GET['calledcst']) ? $_GET['calledcst'] : '';
$smscst = isset($_GET['smscst']) ? $_GET['smscst'] : '';
$comm = isset($_GET['comm']) ? $_GET['comm'] : '';
$timeo = isset($_GET['timeo']) ? $_GET['timeo'] : '';



$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];  //calling super array
$Myfile = $DOCUMENT_ROOT.'/Notepad'.'/tickets.txt'; //where is my file in relative to root directory (/)
$reading = fopen($Myfile, "r") or die("Unable to write to file!");   // making a resource to use
$writing = fopen($Myfile, "w") or die("Unable to write to file!");
$lines = count(file($Myfile));
/// i should delete the row with edited index///////////////////
$replaced = false;

while (!feof($reading)) {
  $line = fgets($reading);
  if (stristr($line,$indexo)) {
    $line = '#'.$indexo.'|'. $tkt.'|'.$follow.'|'.$escal.'|'.$tktType.'|'.$probstat.'|'.$pop.'|'.$tktstat.'|'.$calledcst.'|'.$smscst.'|'.$comm.'|'.$timeo."\n";
    $replaced = true;
  }
  fputs($writing, $line);
}
fclose($reading); fclose($writing);
// might as well not overwrite the file if we didn't replace anything
if ($replaced)
{
  rename($Myfile.'tmp', $Myfile);
} else {
  unlink($Myfile'.tmp');
}
///////////////////

 ?>
