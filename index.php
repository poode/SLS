
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
    <script type="text/javascript" src="/Notepad/js/mine.js"></script>
       <script type="text/javascript" src="/Notepad/js/jquery-ui.js"></script>
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

<div id="table">
         <form  onsubmit="phpAjax(); return false;">
            <table class="table tabl">


                    <tr class="">
                        <thead><th>Ticket Number</th>

                        <td>
                            <input class="form-control in" type="text" id="tkt" name="tkt" placeholder="Ticket Number">
                        </td>
                        </tr></thead>

                        <tr class="">
                        <thead><th>Follow Up</th>
                        <td>
                            <input class="form-control in" type="text" id="follow" name="follow" placeholder="Yes or No">
                        </td></thead>
                        </tr>

                        <tr class="">
                        <thead><th>Escalated To</th>
                        <td>
                            <input class="form-control in" type="text" id="escal" name="escal" placeholder="Escalated to Which Team?">
                        </td></thead>
                        </tr>

                        <tr class="">
                        <thead><th>Problem Category</th>
                        <td>
                            <input class="form-control in" type="text" id="tktType" name="tktType" placeholder="Problem Category">
                        </td></thead>
                        </tr>

                        <tr class="">
                        <thead><th>Problem Status</th>
                        <td>
                            <input class="form-control in" type="text" id="probstat" name="tprobstat" placeholder="Does it still pending fixing?">
                        </td></thead>
                        </tr>

                        <tr class="">
                        <thead><th>POP</th>
                        <td>
                            <input class="form-control in" type="text" id="pop" name="pop" placeholder="Enter Exchange Name">
                        </td></thead>
                        </tr>

                        <tr class="">
                        <thead><th>Ticket Status</th>
                        <td>
                            <input class="form-control in" type="text" id="tktstat" name="tktstat" placeholder="Ticket Came with which Status?">
                        </td></thead>
                        </tr>

                        <tr class="">
                        <thead><th>Called The Customer?</th>
                        <td>
                            <input class="form-control in" type="text" id="calledcst" name="calledcst" placeholder="Yes, No, or No Answer">
                        </td></thead>
                        </tr>

                        <tr class="">
                        <thead><th>Sent SMS?</th>
                        <td>
                            <input class="form-control in" type="text" id="smscst" name="smscst" placeholder="Yes or No">
                        </td></thead>
                        </tr>

                        <tr class="">
                        <thead><th>Comment</th>
                        <td>
                            <input class="form-control in" type="text" id="comm" name="comm" placeholder="Leave a Comment">
                        </td></thead>
                        </tr>


                        <tr class="">
                        <thead><th>Time</th>
                        <td>
                            <input class="form-control in" type="text" id="timeo" name="timeo" placeholder="The Time Now">
                        </td></thead>
                        </tr>

                        </tr>


            </table>

            <div style="text-align: center;">
                 <input class="btn" id="add0" type="submit"  value="Add This Ticket">
            </div>

          </form>

        </div>

        </br>

                        <div class="done" id="done"><strong><i>Ticket Added Successfully!</i></strong></div>


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
//$(document).ready(function(){
//$('#comm').val(" ");
//});


</script>


</html>
