<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<title>Insert albums</title>

<!-- Include external style sheet for website-->

<link rel="stylesheet" href="generalstylesheet/style.css" media="all"/>



<!-- Include JQUERY Library-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>

<body>








            
                  <div id="insert_albums">


            <form action="insert_albums.php" method="post" enctype="multipart/form-data">
              
			              
						  
						  <table width="700" border="5" align="center" bgcolor="#fffdd0">
						  
						  
						  <tr>
						  
						  <td bgcolor="#e78a05"  colspan="2"><h2><center>Insert New Album</center></h2></td>
						  </tr>
						  
                    
						  <tr>
						  <td> Album name:</td>
						  <td><input type="text" name="a_name" required size="50" ></td>
						  </tr>
						  
						  
						  
						  
						  
						  
						  <tr>
						  <td>No.of songs</td>
						  <td><input type="int" name="edition" required size="50"></td>
						  </tr>
                          
                          
                          <tr>
						  <td>Release date</td>
						  <td><input type="date" name="author" required size="50"></td>
						  </tr>
			
						  <tr>
						  
						  <td bgcolor="#e78a05" colspan="2"><center><input type="submit" name="submit" value="Insert Now"></center></td>
						  </tr>
						  
						  
						  </table>
	
			  
			  </form>



     </div>



</body>
</html>






<!--Retreive data from form code start here-->
			
			<?php
			
			
			// text data variable
			
			if (isset($_POST['submit'])){
				
		
				
				$aname=$_POST['aname'];
				
				
				
				

				$nos=$_POST['nos'];
				
				$rdate=$_POST['rdate'];
	
			//Retreive data from form code end here
			
			// insert data into database start code here
			
			$insert_product= "insert into album(aname, nos, rdate) 
			values($aname','$nos','$rdate')";
			?>
			
	}
				<!-- insert data into database code end here-->
    
               <!--end barcket of else statement>
   <?php 
}
   
   ?>