
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='shortcut icon' href='/Notepad/img/favicon.ico' type='image/x-icon'/ >
    <link rel="stylesheet" type="text/css" href="/Notepad/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Notepad/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Notepad/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/Notepad/css/style.css" />
    <script type="text/javascript" src="/Notepad/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Notepad/js/jquery-ui.js"></script>
    <script type="text/javascript" src="/Notepad/js/mine.js"></script>
    <link rel="stylesheet" type="text/css" href="/Notepad/css/jquery-ui.css" />


    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<title>Ireport SLS Offline</title>

</head>

<body>

<div id="box">

<div id="header">
<h1 title="file will be beside index.php"><a href="/Notepad/"><u>Offline Ireport SLS Solution</u></a></h1>
</div>

<!--TOP NAVIGATION-->

</br></br></br>
<div id="nav">
<a href="/Notepad/">Home</a>&nbsp;&nbsp;
<a href="/Notepad/show/">Show Tickets</a>&nbsp;&nbsp;
<a href="/Notepad/edit/">Edit Tickets</a>&nbsp;&nbsp;
<a href="#" id="myscript">My Scripts</a>&nbsp;&nbsp;
</div>


<!--MAIN CONTENT-->

<div class="button" style="text-align: center;">
            <input class="btn" id="btn" type="submit" value="Show Me Tickets">
        </div>







        <div id="tableshow0" class="tableStyle">
            <table border="1" class="table table-hover table-condensed tabl" style="width: auto; text-align: center;">
                <thead>
                    <tr>
                    	<th>Index</th>
                        <th>Ticket Number</th>
                        <th>Follow Up</th>
                        <th>Escalated To</th>
                        <th>Problem Category</th>
                        <th>Problem Status</th>
                        <th>POP</th>
                        <th>Ticket Status</th>
                        <th>Called The Customer?</th>
                        <th>Sent SMS?</th>
                        <th>Comment</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                	<?php
     						$DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];  //calrrayling super a
	 						$myfile=$DOCUMENT_ROOT.'/Notepad'.'/tickets.txt'; //wher is my file in relative to root directory (/)
	 						$lines = count(file($myfile));              // counting number of lines
    					 	$Ofile = fopen($myfile, "r") or die("Unable to open file!");   // making a resource to use
         	  						for ($i=0 ;$i <= $lines-1 ; $i++){
	             						$ii = $i+1;
      			 						$line = fgets($Ofile);    //getting text in lines
      			 						$read = trim($line);      // cleaning it from spaces
      			 						$linep = explode("|", $read);


print ('<tr class="info">   <td>'.$linep[0].'</td>    <td>'.$linep[1].'</td>    <td>'.$linep[2].'</td>    <td>'.$linep[3].'</td>    <td>'.$linep[4].'</td>    <td>'.$linep[5].'</td>     <td>'.$linep[6].'</td>    <td>'.$linep[7].'</td>    <td>'.$linep[8].'</td>   <td>'.$linep[9].'</td>  <td>'.$linep[10].'</td><td>'.$linep[11].'</td></tr>');
        															 }

        							fclose($Ofile);
        			?>
			    </tbody>
            </table>


        </div>


</br>





<!--FOOTER-->

<div id="footer">
<a href="http://validator.w3.org/check?uri=referer">Xhtml Valid</a> |
<a href="http://jigsaw.w3.org/css-validator/">Css Valid</a> |
&nbsp;&copy 2016 <a href="mailto:Abdelazeem.mueer@tedata.net"><strong><i>Abdul-Azeem Mouneer</i></strong></a>
</div>


</div>

</body>

<script type="text/javascript">
    var documentTitle = document.title + " --- ";

(function titleMarquee() {
    document.title = documentTitle = documentTitle.substring(1) + documentTitle.substring(0,1);
    setTimeout(titleMarquee, 300);
})();

// var scale = 'scale(0.80)';
// document.body.style.webkitTransform =  scale;    // Chrome, Opera, Safari
//  document.body.style.msTransform =   scale;       // IE 9
//  document.body.style.transform = scale;     // General

</script>


</html>
