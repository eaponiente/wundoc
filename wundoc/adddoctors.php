<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>WUNDoc</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){

    $(".link-quick-search").click(function(){

      $(".cont-quick-search").slideToggle();

      $("html, body").animate({ scrollTop: $(document).height() }, 1000);

    });

  });
  </script>

</head>
<body>
  <nav class="light-green lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">WunDoc</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Search doctor</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Register</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">WunDoc</h1>
      <div class="row center">
        <h5 class="header col s12 light">Where are you now Doc?</h5>
      </div>
      <div class="row center">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <label>Specialization</label>
            </br>
            </br>

            <select class="browser-default">
              <option value="" disabled selected>Specialization</option>
              <option value="1">Anesthesiologist</option>
              <option value="2">Cardiologist</option>
              <option value="3">Dentist</option>
              <option value="4">Dermatologist</option>
              <option value="5">Epidemiologist</option>
              <option value="6">Gynecologist</option>
              <option value="7">Hematologist</option>
              <option value="8">Immunologist</option>
              <option value="9">Internist</option>
              <option value="10">Microbiologist</option>
              <option value="11">Neonatologist</option>
              <option value="12">Nephrologist</option>
            </select>

          </div>        
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="gender" type="text" class="validate">
            <label for="gender">Gender</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="location" type="text" class="validate">
            <label for="location">Location</label>
          </div>
        </div>
        <div class="row right">  
         <button class="btn waves-effect waves-light" type="submit" name="action">Add
          <i class="material-icons">person_pin</i>
        </button>
      </div>

    </form>

  </div>
  <br><br>

</div>
</div>


<div class="container">
  <div class="section">

    <!--   Icon Section   -->


  </div>
  <br><br>

  <div class="section">

  </div>
</div>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
