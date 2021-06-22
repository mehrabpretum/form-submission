<!DOCTYPE html>
<html>
<head>
	<title>Registration From</title>
</head>
<body>
	<h1>Registration From</h1>
	<?php

     $fname = "";
     $lname= "";
     $gender = "";
     $ldob = "" ;
     $religion = "";
     $fpresent = "";
     $lpermanet = "";
     $fphone = "";
     $femail = "";
     $flink = "";
     $username = "";
      $lpassword = "";

     if($_SERVER['REQUEST_METHOD']==="POST")
	{
   $fname = test_input($_POST['fname']);
  
   $lname = test_input($_POST['lname']);
   
   $gender = test_input($_POST['gender']);
  
   $ldob = test_input($_POST['ldob']);
  
   $religion = test_input($_POST['religion']);
  
   $fpresent = test_input($_POST['fpresent']);
  

   $lpermanet = test_input($_POST['lpermanet']);


   $fphone = test_input($_POST['fphone']);
   

   $femail = test_input($_POST['femail']);
  

   $flink = test_input($_POST['flink']);
   

  $username = test_input($_POST['username']);
  

    $lpassword = test_input( $_POST['lpassword']);
   
   }
   echo"<br>";

  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
   }
	?>

     <fieldset>
        <legend>Basic Information: </legend>
     <form action="php-form.php" method="POST" autocomplete="on">

 	<label for="fname">First name:</label>
 	 <input type="text" id="fname"name="fname"placeholder="Enter your First name" value="<?php echo $fname; ?>" required>
 	
    <br><br>
    <label for="lname">Last name:</label>
   <input type="text" id="lname"name="lname"placeholder="Enter your Last name" value="<?php echo $lname; ?>" required>

   <br><br>
  <label for="gender">Gender: </label>
        <span></span>
        <input type="radio" id="male" name="gender" value="male"value="<?php echo $gender; ?>" required>
        <label for ="male">Male</label>
        <span></span>
        <input type="radio" id="female" name="gender" value="female" value="<?php echo $gender; ?>" required>
        <label for ="female">Female</label>
        <span></span>
        <input type="radio" id="other" name="gender" value="other"value="<?php echo $gender; ?>" required>
        <label for ="other">Other</label> 
     <br> <br>

     <label for="ldob">DoB:</label>
 	 <input type="date" id="ldob"name="ldob"value="<?php echo $ldob; ?>" required>	

    <br><br>
     <label for="religion">Religion:</label>
       <select type="dropdown" id="religion" name="religion"required value="<?php echo $religion; ?>">
       	<option value="islam" >Islam</option>
       	<option value="buddhist" >Buddhist</option>
       	<option value="Christian" >Christian</option>
       	<option value="hindu" >Hindu</option>
   		<option value="other" >Other</option>
       </select>
    <br><br>
 </fieldset>
    <fieldset>
        <legend>Contact Information:</legend>  

    <label for="fpresent">Present Address   :</label>
 	 <input type="textarea" id="fpresent"name="fpresent"placeholder="Enter your Address"value="<?php echo $fpresent; ?>" >
 	
    <br><br>
     <label for="lpermanet">Permanent Address:</label>
 	 <input type="textarea" id="lpermanet"name="lpermanet"placeholder="Enter your Address"value="<?php echo $lpermanet; ?>" >

       <br><br>
        <label for="fphone">Phone:</label>
 	 <input type="tel" id="fphone"name="fphone"placeholder="Enter your PhoneNumber"value="<?php echo $fphone; ?>">
 	 
       <br><br>
        <label for="femail">Email:</label>
 	 <input type="email" id="femail"name="femail"placeholder="Enter your Email" value="<?php echo $femail; ?>" required>
 	 
       <br><br>
         <label for="flink">Personal Website Link:</label>
 	 <input type="url" id="flink"name="flink" value="<?php echo $flink; ?>">
       <br><br>
     </fieldset>
        <fieldset>
        <legend>Account Information: </legend>

       <label for="username">Username:</label>
 	 <input type="text" id="username"name="username"placeholder="Enter your Username" value="<?php echo $username; ?>" required>

        <br><br>
      <label for="lpassword">Password:</label>
 	 <input type="password" id="lpassword"name="lpassword"placeholder="Enter your Password" value="<?php echo $lpassword; ?>" required>
 	 
    <br><br>
 </fieldset>
    <br>
    <input type="submit" value="submit">	

</body>
</html>