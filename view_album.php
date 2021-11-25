
<<?php  include 'db.php'; ?>



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
                   
                <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                  <!--
                      HEADING OF THE PAGE
                  -->

                  <h1  style="font-family:'Century Gothic'"><i class=" fa fa-users fa-1x"></i>View Album</h1>
                
                </section>
                <!--
                    Buttons And Seacrh Area..
                -->
                <section class="content">

                    <section class="col-lg-12 connectedSortable">

                        <table id="myTable" class="table table-bordered">
                            <thead style="background-color:#000000 ; color: white; font-size:15px  ">
                            <tr>
                            <!--
                  <th style="...">Property Description</th>
                                <th style="font-family:'Century Gothic'">Title</th>
                                <th style="...">Picture Name</th>
                                -->

                                <th style="...">S.No</th>
                                <th style="..."> Album Name</th>
                
                                <th style="...">Album Description</th>
                                <th style="...">Action</th>

                            </tr>
                            </thead>

                            <tbody>
                                <?php
                                $query= mysqli_query($connection,"select * from album");
                                while($row= mysqli_fetch_array($query))
                                {  ?>
                                    <tr style="color: white">
                                    <td> <?php echo $row['album_id']; ?></td> 
                                    <td> <?php echo $row['album_name'];?></td>
                                    <td> <?php echo $row['album_description']; ?></td>
                                    
                                    <td>
                                        
                    
                    <form method='post' action='edit_album_records.php'>
                  
                                            <input type='hidden' name='val' value='<?php echo $row['singer_id']; ?>'>
                                            <button type='submit' name='edit-gallery' class='btn btn-default btn-xs pull-right' data-toggle='tooltip' data-placement='top' title='Edit a Record'> 
                                                Edit <div class='glyphicon glyphicon-pencil'></div>
                                            </button>
                                            
                      
                    </form>
                    
                    
                    
                  
                                    </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot></tfoot>
                        </table>
                    </section>
                </section>
            </div>


                
                
        </div>
        
   
   
    </body>

</html>


