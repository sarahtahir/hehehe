<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	
  </head>
  <body>
  	<!-- body code goes here -->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!Doctype html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Update User</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <div class="container">
 <!---heading---->
     <header class="heading"> Update User </header><hr></hr>
	<!---Form starting----> 
	<?
	<form class="form" action="userProcess.php" method="post" id="registrationForm">
	<div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">User Type :</label></div>
				  <div class="col-xs-8">
			             <div class="form-group">
                                        <div class="input-group">
                                            <select name="userType" class="form-control" id="sel1">
                                                <option selected="true" disabled="disabled">Please Select User Type</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Staff">Staff</option>
                                            </select>
											<br> <br>
                                        </div>
				 </div>
					 </div>
					  <br></br>
	<div classs="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Staff ID :</label></div>
				  <div class="col-xs-8">
			            <input type="text" name="staffID" id="ID" placeholder="Enter Your ID" class="form-control ">
					  <br> <br>
				 </div>
		 
		 
         <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="pass">Username :</label></div>
				<div class ="col-xs-8">	 
		             <input type="text" name="uname"  placeholder="Enter your Username" class="form-control">
				 </div>
          </div>
			  <br> <br>
		  </div>
		<div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Password :</label></div>
				  <div class="col-xs-8">
			             <input type="text" name="pass" id="PN" placeholder="Enter your Password" class="form-control">
				 </div>
          </div>
			
			<br> <br>
			</div>
			
		<div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Security Question :</label></div>
				  <div class="col-xs-8">
			             <div class="form-group">
                                        <div class="input-group">
                                            <select name= "question" class="form-control" id="sel1">
                                                <option selected="true" disabled="disabled">Please Select Security Question</option>
                                                <option value="Which is your favorite movie?">Which is your favorite movie?</option>
                                                <option value="What is your pets name?">What is your pets name?</option>
                                                <option value="What is the name of your village?">What is the name of your village?</option>
                                            </select>
                                        </div>
				 </div>
					<br>
          </div>
		
		  </div>
		<div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Answer :</label></div>
				  <div class="col-xs-8">
			             <input type="text" name="answer" id="position" placeholder="Enter your Answer" class="form-control">
				 </div>
          </div>
		  </div>
		  <br><br>
			
		  	 </div>
		     <div class="col-sm-12">
		         <button type="submit" name="addUserbtn" class="btn btn-warning">Add</div>
				 </form>
				 ?>
		   </div>
		 </div>
	 </div>	 
		 		 
		 
</div>

</body>		
</html>
	 
	 

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>