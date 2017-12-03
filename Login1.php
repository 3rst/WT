<?php
//session_start();
//if(isset($_POST['submit']))
//{
 $connection=mysqli_connect('localhost','root','','mydb') or die(mysql_error());
 //mysql_select_db('new') or die(mysql_error());
 //var_dump($connection);
 $name=$_POST['Email'];
 $pwd=$_POST['Password'];
 $query="SELECT * FROM harry WHERE Username='$name' AND Password='$pwd'";
 $ret=mysqli_query($connection,$query);
 $result=mysqli_fetch_assoc($ret);
 if(!$result)
 {
   echo "<br>";
   echo "<script>alert('Not a user (Or) Entered wrong password')</script>";
   echo '<a href="Login.html">Try Again</a>';}
else
   {
    echo "<br>";
    echo'Logged In<br>';
    echo '<a href="csgofrontpage1.html">Start Browsing</a>';
   }
 
 

?>