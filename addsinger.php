
<?php 
include 'db.php';

if (isset($_POST['submit'])) {
    # code...
    $singer_name=$_POST['singer_name'];
    $singer_description=$_POST['singer_description'];
    

    $insert = "INSERT INTO singers (singer_name,singer_description)values('$singer_name','$singer_description')";
    $query= mysqli_query ($connection,$insert);

    if($query)
    {
        echo "<script>alert('record has been entered')</script>";
        echo "<script>window.openalert('addsinger.php','_self')</script>";
    }
    else
    {

        echo "<script>alert('error')</script>";
    }
}


?>



<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/primary.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
    </head>
    <body background="images/m2.jpg">
        <div id="main_div">
                <div id="header">
                    <div id="logo">
                        <img src="images/m4.jpg" width=940px; height=200px; alt="Music Store"/>
                    </div>
                    
                </div>
                <div id="menu">
        <ul style="background-color: black;" >
                        <li >
                        <a href="index.html"  class='selected' >Home</a>
                        </li>
                        <li style="padding-left: 60px;">
                        <a href="#" style="text-decoration: none;">Audio Songs</a>
                        <ul>
                            <li><a href="#">English Songs</a></li>
                            <li><a href="#">Pakistani Songs</a></li>
                            <li><a href="#">Hindi Songs</a></li>
                            <li><a href="#">Phusto Songs</a></li>
                            <li><a href="#">Arabic Songs</a></li>
                
                        </ul>
                       
                        </li >
            <li style="padding-left: 60px;">
                        <a href="#">Video Songs</a>
             <ul>
                            <li><a href="#">English Songs</a></li>
                            <li><a href="#">Pakistani Songs</a></li>
                             <li><a href="#">Hindi Songs</a></li>
                             <li><a href="#">Phusto Songs</a></li>
                             <li><a href="#">Arabic Songs</a></li>
             </ul>
         </li>

                        <li style="padding-left: 60px;">
                        <a href="#">Albums</a>
             <ul>
                            <li><a href="#">Latest Albums</a></li>
                            <li><a href="#">Old Albums</a></li>
                             <li><a href="#">Upcoming Albums</a></li>
                             
                        </ul>
                        </li>
                       
                        <li style="padding-left: 60px;">
                        <a href="about.html">About us</a>
                        </li>
                        <li style="padding-left: 60;">
                        <a href="contact.html">Contact us</a>
                        </li>
        </ul>

                    <script>
                       var element=document.querySelectorAll('ul li a')
                    </script>
                    <div class="clear"></div>
                    
                </div>

               <div class="container">
  <h2 style="color: white">Add Singer</h2>

  <!-- form start here -->
  <form class="form-horizontal" method='post' action='addsinger.php'  enctype='multipart/form-data' >

                                   <div class='form-group'>
                                    <!--<label style='font-family:'Century Gothic'' for='inputEmail3' class='col-sm-2 control-label'>ID</label>-->
                                    <div class='col-sm-10'>
                                      <input type='hidden' class='form-control' name='id-edit'>
                                    </div>
                                  </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email" style="color: white">Name</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="singer_name" placeholder="Enter singer name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" style="color: white">Descripton:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" name="singer_description" placeholder="Enter Descripton">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
       
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>


                
                <div id="footer">
                    <div id="footer_inside">
                    <small>
                    <center>
                     &copy; Copyright 2016.All Rights Reserved. Developed by DCSE Engineers</center></small>
                    </div>
                </div>
        </div>
        
   
   
    </body>

</html>


