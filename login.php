<?php

session_start();
include('config_google.php');
include ('dbh.php');
if(isset($_SESSION['id']))
{
	header("LOCATION: userprofile.php");
}
else
{

include 'top.php';


?>	

			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			
			<meta charset = "utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">


			<meta name="google-signin-client_id" content="805718949659-khpnrkd2qn1c8u44lrlq381g7upjn8db.apps.googleusercontent.com">
			<!--Enter yout OAuth Client ID in the content tag -->

			<script src="https://apis.google.com/js/platform.js" async defer></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


			<script type="text/javascript">
			
				var clicked=fse;
			function ClickLogin()
{
    clicked=true;
}
  	function onSignIn(googleUser) {
		  var profile = googleUser.getBasicProfile();
		  name = profile.getName();
		  pic=profile.getImageUrl();
		  var email=profile.getEmail();
	
		 
		  
		  

     	  var auth2 = gapi.auth2.getAuthInstance();
		  auth2.disconnect();
		  if(clicked){

		  if(email.includes("somaiya.edu"))
		  {
		  var theForm, newInput1, newInput2;
		  theForm = document.createElement('form');
		  theForm.action = 'homepage.php';	//enter the page url you want to redirect the index page to after sign in
		  theForm.method = 'post';
		  newInput1 = document.createElement('input');
		  newInput1.type = 'hidden';
		  newInput1.name = 'user';
		  newInput1.value = name;
		  newInput2 = document.createElement('input');
		  newInput2.type = 'hidden';
		  newInput2.name = 'pic';
		  newInput2.value = pic;
		  theForm.appendChild(newInput1);
		  theForm.appendChild(newInput2);

		  document.getElementById('hidden_form_container').appendChild(theForm);
		  theForm.submit();
		  }else{
		  	window.location.href="http://172.17.15.0.xip.io/cas/homepage.php";
		  	alert("Please login using Somaiya Mail ID");
		  }


		 }
		 
	}


				function signOut() {
					var auth2 = gapi.auth2.getAuthInstance();
					auth2.signOut().then(function () {
					alert('User signed out.');
					});
				}

		</script>
		
  	<br><div class="container">
	    <div class="row">
	      	<div class="col-sm-12 col-md-7 col-lg-5 mx-auto">
	        	<div class="card card-signin my-1 login-card">
	        			<div class="row">
			        		<div class="col-md-12 user-img">
				        		<img src="img/face.png">  
				        	</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-md-12 text-center">
		        				<p style="color: #44a0b3;font-size: 22px">Sign In to continue </p>
		        			</div>
		        		</div>

	          		<div class="card-body" style="margin-top: -10px">
	                <div class="container">
   <br />
   <h2 align="center">LOGIN USING SOMAIYA </h2>
   <br />
   <div class="panel panel-default">
   <?php
   $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="data:image/png;base64,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" /></a>';
    echo '<div align="center">'.$login_button . '</div>';
   
   ?>
   </div>
  </div>
	        	</div>
	      	</div>
	    </div>
  	</div>

  	<?php 

	if (isset($_GET['error']))
	{
		if($_GET['error']=='notfound')
		{
			?>
		    <script type="text/javascript">
			$(document).ready(function(){
		    	document.getElementById("signin-error").innerHTML="There is an error in the input email or password.";
		        $('#myModal').modal('show');
		    });
		    </script>
			<?php 
		}
		else if($_GET['error']=='notfound1')
		{
			?>
		    <script type="text/javascript">
			  window.location.href="http://localhost/cas/login.php";
              alert("You are not authorised user. Please try again! or Contact Administrator");
		    </script>
			<?php 
		}
	}
	?>

	<div class="modal fade" id="myModal">
	  	<div class="modal-dialog">
		    <div class="modal-content">

		      	<!-- Modal Header -->
		      	<div class="modal-header">
			        <h4 class="modal-title">Error</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      	</div>

		      	<div class="modal-body">
			        <p id="signin-error"></p>
			    </div>

		      	<!-- Modal footer -->
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      	</div>

		    </div>
	  	</div>
	</div>

</body>
</html>

<?php

}

?>