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
				    <h2>Log In Page</h2>
				</header>
				<form>
				    <div class="form-group">
				        <label for="email">Email address:</label>
				        <input type="email" class="form-control" id="email">
				    </div>
				    <div class="form-group">
				        <label for="pwd">Password:</label>
				        <input type="password" class="form-control" id="pwd">
				    </div>
				    <div class="checkbox">
				        <label><input type="checkbox"> Remember me</label>
				    </div>
				    <button type="submit" class="btn btn-default">Submit</button>
				    </form>
	      	</section>
	    </div>
	   <?php include '../resources/footer.php'; ?>
	 </body>
 </html>