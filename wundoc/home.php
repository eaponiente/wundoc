<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>WUNDoc</title>

  <!-- CSS  -->

  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){

      $(".link-quick-search").click(function(){

        $(".cont-quick-search").slideToggle();

        // $("html, body").animate({ scrollTop: $(document).height() }, 1000);

      });

    });
  </script>

</head>
<body>
  <nav class="light-green lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">WunDoc</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Top Doctors</a></li>
        <li><a href="#">Recommend a Doctor</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Top Doctors</a></li>
        <li><a href="#">Recommend a Doctor</a></li>
      </ul>
      
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
        <div class="input-field col s12">
          <i class="material-icons prefix">search_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Search</label>
        </div>
      </div>

      <div class="row">
        <center>
          <a class="waves-effect waves-light btn-large">Search</a>
          <br><br>
          <a href="#" class="link-quick-search">QUICK SEARCH</a>
        </center>
      </div>

      <div class="row">
        
        <div class="container cont-quick-search" style="display:none;">

          <form class="col s12">
            <div class="row">
              <div class="input-field col s6">
                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                <label for="first_name">First Name</label>
              </div>
              <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                <label for="disabled">Disabled</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
          </form>

        </div>


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
