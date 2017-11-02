<!-- The Navigator of this page is Matt Taylor -->
<!-- The Typer of this page is Josh O'Connor -->

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Simpson Pet Company</title>

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
          <h2>Welcome to the Simpson Pet Company!</h2>
        </header>
        <section class="well">
          <p>We sell a variety of animals, in all shapes and sizes.</p>
          <p>Links to the other pages on our site can be found at the top of the screen.</p>
          <p>You can see that there is a page that talks about our company and how it got started.</p>
          <p>Next there is a page that tells you our hours and the directions on how to get to our business.</p>
          <p>After that you will see our news page which talks about our recent or upcoming events we might have.</p>
          <p>Next you can see that we have a page that lists our pets that our currently available.</p>
          <p>To the right of that, you will see that there is a page that talks about the recent pets we've sold.</p>
          <p>Lastly, you can see the login/sign up buttons. If you're new to our page, get yourself signed up- you won't regret it! If you're a returning animal lover, hit that login button!</p>
        </section>
      </section>

      <div class="jumbotron">
        <h1>Donations</h1>
        <p>We accept any and all help for our company. Please feel free to donate anything you can to help improve the lives of our animals.</p>
        <p><a class="btn btn-success btn-lg">Donate</a></p>
      </div>
    </div>
<?php include '../resources/footer.php'; ?>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>

</html>
