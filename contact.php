   	<?php include_once 'includes/header.php' ?>
    <?php  include_once 'includes/nav.php' ?> 

    <div class="container-fluid contactbody no-gutters">
    	<div class="row">
    		
    		
    		<div class="col-md-6 map">
				<div class="banner">
    				<h1>Our Location</h1>
    			</div>
    			<div id="googleMap" style="width: 100%; height: 400px;"></div>

              	<hr>
    			<dl>
                <dt>Address:</dt>
                <dd>Colombia St, Apure, Boboface Avenue 71</dd>
              	</dl>
    		</div>

    		<div class="col-md-6">
    			<div class="owrapper">
    					<div class="wrapper">
    					<form>

    					<h1>Contact</h1>
						<div class="row">
							<div class="col">
						      <input type="text" class="form-control" placeholder="First name">
						    </div>
						    <div class="col">
						      <input type="text" class="form-control" placeholder="Last name">
						    </div>
						</div>
						<div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					  	</div>

    					  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Example textarea</label>
						    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						  </div>
						  <hr>

						  <div class="custom-file">
						  <input type="file" class="custom-file-input" id="customFile">
						  <label class="custom-file-label" for="customFile">Choose file</label>
						</div>

						  <br>
						  <br>
						  <button type="button" class="btn btn-primary btn-lg btn-block">Send</button>

    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
	<script>
	function myMap() {
		var mapProp= {
		    center:new google.maps.LatLng(51.508742,-0.120850),
		    zoom:5,
		};

	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-HXVa2jtkGfKtIJwisxgC46RaWqC1xuI&callback=myMap"></script>
 	<?php include_once 'includes/footer.php' ?>