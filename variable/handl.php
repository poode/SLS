


<?php  // writing to a file 

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
							$Myfile = $DOCUMENT_ROOT.'/Notepad'.'/tickets.txt'; //wher is my file in relative to root directory (/)
							$mfile = fopen($Myfile, "a") or die("Unable to write to file!");   // making a resource to use
							$lines = count(file($Myfile)); 
							$counter = $lines +1;
							$out_put = $counter.'|'. $tkt.'|'.$follow.'|'.$escal.'|'.$tktType.'|'.$probstat.'|'.$pop.'|'.$tktstat.'|'.$calledcst.'|'.$smscst.'|'.$comm.'|'.$timeo."\n";
							fwrite($mfile , $out_put);
							fclose($mfile);

    
                         		
                         	
				           							
					 ?>

           

					 