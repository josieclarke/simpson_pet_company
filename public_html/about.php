<!-- The Navigator of this page was Josh O'Connor -->
<!-- The Typer of this page was Matt Taylor -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Page</title>

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
     			<h2>About the Company</h2>
     		</header>
     		<section class="well">
			  <p>While we attended Simpson College, we noticed that there was a lot of endangered Indianolan Brown Squirrels.</p>
			  <p>After seeing a majority of these squirrels get hit by cars, chased off campus, and get so obese because of the lack of nut control, we knew we had to do something.</p>
			  <p>We captured as many squirrels as possible and pawned them off and gave them to trusted friends.</p>
			  <p>This is how the dream started. In the present day, we captured a wide variety of animals ranging from the smallest house cat, to the biggest moose.</p>
			  <p>We here at the Simpson Pet Company can get you any animal you want at any given time, and that is a company guarantee.</p>
			</section>
		</section>
	</div>

<?php include '../resources/footer.php'; ?>

</body>

</html>