<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
	
		<title>
		  
			PostClub
		  
		</title>
		<!--Calendar-->
		<link href='Calendar/fullcalendar.css' rel='stylesheet' />
		<link href='Calendar/fullcalendar.print.css' rel='stylesheet' media='print' />
		<script src='Calendar/lib/moment.min.js'></script>
		<script src='Calendar/lib/jquery.min.js'></script>
		<script src='Calendar/fullcalendar.min.js'></script>
		<style>
			body {
				margin: 40px 10px;
				padding: 0;
				font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
				font-size: 14px;
			}
			#calendar {
                padding-top: 20%;
				width: 90%;
				margin: 0 auto;
                
			}
		</style>
			   
		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300italic,800,400italic,600italic,700italic,800italic' rel='stylesheet' type='text/css'>
		
		<!-- Rocket extras -->
		<link href="assets/css/animate.css" rel="stylesheet">
		<link href="assets/css/prettyPhoto.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		
		<!-- Favicons -->
		<link rel="shortcut icon" href="../assets/favicon.png">
	</head>
	<body>
	
	<?php include "header.php"; ?>
        
	<!-- Start INTRO Section
	================================================== -->
	<section id="face" class="section" style="background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);">
		<div class="container-fluid">
			<div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="lobby">
                        <h1 class="lobbyTitle">Event Queue</h1>
                        <h2 class="lobbyD1">Date: <br/><span>March 13th</span></h2>
                        <h2 class="lobbyD">Event Time: <br/><span>3:00 - 7:00</span></h2>
                        <h2 class="lobbyD">Distance: <br/><span>5km</span></h2>
                        <h2 class="lobbyD">Category: <br/><span>Outdoor - Active</span></h2>
                        <h2 class="lobbyStatus">Looking for<span> 7 </span> more people...</h2>
                    </div>
                </div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div id='calendar'></div>
				</div>
			</div>
		</div>
	</section>
	<!-- ================================================== 
	End Hero -->


<!-- Start Hero 2 Section
<<<<<<< adc1eb79e015c1240b44c6b2abf6255b3e428d38
	=======================================================
=======
	=======================================================-
>>>>>>> Took out info for now
	<section id="features" class="section" style="background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);">
		<div class="container-fluid">
			<div class="row">
				<div class="banner2">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="Hero2">
<<<<<<< adc1eb79e015c1240b44c6b2abf6255b3e428d38
							<img src="assets\images\golf.jpg">
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="preback">
								<h1 class="infoTitle">Meet <span>New</span> Friends</h1>>
=======
							<img src="assets\images\golf.jpg">-
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="preback">
								<h1 class="infoTitle">Meet <span>New</span> Friends</h1>
>>>>>>> Took out info for now
							</div>
						</div>								
					</div>	
				</div>
			</div>	
		</div>
	</section>
	<!-- ==================================================
	End Hero 2 -->
		
	<!-- Start Hero 2 Section
	=======================================================
	<section id="moreFeatures" class="section" style="background-color:#ffcccc; border-top: 1px solid rgba(0, 0, 0, .1);">
		<div class="container-fluid">
			<div class="row">
				
			</div>
		</div>
	</section>
	<!-- ==================================================
	End Hero 2 -->
	<script>
		$(document).ready(function() {
			
			$('#calendar').fullCalendar({
				header: {
					left: 'prev',
					center: 'title',
					right: 'next'
				},
				defaultDate: '2016-01-12',
				selectable: true,
				selectHelper: true,
				select: function(start, end) {
                    $("#myModal").modal();
						
						$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
					
					$('#calendar').fullCalendar('unselect');
				},
				editable: true,
				eventLimit: true, // allow "more" link when too many events
				events: [
					
				]
			});
			
		});
	</script>
        <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Event</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.scrollto.min.js"></script>
	<script src="assets/js/jquery.localscroll.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
	<script src="assets/js/scripts.js"></script>

	</body>
</html>