<?php

/**
 * Profile
 */

// Initialisation
require_once('../New_folder/includes/init.php');

// Require the user to be logged in before they can see this page.
Auth::getInstance()->requireLogin();

// Set the title, show the page header, then the rest of the HTML
$page_title = 'Contact';
include('../New_folder/includes/header.php');

?>

			<!----contact---->
			<div class="container" style="height:500px;">
				<br><br><br><br><br><br>
			<div class="contact-info">
					<center> <div class="container">
					 <div class="contact-grids">
							 <div class="col_1_of_3 span_1_of_3">
								<div class="col_1_of_bottom span_1_of_first1">
								    <h5>Address</h5>
								    <ul class="list3">
										<li>
											<i class="fa fa-map-marker fa-3x"></i>
											<div class="extra-wrap">
											 <p>Jaipur<br>India</p>
											</div>
										</li>
									</ul>
							    </div>
							</div>
							<div class="col_1_of_3 span_1_of_3">
								<div class="col_1_of_bottom span_1_of_first1">
								    <h5>Phones</h5>
									<ul class="list3">
										<li>
											<i class="fa fa-phone fa-3x"></i>
											<div class="extra-wrap">
												<p><span>Telephone:</span>+91 8560856080</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="col_1_of_3 span_1_of_3">
								<div class="col_1_of_bottom span_1_of_first1">
									 <h5>Email</h5>
								    <ul class="list3">
										<li>
											<i class="fa fa-envelope-o fa-3x"></i>
											<div class="extra-wrap">
											  <p><span class="mail">navneetnnavneet1@gmail.com</span></p>
											</div>
										</li>
									</ul>
							    </div>
							</div>
								<div class="clearfix"></div>
							</div>
					 	<form>
					          <div class="contact-form">
								<div class="contact-to">
								</div>
								<div class="text2">
				                   <sadasd value="Thank You:" onfocus="this.value = '';" onblur="if (this.value == '') ">Message Us anytime..</textarea>
				                </div>
				                <div class="clearfix"></div>
				               </div>
				           </form>
							</div>
					</center>		
			</div>
		</div>
			<!---//contact---->
<?php include('../New_folder/includes/footer.php'); ?>
