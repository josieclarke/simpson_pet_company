<!DOCTYPE html>

<html lang="en">

	<head>
	  <meta charset="utf-8">
	  <title>Sign-Up</title>

    <!-- This says our CSS is compatible with phones, and phones
      don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/superhero/bootstrap.min.css">

    <!-- Our custom stylesheet that WE write. We need this to not have our
      text appear under the nav bar. This also centers the header.-->
    <link rel="stylesheet" href="css/pet_company_css.css"> 	  
	</head>

	<body>
	    <!-- Navigation Bar- "navbar-default" to get the proper header color-->
<?php include '../resources/navigation.php'; ?>

	    <div class="container-fluid">
	      	<section class="below_menu_container">
				<header>
				    <img src="img/Cats.jpg" alt="Image of Cats"/>
				    <h2>Sign-up Page</h2>
				</header>
				<form action="/action_page.php">
				    <div class="container">
				        <label><b>Email</b></label>
				        <input type="text" placeholder="Enter Email" name="email" required>
				        <label><b>Password</b></label>
				        <input type="password" placeholder="Enter Password" name="psw" required>
				        <label><b>Repeat Password</b></label>
				        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
				        <input type="checkbox" checked="checked"> Remember me
				        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
				        <input type="checkbox"> I would like to receive monthly emails from Simpson Pet Co. 
				    <div class="clearfix">
				    <button type="button"  class="cancelbtn">Cancel</button>
				    <button type="submit" class="signupbtn">Sign Up</button>
				    </div>
				    </div>
				    </form>
			</section>
		</div>
	<?php include '../resources/footer.php'; ?>
	 </body>

 </html>