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
		
		<?php 
			include "header.php";
		?>

		<section id="features" class="section" style="margin-top:85px; background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);">
			<div class="container-fluid">
				<div class="row">
					<div class="banner2">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="preback">
									<h1 class="infoTitle">Meet <span>New</span> Friends</h1>
								<img src="assets\images\golf.jpg">
							</div>						
						</div>	
					</div>
				</div>	
			</div>
		</section>
		
		<section id="face" class="section" style="margin-top: 150px; background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<center><div id='calendar'></div></center>
					</div>
				</div>
			</div>
		</section>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-dialog" role="document">
		    <div class="modal-content">
				<div class="tabbable">
						<div class="tab-content">
						<div class="tab-pane active" id="tab1">
							<div class="modal-header">
								<h3>Event details</h3>
							</div>
							<div class="modal-body">
									<label class="">Start time:</label>

							        <div class="bootstrap-timepicker">
							            <input id="startTime" type="text" class="input-small">
							            <i class="icon-time"></i>
							        </div>
							        <br>
									<label  class="control-label">End Time:</label>

							        <div class="bootstrap-timepicker">
							            <input id="endTime" type="text" class="input-small">
							            <i class="icon-time"></i>
							        </div>
									
															        <br>
									<label  class="control-label">Search distance (km):</label><br>
									<input />


						        <script type="text/javascript">
						            $('#startTime').timepicker({
						                template: false,
						                showInputs: false,
						                minuteStep: 5
						            });
								
								  $('#endTime').timepicker({
						                template: false,
						                showInputs: false,
						                minuteStep: 5
						            });
						        </script>

						        <style>
									.modal-body{
										text-align: left;
									    width: 100%;
									}
								</style>

								</p>
							</div>
							<div class="modal-footer">
								<a href="#tab2" data-toggle="tab" class="pull-right btn btn-default">Next ></a>
							</div>
						</div>
						<div class="tab-pane" id="tab2">
							<div class="modal-header">
								<h3>Category selection</h3>
							</div>
							<div class="modal-body">
								<p>
									<div align="center">
									<img class="categoryLogo" src="assets/images/Social Logo.png" width="40%">
									<img class="categoryLogo" src="assets/images/Active Logo.png" width="40%">
									</div>
								</p>

	<script>
	$(function () {
	  $(".categoryLogo").click(function() {
	    $(this).css('border', "solid 2px red");  
	  });
	});
	</script>

							</div>

							<div class="modal-footer">
								<a href="#tab1" data-toggle="tab" class="pull-left btn btn-default">< Prev</a>
								<a href="indexQueue.php" class="pull-right btn btn-primary">Submit</a>
							</div>
						</div>
					</div>
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