<?php
include 'db.php';
if (isset($_POST['update'])) {
    $album_id=$_POST['album_id'];
    $album_name=$_POST['album_name'];
    $album_description=$_POST['album_description'];
    //echo "<script>alert('$album_name')</script>";

    $update="update album set album_name='$album_name',album_description='$album_description' where album_id='$album_id'";
    $query=mysqli_query($connection,$update);

    if ($query) {
        echo "<script>alert('record has beeen update')</script>";
        echo "<script>window.open('view_album.php','_self')</script>";
        # code...
    }
    else
    {
        echo "<script>alert('errror')</script";
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
  <h2 style="color: white">Update Singer</h2>

  <!-- form start here -->
    <div class="row" style="margin-left: 10px; margin-top: 10px">
            <section class="col-md-10 connectedSortable">
              <?php
              if(isset($_POST['edit-gallery']))
              {
                $album_id= $_POST['val'];
                $queryg= mysqli_query($connection,"select * from album where album_id='$album_id'");
                while($grow= mysqli_fetch_assoc($queryg))
                {

                  echo "
                    <div class='panel panel-default'>
                        <div class='panel-heading' style='font-family:'Century Gothic''>Update Dealer</div>
                        <div class='panel-body'>";
                            echo "
                            <form class='form-horizontal' method='post' enctype=\"multipart/form-data\">
            
                                  <div class='form-group'>
                                    <!--<label style='font-family:'Century Gothic'' for='inputEmail3' class='col-sm-2 control-label'>ID</label>-->
                                    <div class='col-sm-10'>
                                      <input type='hidden' class='form-control' name='album_id' value='",$grow['album_id'],"'>
                                    </div>
                                  </div>
                                  
                        <div class='form-group'>
                                    <label style='font-family:'Century Gothic'' for='inputPassword3' class='col-sm-2 control-label'>Name</label>
                                    <div class='col-sm-10'>
                                      <input type='text' class='form-control' name='album_name' value='", $grow['album_name'],"'>

                                      
                                    </div>
                                  </div>
                                  
                                   
                                   <div class='form-group'>
                                    <label style='font-family:'Century Gothic'' for='inputPassword3' class='col-sm-2 control-label'>Medium</label>
                                    <div class='col-sm-10'>
                                     <input type='text' class='form-control' name='album_description' value='", $grow['album_description'],"'>
                                    </div>
                                  </div>";

                                  echo "
                                  <div class='form-group'>
                                      <div class='col-sm-offset-2 col-sm-10'>
                                          <button type='submit' name='update' class='btn btn-success'>Update Singer</button>
                                      </div>
                                  </div>
                            </form>
                        </div>
                    </div>";

                }

              }

              ?>
            </section>
          </div>
        </div>
    </div>
   
    </body>
    
    
    
</html>