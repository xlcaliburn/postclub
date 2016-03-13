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

		
	<script>setTimeout(function(){window.location.href='indexEventGroup.html'},8000);</script>

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
                        <h3 class="lobbyD1">Date: <br/><span>Jan 15th</span></h3>
                        <h3 class="lobbyD">Time Range: <br/><span>15:00 - 19:00</span></h3>
                        <h3 class="lobbyD">Search: <br/><span>5km</span></h3>
                        <h3 class="lobbyD">Category: <br/><span>Outdoor - Active</span></h3>
                        <h2 class="lobbyStatus">Searching . . .</h2>
                    </div>
                </div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div id='calendar'></div>
				</div>
			</div>
		</div>
	</section>

	<script>
		$(document).ready(function() {
			
			$('#calendar').fullCalendar({
				header: {
					left: 'prev',
					center: 'title',
					right: 'next'
				},
				defaultDate: '2016-01-12',
				selectable: false,
				selectHelper: true,
				select: function(start, end) {
                    $("#myModal").modal();
						
						$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
					
					$('#calendar').fullCalendar('unselect');
				},
				editable: true,
				eventLimit: true, // allow "more" link when too many events
				events: [
					 {
                    title: 'Searching',
                    start: '2016-01-16'
                }
				]
			});
			
		});
	</script>

	<div id="footer">   
            <center><p class="loginFoot">Created by <strong>Jae</strong>, <strong>Bryce</strong> and <strong>Michael</strong></p></center>
        </div>
	</body>

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