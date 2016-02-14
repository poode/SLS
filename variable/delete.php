<?php 


                            $DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];  //calling super array
							$Myfile = $DOCUMENT_ROOT.'/test'.'/tickets.txt'; //wher is my file in relative to root directory (/)
							$ofile = fopen($Myfile, "a") or die("Unable to write to file!");   // making a resource to use
			
							fwrite($ofile , $out_put);
						//	@ftruncate($ofile, 0);  // it is used to set file size to zero and all data will be ereased
							fclose($ofile);







?>