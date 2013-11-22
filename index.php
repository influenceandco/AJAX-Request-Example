<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Influence & Co.</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        
        <!-- Le styles -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>
    
    <body>
        <?php include( "config.php");?>
        <?php include( "scripts/dbconnect.php");?>

        
        <div id='wrap'><!--page wrapper -->
        
        	<div class="container">
        		<div class="row-fluid">
        			<div class="span6 offset3">
						<h1>Types of Food</h1>
						<button id="food_button">Generate</button>
						<div class="clearfix"></div>
						<ul id="food">
						
						</ul>
        			</div>
        		</div>
        	</div>
        
        
          
        </div> <!--end of wrap-->
        
        <footer><!--page footer -->

        </footer><!--end of footer-->
        
        
	    <!-- Le scripts -->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="assets/js/placeholder-fix.js"></script>

        <!-- custom scripts -->            
        <script type="text/javascript">
        	
        	
        	///button clicked function
        	$("#food_button").click(function(){
	        	
	        	//loading animation
	        	$("#food").append("<i class='fa fa-spinner fa-spin'></i>");
	        	
	        	var data = {}; //post data
	        	$.ajax({
	        	     type: "POST",
	        	     url: "scripts/food_data.php",
	        	     data: data,
	        	     success: function (res) {
	        	     
	        	     	   //remove loading animation
					 	   $("#food").remove("i.fa-spinner");
					 	   
	        	          res = $.parseJSON(res);
	        	          
	        	          for(var i = 0; i<res.length; i++){
		        	          
		        	          //append data
		        	          $("#food").append("<li>"+res[i]["name"]+"</li>");
		        	          
	        	          }
	        	          
	        	          if(res.length == 0){
	        	          		///error
		        	         $("#food").append("Something went wrong.");
	        	          }
	        	
	        	     }
	        	});
	        	
        	});
        	
        	
        
        </script><!-- end of custom scripts -->
                
    </body>
</html>