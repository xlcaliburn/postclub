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

		<script src="assets/js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
		<link href="assets/js/bootstrap-timepicker/css/bootstrap-timepicker.min.js" />
		<style>
			body {
				margin: 40px 10px;
				padding: 0;
				font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
				font-size: 14px;
			}
			#calendar {
				max-width: 800px;
				margin-top: 140px;
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
	
	<?php include "header.php" ?>
	
	<!-- Start INTRO Section
	================================================== -->
	<section id="face" class="section" style="background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="image-wrapper">
					<img class ="eventpic" src="assets/images/rock%20climbing.jpg">
                    </div>
                    <div id ="imgoverlay">
                    <h1 class="groupEvent">Rockclimbing @ <span>The Junction</span></h1>
                    <h2 class="eventDate">Date: <br/><span>March 13th</span></h2>
                    <h2 class="eventTime">Event Time: <br/><span>3:00 - 7:00</span></h2>
                    <h2 class="eventDistance">Location: <br/><span>1030 Elias St</span></h2>
                    </div>
				</div>
			</div>
		</div>
	</section>

   
   <!-- Start Profile Section
	=======================================================-->
	<section id="profiles" class="section" style="background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);">
		<div class="container-fluid" style="align: center">
			<div class="row">
                <div class="col-sm-12">
                    <div class="profiles">
	                    <a href="https://www.facebook.com/charlie.zhang.92?fref=ts" target="_blank"><img class="matchProfiles" src="assets/images/Prof1.jpg"></a>
                        <img class="matchProfiles" src="assets/images/Prof2.jpg">
                        <img class="matchProfiles" src="assets/images/Prof3.jpg">
                        <img class="matchProfiles" src="assets/images/Prof4.jpg">
                        <img class="matchProfiles" src="assets/images/Prof5.jpg">
                        <img class="matchProfiles" src="assets/images/Prof6.jpg">
                        <img class="matchProfiles" src="assets/images/Prof7.jpg">
                        <img class="matchProfiles" src="assets/images/Prof10.jpg">
                        <img class="matchProfiles" src="assets/images/Prof8.jpg">                        
                        <img class="matchProfiles" src="assets/images/Prof9.jpg">
                    </div>
				</div>
			</div>



		</div>
	</section>     
        
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.scrollto.min.js"></script>
	<script src="assets/js/jquery.localscroll.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
	<script src="assets/js/scripts.js"></script>

	<script>
		$(document).ready(function() {
			
			$('#calendar').fullCalendar({
				header: {
					left: '',
					center: 'title',
					right: 'next'
				},
				defaultDate: '2016-01-12',
				selectable: true,
				selectHelper: true,
				select: function(start, end) {

					$('#exampleModal').modal();
					var title = '';//prompt('Event Title:');
					var eventData;
					if (title) {
						eventData = {
							title: title,
							start: start,
							end: end
						};
						$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
					}
					$('#calendar').fullCalendar('unselect');
				},
				editable: true,
				eventLimit: true, // allow "more" link when too many events
				events: [
					
				]
			});
			
		});
	</script>	
	</body>
</html>