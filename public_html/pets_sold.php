<!-- The Navigator of this page is Matt Taylor -->
<!-- The Typer of this page is Josh O'Connor -->

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Pet's Sold</title>

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
          <h2>Pets That Found Home</h2>
        </header>
    
        <table class="table table-striped">
        	<tbody>
        		<tr class ="active">
        			<td><b>Moose</b></td>
        			<td><b>Marmot</b></td>
            </tr>
            <tr>
              <td class="panel panel-default"><img src="img/Moose.jpg" alt="Moose" /></td>
              <td class="panel panel-default"><img src="img/Marmot.jpg" alt="Marmot" /></td>
            </tr>
            <tr>
              <td>Marty the Moose was found in Estes Park drowning in the Big Thompson River. Our trapper Banjo Sydney was able to rescue Marty and got him relocated to Ranger Smith at the Rocky Mountain National Park Headquarters.</td>
              <td>Marty the Marmot was found stuck in a snow bank on top of Emerald Lake. Our trapper Banjo Sydney found Marty and relocated him to Ranger Smith at the Rocky Mountain National Park Headquarters.</td>
            </tr>
            <tr>
              <td><br/></td>
            </tr>
            <tr class ="active">
        			<td><b>Squirrel</b></td>
        			<td><b>Horse</b></td>
            </tr>
            <tr>
              <td class="panel panel-default"><img src="img/Squirrel.jpg" alt="Squirel" /></td>
              <td class="panel panel-default"><img src="img/Horse.jpg" alt="Horse" /></td>
            </tr>
            <tr>
              <td>Stormy the squirrel was being attacked by students at Irving Elementary near Simpson. Our trapper Banjo Sydney was able to fend off Stormy from his attackers and got him relocated to the Simpson Pet Company.</td>
              <td>Harry the Horse was found running around Estes Park in the Streets. Our trapper Banjo Sydney was able to control Henry and got him relocated to Ranger Smith at the Rock Mountain National Park Headquarters.</td>
            </tr>
            <tr>
              <td><br/></td>
            </tr>
            <tr class ="active">      
        			<td><b>Deer</b></td>
        			<td><b>Elk</b></td>
        		</tr>
        		<tr>
        			<td class="panel panel-default"><img src="img/Deer.jpg" alt="Deer" /></td>
        			<td class="panel panel-default"><img src="img/Elk.jpg" alt="Elk" /></td>
          </tr>
          <tr>
            <td>Danny the Deer was found eating groceries in the Fareway in Indianola, Iowa. Our trapper, Banjo Sydney was able to lead Danny out of the store and got him relocated with the Simpson Pet Company.</td>
            <td>Elly the Elk was found ramming her head against a tree trunk in the forests of the Rocky Mountain National Park. Our trapper Banjo Sydney was able to stop Elly from hurting herself and got her relocated with Ranger Smith at the Rock Mountain National Park Headquarters.
            </td>
          </tr>
        </table>
      </section>
    </div>
  <?php include '../resources/footer.php'; ?>
  </body>


</html>