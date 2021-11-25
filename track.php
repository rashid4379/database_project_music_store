<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<title>Tracks</title>

<!-- Include external style sheet for website-->

<link rel="stylesheet" href="generalstylesheet/style.css" media="all"/>



<!-- Include JQUERY Library-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>

<body>

                  <div id="insert_form">


            <form action="insert_track.php" method="post" enctype="multipart/form-data">
              
			              
						  
						  <table width="700" border="5" align="center" bgcolor="#fbbe68">
						  
						  
						  <tr>
						  
						  <td bgcolor="#fffdd0"  colspan="2"><h2><center>ENTER TRACKS </center></h2></td>
						  </tr>
					 

						  <tr>
						  <td> Track_name:</td>
						  <td><input type="text" name="tname" required size="50" ></td>
						  </tr>
					
						  
						   <tr>
						  <td>Movie</td>
						  <td><input type="text" name="movie" required size="50"></td>
						  </tr>

						  <tr>
						  <td>Duration</td>
						  <td>
						  <select>
						  <option value="1 min">1 min</option>
						  <option value="2 min">2 min</option>
						  <option value="3 min">3 min</option>
						  <option value="4 min">4 min</option>
						  <option value="5 min">5 min</option>
						  <option value="7 min">7 min</option>
						  <option value="8 min">8 min</option>
						  <option value="9 min">9 min</option>
						  <option value="10 min">10 min</option>
						  <option value="10:30 min">10:30 min</option>
						  <option value="11 min">11 min</option>
						  </select>
						  
						  </tr>
						  <tr>
						  <td>Format</td>
						  <td><select>
						  <option value="mp3">mp3</option>
						  <option value="mp4">mp4</option>
						  </select>
						  </tr>
						  <tr>
						  <td>Sourse_link</td>
						  <td><input type="text" name="s_link" required size="50"></td>
						  </tr>
						  <tr>
						  <td>Language</td>
						  <td>
						  <select>
						  <option value="english">english</option>
						  <option value="urdu">urdu</option>
						  <option value="pashto">pashto</option>
						  <option value="arabic">arabic</option>
						  </select>
						  
						  </tr>
					
						  <tr>
						  
						  <td bgcolor="#e78a05" colspan="2"><center><input type="submit" name="submit" value="Insert Now"></center></td>
						  </tr>
						  
						  
						  </table>
			  
			  
			  </form>



     </div>



</body>
</html>




<?php
			
			
			// text data variable
			
			if (isset($_POST['submit'])){
				
	
				$tname=$_POST['tname'];


				$mov=$_POST['mov'];
				$dur=$_POST['dur'];

				$frmt=$_POST['frmt'];
				
				
				
				
				
				

				$s_link=$_POST['s_link'];
				
				$lang=$_POST['lang'];
				
				
				
			//Retreive data from form code end here
			
			// insert data into database start code here
			
			$insert_product= "insert into Tracks (t_name, movie, duration, format, source_link, language) 
			values($tname', $dur', '$frmt', '$s_link', '$lang')";
			
			

			
			
			?>