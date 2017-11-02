<!-- The Navigator of this page is Josh O'Connor -->
<!-- The Typer of this page is Matt Taylor-->

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Pets That Need a Home</title>

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
<?php include '../resources/navigation.php'; ?>
    <div class="container-fluid">
      <section class="below_menu_container">
        <header>
          <img src="img/Cats.jpg" alt="Image of Cats"/>
        <h2>Pets That Need a Home</h2>
        </header>
        <section class="alert alert-dismissible alert-warning">
          <h4>Notice</h4>
          <p>This list of animals available can change at any time, and not all pets sold will appear on our Pets Sold page. If you see something you want, please reach out as soon as possible.</p>
        </section>
       
          <h3>Karl the Kangaroo</h3>
          <img class="floating col-xs-3 well" src="img/Kangaroo.jpg" alt="Kangaroo" />
          <p class="col-xs-9 well">Karl was found in Australian Mountains in Australia. He was separated from his parents but was found by our trapper Banjo Sydney.<br /><br/><span class="label label-primary">$359.99</span><br /><br /><a href="#" class="btn btn-success">Buy Now!</a></p>

          <h3 style="clear:left">Carlos the Crocodile</h3>
          <img class="floating col-xs-3 well" src="img/Croc.jpg" alt="Crocodile"/>
          <p class="col-xs-9 well">Carlos was found in the swamps of Sydney in Sydney, Australia. Our trapper Banjo Sydney was able to help him get out of the dense swamp and was relocated back at the Simpson Pet Company.<br/><br/><span class="label label-primary">$249.99</span><br /><br /><a href="#" class="btn btn-success">Buy Now!</a></p>

          <h3 style="clear:left">Camilla the Cassowary</h3>
          <img class="floating col-xs-3 well" src="img/Cassowary.jpg" alt="Cassowary"/>
          <p class="col-xs-9 well">Camilla was found being chased by a pack of koalas. Our trapper Banjo Sydney rescued her and is now relocated at the Simpson Pet Company.<br /><br/><span class="label label-primary">$455.99</span><br /><br /><a href="#" class="btn btn-success">Buy Now!</a></p>

          <h3 style="clear:left">Shane the Sheep</h3>
          <img class="floating col-xs-3 well" src="img/Sheep.jpg" alt="Sheep"/>
          <p class="col-xs-9 well">Shane was discovered on an abandoned farm on the outskirts of Sydney, Australia by our trapper Banjo Sydney.Since being discovered, Shane has been relocated to the Simpson Pet Company.<br /><br/><span class="label label-primary">$299.99</span><br /><br /><a href="#" class="btn btn-success">Buy Now!</a></p>

          <h3 style="clear:left">Penny the Pelican</h3>
          <img class="floating col-xs-3 well" src="img/Pelican.jpg" alt="Pelican"/>
          <p class="col-xs-9 well">Penny was discovered off the shores of the Great Barrier Reef covered garbage. Our trapper Banjo Sydney was able to help have her relocated to the Simpson Pet Company.<br /><br/><span class="label label-primary">$199.99</span><br /><br /><a href="#" class="btn btn-success">Buy Now!</a></p>
        
      </section>
    </div>
    <footer>
      <p style="clear:left">&copy; Copyright 2017 Simpson Pet Company</p>
    </footer>
  </body>
</html>