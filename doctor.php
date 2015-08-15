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
  	$(document).ready(function() {
	  $('.modal-trigger').leanModal();
	});
  </script>

</head>
<body>
  <nav class="light-green lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">WunDoc</a>
      <ul class="right hide-on-med-and-down">
      	<li><a href="#">Top Doctors</a></li>
        <li style="background-color:#037F52;"><a href="#">Recommend a Doctor</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Top Doctors</a></li>
        <li><a href="#">Recommend a Doctor</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">

    	<div class="row" style="margin-bottom:0px;">
	        <div class="input-field col s12">
	          <!-- <i class="material-icons prefix">search_circle</i> -->
	          <input id="icon_prefix" type="text" class="validate">
	          <label for="icon_prefix">Search</label>
	        </div>

	        <div class="input-field col s12">
	        	<ul class="collapsible" data-collapsible="accordion">
				    <li>
				      <div class="collapsible-header">Quick Filter</div>
				      <div class="collapsible-body">
				      	
					      <div class="container" style="width: 85%;">

					      	<div class="row">
				              <div class="input-field col s6">
				                <input id="txt_fname" type="text" class="validate">
				                <label for="txt_fname">First Name</label>
				              </div>
				              <div class="input-field col s6">
				                <input id="txt_lname" type="text" class="validate">
				                <label for="txt_lname">Last Name</label>
				              </div>
				            </div>

				            <div class="row">
				              <div class="input-field col s12">
				                <input id="txt_location" type="text" class="validate">
				                <label for="txt_location">Age</label>
				              </div>
				            </div>

				            <div class="row">
				              <div class="input-field col s12">
				                <input id="txt_location" type="text" class="validate">
				                <label for="txt_location">Location</label>
				              </div>
				            </div>



					      </div>

				      </div>
				    </li>
				 </ul>
	        </div>

	      </div>

	    <div class="row">
	    	<div class="col s12">
	    		<label>
	    			
	    			<div class="breadcrumb">
	    				<label>Male / wew</label>
	    			</div>
	    		</label>
	    	</div>
	    </div>

	    <div style="clear:both;"></div>
      	
    	<div class="row">
    	
    		<div class="col s12 m5">
    			
    			<div class="card medium" style="height:auto;">
	              <div class="card-image">
	                <img src="img/maria.jpg">
	                <!-- <span class="card-title">Card Title</span> -->
	              </div>
	              <div class="card-content" style="height:auto;">
	              	
	              	<div class="info-rating-profile">
			      		<div class="left" style="width:20px; height:20px; background-color:#DDD; margin-right:5px;">
			      						
						</div>

						<div class="left" style="width:20px; height:20px; background-color:#DDD; margin-right:5px;">
			      						
						</div>

						<div class="left" style="width:20px; height:20px; background-color:#DDD; margin-right:5px;">
			      						
						</div>

			      		<div class="clear:both;"></div>
			      		<br>
			      	</div>

			      	<div>
			      		<label>Rating: <span style="font-size:15px;"><strong>3</strong></span> out of 5</label>
			      	</div>

	              </div>
	              
	            </div>

    		</div>

    		<div class="col s12 m7 product-info">

    			<div class="form-group dateadd">
    				<div class="col s12">
    					<label class="right" style="font-size:12px;">Date Posted: Jan 03, 2015</label>
    				</div>
    			</div>
    			
    			<div class="form-group">
    				<div class="col s12 m3">
    					<div class="row" style="margin:9px 0px;">
    						<label style="font-size:12px;">Name:</label>
    					</div>
    				</div>
    				<div class="col s12 m9">
    					<div class="row" style="margin:5px 0px;">
    						<label><strong>Dr. Manuel C. Buelo</strong></label>
    					</div>
    				</div>

    				<div class="col s12 bottom-dotted"></div>
    			</div>

    			<div class="form-group">
    				<div class="col s12 m3">
    					<div class="row" style="margin:9px 0px;">
    						<label style="font-size:12px;">Specialized in</label>
    					</div>
    				</div>
    				<div class="col s12 m9">
    					<div class="row" style="margin:5px 0px;">
    						<label><strong>Cardiology</strong></label>
    					</div>
    				</div>

    				<div class="col s12 bottom-dotted"></div>
    			</div>

    			<div class="form-group">
    				<div class="col s12 m3">
    					<div class="row" style="margin:9px 0px;">
    						<label style="font-size:12px;">Age:</label>
    					</div>
    				</div>
    				<div class="col s12 m9">
    					<div class="row" style="margin:5px 0px;">
    						<label>27 yrs old</label>
    					</div>
    				</div>

    				<div class="col s12 bottom-dotted"></div>
    			</div>

    			<div class="form-group">
    				<div class="col s12 m3">
    					<div class="row" style="margin:9px 0px;">
    						<label style="font-size:12px;">Gender:</label>
    					</div>
    				</div>
    				<div class="col s12 m9">
    					<div class="row" style="margin:5px 0px;">
    						<label>Male</label>
    					</div>
    				</div>

    				<div class="col s12 bottom-dotted"></div>
    			</div>

    			<div class="form-group">
    				<div class="col s12 m3">
    					<div class="row" style="margin:9px 0px;">
    						<label style="font-size:12px;">Location:</label>
    					</div>
    				</div>
    				<div class="col s12 m9">
    					<div class="row" style="margin:5px 0px;">
    						<label>Green Meadows, Mintal, Davao City</label>
    					</div>
    				</div>

    				<div class="col s12 bottom-dotted"></div>
    			</div>

    			<div class="form-group">
    				<div class="col s12" style="margin-top:10px;">
    					<h5 class="center" style="font-size:15px; color:#9e9e9e;">Do you know how to contact this person?</h5>
    				</div>

    				<div class="col s12" style="margin-top:15px;">
    					
    					<div class="form-group">
		    				<div class="col s12 m3">
		    					<div class="row" style="margin:9px 0px;">
		    						<label style="font-size:12px;">Contact No:</label>
		    					</div>
		    				</div>
		    				<div class="col s12 m9">
		    					<div class="row" style="margin:5px 0px;">
		    						<label>+63912345678</label>
		    					</div>
		    				</div>

		    				<div class="col s12 bottom-dotted"></div>
		    			</div>

    				</div>
    				
    			</div>

    		</div>

    		<div class="col s12" style="margin-top:20px;">
    			<div class="col s12 header" style="margin-bottom:20px;">
    				
    				<h4 style="margin:0px;">Reviews <a style="font-size:12px;" class="right waves-effect waves-light btn modal-trigger" href="#modal3">Add Review</a></h4>
    			
    				<div id="modal3" class="modal bottom-sheet" style="z-index: 1003; display: block; opacity: 0; bottom: -20%; max-height:100%;">
			          <div class="modal-content">
			            <h5>Add review to this person <a style="font-size:12px;" class="right waves-effect waves-light btn">Post your review</a></h5>
			            
			            <div style="clear:both;"></div>
			            <br>

			            <div class="row">
						    <div class="input-field col s6">
						      <input value="Anonymous" id="first_name2" type="text" class="validate">
						      <label class="active" for="first_name2">Your name (Optional)</label>
						    </div>
						  </div>

			            <div class="row">

			              <div class="input-field col s12">
			                <textarea id="icon_prefix2" class="materialize-textarea" style="height: 22px;"></textarea>
			                <label for="icon_prefix2" class="">Review</label>
			              </div>
			            </div>

			          </div>
			        </div>

    			</div>

    			<div class="review-div">
    				
    				<div class="row">
				        <div class="col s12">
				          <div class="card">
				            <div class="card-content">
				              <span class="card-title grey-text">John Torralba</span>
				              <p>I am a very simple card. I am good at containing small bits of information.
				              I am convenient because I require little markup to use effectively.</p>
				            </div>
				            <div class="card-action">
				              <a href="#" onclick="void(0);">January 25, 2015 5:23 pm</a>
				            </div>
				          </div>
				        </div>
				     </div>

				     <div class="row">
				        <div class="col s12">
				          <div class="card">
				            <div class="card-content">
				              <span class="card-title grey-text">John Torralba</span>
				              <p>I am a very simple card. I am good at containing small bits of information.
				              I am convenient because I require little markup to use effectively.</p>
				            </div>
				            <div class="card-action">
				              <a href="#" onclick="void(0);">January 25, 2015 5:23 pm</a>
				            </div>
				          </div>
				        </div>
				     </div>

				     <div class="row">
				        <div class="col s12">
				          <div class="card">
				            <div class="card-content">
				              <span class="card-title grey-text">John Torralba</span>
				              <p>I am a very simple card. I am good at containing small bits of information.
				              I am convenient because I require little markup to use effectively.</p>
				            </div>
				            <div class="card-action">
				              <a href="#" onclick="void(0);">January 25, 2015 5:23 pm</a>
				            </div>
				          </div>
				        </div>
				     </div>

    			</div>
    		</div>

    	</div>
      	
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
