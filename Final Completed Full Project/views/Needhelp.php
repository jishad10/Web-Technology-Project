<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");

?>


<html>
<head>  
    <title>change password</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style13.css">
</head>

<body>
    <div class="container">
        <!-- header starts  -->
            <header>
                <div class="row">
                    <div class="col-lg-4 col-md-12">                   
                    <div class="logo-div">
                            <a href="#">
                                <img src="book.png"><!--logo add korar somoy logo ta ke hyper link er mnodde reke di bo  logo er class ta hobo ho fontweosome theke ni chi-->
                            </a>
                    </div>                 
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <p class="heading-style">Library Management System</p>
                    </div>
                </div>
            </header>
            <!-- header ends  -->   

    <center>
        <main>
        <table height=635 width=1080>
            <tr height=70>
                <td colspan="2"> 
                    <table width = "800">
                   
                    <tr>
                        <td style="visibility:hidden;">
                            hdhdhdhhfhhhhhhhhhhhhhhfhfjfjfjfh
                        </td>
                        
                        <td align="center">
                            <div class="card">
                        <h2>Logged in as || <?php echo $user['name'] ?></h2>
                            </div>  
                        </td> 
                        
                          
                    </tr>  
                   
                    </table>
                </td>
            </tr>
            <tr>
                <td rowspan="3" width="250">  
                <nav> 
                <ul>
                									                  
                    <li> <a href="profileuser.php">Profile</a></li>
                    <li> <a href="Recommended_Books.php">Recommend Books</a></li>
                    <li> <a href="viewTrendingBook.php">Trending Books</a></li> 
                    <li> <a href="books.php">Books</a></li>
                    <li> <a href="user_notification.php">Notification</a></li>
                    <li> <a href="Needhelp.php">Need Help</a></li>               
                     <li> <a href="AboutUs.php">About Us</a></li>				  					
                    <li> <a href="../controller/logout.php">Logout</a></li>
                </ul>
                </nav>
                </td>
                <td>  
                     <table  height=500 width=800>

            <tr>
                <td> 
                    <h1 style="text-align:center;">***Welcome to Help and Support***</h1>
                    <br>
                    <h2 style="text-align:center;">**NEED HELP!!!**</h2>
                </td>
            </tr>


            <tr height=70>
                <td > 
                    <table width = "800">
                        <tr>
                            
                            <td align="center">
                               <h3> <p>**Choose what you want**</p></h3>
                                <h4><a href="Send_msg.php">Send Messege</a>  <br>
                                <a href="Received_msg.php">Received Messege</a></h4>
                                
                            </td>    
                        </tr>    
                    </table>
                </td>
            </tr>
            
           
            <tr height =90>
                <td align="center">Copyright ©Devdoot_Parial_2023</td>
            </tr>
        </table>
                                      

				   
                </td>
            </tr>
        </table>
        </main>
          <footer>
                     <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright © by Jahidul Islam 2023</p>
                        </div>  
                    </div>                              
                </footer>
    </center>
    </body>


</html>



