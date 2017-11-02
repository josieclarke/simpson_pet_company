<!-- The Navigator of this page is Josh O'Connor -->
<!-- The Typer of this page was Matt Taylor -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Company News</title>

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
	     	<h2>Company News</h2>
	    </header>

  		<h3>Welcome Back Banjo! - 09/07/2017</h3>
  		<section class="well">
		  	<p>Just recently our trapper Banjo Sydney came back from his expedition from Australia. Banjo was able to recover various Australian animals.</p>
		  	<p>Banjo was able to bring back a kangaroo, a crocodile, a cassowary, a sheep, and a pelican. All of these animals need a home so if you or someone you know would like to adopt them, that would be great.</p>
		  	<p>Banjo's Welcome Back Party was last Sunday September 3rd, 2017 for those of you who missed it.</p>
		</section>
	  </section>
    </div>

<?php include '../resources/footer.php'; ?>
</body>

</html>
