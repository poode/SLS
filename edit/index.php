
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <link rel='shortcut icon' href='../img/favicon.ico' type='image/x-icon'/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.js"></script>
    <script type="text/javascript" src="../js/mine.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<title>Ireport SLS Offline</title>

</head>

<body>

<div id="box">

<div id="header">
<h1 title="file will be beside index.php"><a href="../"><u>Offline Ireport SLS Solution</u></a></h1>
</div>

<!--TOP NAVIGATION-->

</br></br></br>
<div id="nav">
<a href="../">Home</a>&nbsp;&nbsp;
<a href="../show/">Show Tickets</a>&nbsp;&nbsp;
<a href="../edit/">Edit Tickets</a>&nbsp;&nbsp;
<a href="#" id="myscript">My Scripts</a>&nbsp;&nbsp;
</div>


<!--MAIN CONTENT-->

<div id="search" class="" style="text-align: center;"><div><span style="display:inline;">Search for a ticket to edit: </span></div><div id="input" style="text-align: center;"><input class="form-control" style="width: 210px; margin-left: 225px;" id="tktn" type="text" placeholder="Ticket Number"></div></div></br>
<div style="text-align:center;"><input class="btn" id="sbtn" type="button" onclick="findtkt();" value="Search"></div>
<div align="right">
    <button style="display:none;" id='cls' type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button>
</div>

        <div id="tableshow" class="tableStyle0" >
            <form id="search" onsubmit="php1Ajax(); return false;">
            <table border="0" cellpadding="1" cellspacing="5" width="100%" class="table table-hover table-condensed tabl" style="text-align: center;">

                	<?php
     						$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];  //calrrayling super a
	 						$myfile=$DOCUMENT_ROOT.'/SLS/tickets.txt'; //wher is my file in relative to root directory (/)
	 						$lines = count(file($myfile));              // counting number of lines
    					 	$Ofile = fopen($myfile, "r") or die("Unable to open file!");   // making a resource to use
         	  						for ($i=0 ;$i <= $lines-1 ; $i++){

      			 						$line = fgets($Ofile);    //getting text in lines
      			 						$read = trim($line);      // cleaning it from spaces
      			 						$linep = explode("|", $read);
                        $ii = $linep[1];

print ('<tbody id="'.$linep[1].'"  class="bg-info" ><tr> <th>Index</th> <td><input type="text" class="form-control" class="form-control" name="indexo" id ="indexo'.$ii.'" value ="'.$linep[0].'"></td>  </tr><tr> <th>Ticket Number</th>  <td><input type="text" class="form-control" name="tkt" id ="tkt'.$ii.'" value ="'.$linep[1].'"></td>  </tr><tr>  <th>Follow Up</th> <td><input type="text" class="form-control" name="follow" id="follow'.$ii.'" value ="'.$linep[2].'"></td>  </tr><tr>  <th>Escalated To</th> <td><input type="text" class="form-control" name="escal" id="escal'.$ii.'" value ="'.$linep[3].'"></td>  </tr><tr>  <th>Problem Category</th> <td><input type="text" class="form-control" name="tktType" id="tktType'.$ii.'" value ="'.$linep[4].'"></td>  </tr><tr>  <th>Problem Status</th> <td><input type="text" class="form-control" name="probstat" id="probstat'.$ii.'"  value = "'.$linep[5].'"></td>  </tr><tr>  <th>POP</th>  <td><input type="text" class="form-control" name="pop" id="pop'.$ii.'" value ="'.$linep[6].'"></td>  </tr><tr> <th>Ticket Status</th>  <td><input type="text" class="form-control" name="tktstat" id="tktstat'.$ii.'" value ="'.$linep[7].'"></td>  </tr><tr>  <th>Called The Customer?</th> <td><input type="text" class="form-control" name="calledcst" id="calledcst'.$ii.'" value ="'.$linep[8].'"></td> </tr><tr>  <th>Sent SMS?</th> <td><input type="text" class="form-control" name="smscst" id="smscst'.$ii.'" value ="'.$linep[9].'"></td> </tr><tr> <th>Comment</th> <td><input type="text" class="form-control" name="comm" id="comm'.$ii.'" value ="'.$linep[10].'"></td> </tr><tr> <th>Time</th> <td><input type="text" class="form-control" name="timeo" id="timeo'.$ii.'" value ="'.$linep[11].'"></td></tr></tbody>');
        															 }

        							fclose($Ofile);








        			?>



               </form>
            </table>



        </div>


</br>
<div class="done" id="done"><strong><i>Ticket Edited Successfully!</i></strong></div>
</br>

<div style="text-align: center;">
     <input class="btn" id="addEdit" type="submit"  value="Submit to This Ticket">
</div>


<script type="text/javascript">

    $('tbody').hide();

</script>



<!--FOOTER-->

<div id="footer" style="width=auto;">
<a href="http://validator.w3.org/check?uri=referer">Xhtml Valid</a> |
<a href="http://jigsaw.w3.org/css-validator/">Css Valid</a> |
&copy; 2016 <a href="mailto:Abdelazeem.mueer@tedata.net"><strong><i>Abdul-Azeem Mouneer</i></strong></a>
</div>


</div>


<script type="text/javascript">
    var documentTitle = document.title + " --- ";

(function titleMarquee() {
    document.title = documentTitle = documentTitle.substring(1) + documentTitle.substring(0,1);
    setTimeout(titleMarquee, 300);
})();
// var scale = 'scale(0.65)';
// document.body.style.webkitTransform =  scale;    // Chrome, Opera, Safari
//  document.body.style.msTransform =   scale;       // IE 9
//  document.body.style.transform = scale;     // General

$(document).ready(function(){

  document.getElementById('search').addEventListener('keypress', function(event) {
         if (event.keyCode == 13) {
             $('#sbtn').click();
         }
     });

});

</script>

</body>




</html>
