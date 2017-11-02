<!-- The Navigator of this page is Matt Taylor -->
<!-- The Typer of this page is Josh O'Connor -->

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Hours and Directions</title>

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
          <h2>Hours and Directions</h2>
        </header>
        <section class="well">
          <p>Our company hours during the week are from 9:00 am to 5:30 pm on Mondays - Fridays.</p>
          <p>Our companies weekend hours are from 10:00 am to 4:00 pm Saturdays and Sundays.</p>
          <p>We are not open for business on <em>any given holiday</em> of <em>any given month.</em></p>
          <h2>Our Location</h2>
          <img src="img/map.jpg" alt="Map to Company" />
          <p> Our store is located in the town of Indianola, Iowa.</p>
          <p> We are located right next to Simpson College on the South West side.</p>
          <p> Our address is 702 N C St, Indianola, IA 50125.</p>
        </section>
      </section>
    </div>
<?php include '../resources/footer.php'; ?>
  </body>

</html>