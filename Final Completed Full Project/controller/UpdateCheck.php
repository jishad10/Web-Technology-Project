
<?php
   session_start();
  require_once('../models/userModel.php');
  if (isset($_POST['submit'])){
    $Book_ID=$_POST['Bookid'];
   $Book_Name=$_POST['Bookname'];
    $Author=$_POST['Author'];
    $Catagory=$_POST['Catagory'];


    if( $Book_Name == "" || $Author== ""|| $Catagory== ""){
        echo "Please Enter Date first";
        echo '<br>';
        echo '<a href="../view/Update.php">Go Back </a>';   
    }else{
        $_SESSION['flag'] = "true";
        $Books = ['Book_ID'=>$Book_ID,'Book_Name'=> $Book_Name,'Author'=> $Author ,'Catagory'=> $Catagory];
        $status = Update($Books);
        if($status){
           
            header('location: ../views/Updatenewbook.php');
        }else{
      echo "Error:";
      }
    
    }
  }  
?>