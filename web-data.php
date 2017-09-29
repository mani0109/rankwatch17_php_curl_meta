<!DOCTYPE html>
<html>
	<head>
		<title>Web Data</title>

	    <?php 
	        if (!file_exists('libraries.php'))
	            echo '<h2>Site is under maintainence...</h2>';
	        else
	            require_once('libraries.php');
	    ?>

	    <link rel="stylesheet" type="text/css" href="CSS files/form.css?cache=<?php echo time();?>">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">

					<fieldset>
	                    <legend>
	                    	<h2 class="form-signin-heading login-head">Website Data</h2>
	                    </legend>
	                    <br>
	                
	                    <!-- URL -->
	                    <label for="url" class="sr-only">Enter URL</label>
	                    <input type="url" name="url" id="url" class="form-control" placeholder="https|http://www.example.com" required autofocus>
	                    <div id="urlErr"></div>
	                    
	                    <br>
	                    
	                    <br>
	                    <div class="row">
	                        <div class="col-md-6">
	                            <button class="btn btn-lg btn-primary" type="button" id="webSubmitButton">Fetch Data</button>  
	                        </div>
	                        <div class="col-md-6">
	                            <span id="progress">
	                            	<img src="images/loading.gif" width="50px" height="40px"/>
	                            </span>  
	                        </div>
	                    </div>
                    </fieldset>
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<table class="table table-striped">
						<thead></thead>
						<tbody id="web-data"></tbody>
					</table>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			var alert_status = 0;
		</script>
        <script type="text/javascript" src="javascript files/form.js?cache=<?php echo time();?>"></script>
	</body>
</html>