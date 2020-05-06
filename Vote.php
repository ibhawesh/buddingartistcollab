<?php

 if(!isset($_SESSION["vote"]))
 {
 // header("location: index.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>BUDDING ARTISTS COLLAB</title>
  <meta charset="utf-8">
  <link href='https://fonts.googleapis.com/css?family=Cute Font' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

  <link rel="stylesheet" href="css/mystyle.css">
  <link rel="stylesheet" href="css/particle.css">
</head>
<body id="myPage particle" data-spy="scroll" data-target=".navbar" data-offset="60">

	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		</button>
		<a class="navbar-brand" href="index.php">BUDDING ARTISTS </a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
    <li><a href="index.php">HOME</a></li>
	     <li><a href="Vote.php">VOTE</a></li>
		
		</ul>
		</div>
	</div>
	</nav>

	<div class="jumbotron " id="particles-js"></div>
	<div class="count-particles text-center ">
		<h1>BUDDING ARTISTS COLLAB</h1> 
		
	    <h2 style="color: aliceblue;">VOTE PANNEL</h2> 
		
	</div>
            <?php
  
           
            ?>

	<div id="services" class="container text-center">

		<div class="container">
            <?php
           if($_SERVER["REQUEST_METHOD"] == "POST"){
            $prsent_time = date("H:i:s-m/d/y");
            $expiry = 2*24*60*60+time();
              if(isset($_COOKIE["Lastvisit"]))
              {
                header("location: VoteSubmit.html");
              }
                else
                {
                   
                    setcookie("Lastvisit", $prsent_time, $expiry);
                }
             }


            ?>
            <h3 id="success-msg" style="text-align: center !important; margin-top:190px !important; display:none; color:#000">
             VOTE SUCCESS!!<BR>
             YOU VOTED : <strong><p  id = "participant"></p></strong>
                
                <script>
                      var Name = $("#sakha option:selected").text();      
                     
                </script>
            </h3>
			<br>
			
			<form class="form-horizontal" method = "post" id="form" target="_self" onsubmit="return postToGoogle();" action="" autocomplete="off">
              
            <div class="form-group">
				<label class="control-label col-sm-2" for="pwd">SELECT PARTICIPANT :</label>
				<div class="col-sm-10">          
				<select class="form-control" id="sakha" name="entry.541381426" placeholder="Select Sakha" required>
				<option value="">Select Sakha</option>
				<option value="86 Sakha">Bhweh ti</option>
				<option value="Bansbotay Sakha">Bansbotay</option>
				<option value="Bareray">Bareray</option>
				<option value="Bijanbari Sakha">Bijanbari</option> 
				<option value="Bihibarey Sakha">Bihibarey</option> 
				<option value="Jhepi">Jhepi</option>
				<option value="Middle Sakha">Middle Sakha</option>
				<option value="Naya Busty">Naya Busty</option>
				<option value="Noore">Noore</option>
				<option value="Padeng Sakha">Padeng Sakha</option>
				<option value="Relling">Relling</option>
				<option value="Soom Sakha">Soom</option>
				<option value="Other Tashil">Other Place</option>
				</select> 
				</div>
			  </div>
            
            
            
            
            
            <div class="form-group">
				<label class="control-label col-sm-2" for="email">VOTER'S NAME :</label>
				<div class="col-sm-10">
					<input class="form-control" id="nameField" name="entry.484271059" placeholder="Enter your name" type="text" required> 
				</div>
			  </div>


                <style>
                
                   .btn-success{
                       background-color:#f4511e !important;
                   }
                   #participant{
                    color: green !important;
                   }
                </style>			
              <div class="form-group">
				<label class="control-label col-sm-2" for="pwd">VOTER'S ADDRESS</label>
				<div class="col-sm-10">          
					<input class="form-control" id="emailField" name="entry.1617838564" placeholder="Enter your Address"" required> 
				</div>
			  </div>
			  <div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
<!-- 					<H4>REGISTRATION TIME OVER</H4> -->
					<button class="form-control btn btn-success" id="send" type="submit" class="common_btn">VOTE NOW</button>
				</div>
			  </div>
			</form>
		  </div>
	</div>
<script>
	function postToGoogle() {
    var field1 = $("#nameField").val();
    var field2 = $("#emailField").val();
    var field3 = "";
    var field4 = "";
    var field5 = $("#sakha option:selected").text();
     
    document.getElementById("participant").innerHTML = field5;





    if(field1 == ""){
        alert('Please Fill Your Name');
        document.getElementById("nameField").focus();
        return false;
    }
    if(field2 == ""){
        alert('Please Fill Your Address');
        document.getElementById("nameField").focus();
        return false;
    }
    if(field5 == ""){
        alert('Please Select Participant ');
        document.getElementById("sakha").focus();
        return false;
    }
     $.ajax({
        url: "https://docs.google.com/forms/d/e/1FAIpQLSeYXbFrMbUwzAQJipi0KlTlDAxb0MprpiGiGCOf4s9cF-Qy7g/formResponse?",
        data: {"entry.484271059": field1, "entry.1617838564": field2, "entry.1620187497": field3, "entry.1935172545": field4, "entry.541381426": field5},
        type: "POST",
        dataType: "xml",
        success: function(d)
        {
        },
        error: function(x, y, z)
            {

                $('#success-msg').show();
                $('#form').hide();
                
            }
    });
    return false;
}
</script>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

</footer>
<script src="js/Register.js"></script>
<script src="js/script.js"></script>
<script src="js/particle.js"></script>
</body>
</html>

