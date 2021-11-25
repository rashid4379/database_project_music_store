<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<title>singer</title>

<!-- Include external style sheet for website-->

<link rel="stylesheet" href="generalstylesheet/style.css" media="all"/>



<!-- Include JQUERY Library-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>

<body>

                  <div id="insert_singer">


            <form action="insert_singer.php" method="post" enctype="multipart/form-data">
              
			              
						  
						  <table width="700" border="5" align="center" bgcolor="#fbbe68">
						  
						  
						  <tr>
						  
						  <td bgcolor="#fffdd0"  colspan="2"><h2><center>ENTER singer info</center></h2></td>
						  </tr>
					 
						
						  <tr>
						  <td>singer name:</td>
						  <td><input type="text" name="tname" required size="50" ></td>
						  </tr>
						 
						  <tr>
						  <td>address</td>
						  <td><input type="text" name="sid" required size="50"></td>
						  </tr>
                          
                          
                          <tr>
						  <td>state</td>
						  <td>
						  <select>
						  <option value="a">a</option>
						  <option value="b">b</option>
						  <option value="c">c</option>
						  <option value="d">d</option>
						  </select>
						  </tr>
						  
						 
						  <tr>
						  <td>country</td>
						  <td><select>
						  <option value="pakistan">pakistan</option>
						  <option value="india">india</option>
						  <option value="aghanistan">afghanistan</option>
						  <option value="america">america</option>
						  <option value="england">england</option>
						  <option value="uae">uae</option>
						  <option value="ksa">ksa</option>
						  <option value="iran">iran</option>
						  <option value="iraq">iraq</option>
						  <option value="egypt">egypt</option>
						  <option value="qatar">qatar</option>
						  </select>
						  
						  
						  
						   <tr>
						  <td>twitter</td>
						  <td><input type="text" name="twitter" required size="50"></td>
						  </tr>

						  <tr>
						  <td>facebook</td>
						  <td>
						  
						  <input type="text" name="dur" required size="50"></td>
						  </tr>
						  <tr>
						  <td>total albums</td>
						  <td>
						  <input type="int" name="frmt" required size="50"></td>
						  </tr>
						  <tr>
						  <td>album_a_id</td>
						  <td><input type="text" name="s_link" required size="50"></td>
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
				
	
				$s_name=$_POST['s_name'];

				$s_add=$_POST['s_add'];
				
				$s_state=$_POST['s_state'];

				$s_count=$_POST['s_count'];
				
				$s_t=$_POST['s_t'];
				$s_f=$_POST['s_f'];

				$tot_album=$_POST['tot_album'];
				
				
				
				
				
				

				$album_a_id=$_POST['album_a_id'];
				
				
			//Retreive data from form code end here
			
			// insert data into database start code here
			
			$insert_product= "insert into singer (s_name, s_add, s_state, s_count, s_t, s_f, tot_album, album_a_id) 
			values($s_name','$address','$state','$country','$s_twitter', '$s_facebook', '$total_albums', '$album_a_id')";
			
		?>