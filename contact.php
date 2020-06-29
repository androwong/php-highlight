<?php include('header.php'); ?>

<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 text_center_then_left"> <a href="http://www.bookhamschoice.com/"><img src="http://lightwoodgroup.com/wp-content/themes/basecamp_child/images/logo_white.svg" style="height: 50px;" /></a> </div>
			<div class="col-md-6 text-center" style="padding-top: 10px">
				<h1>Contact us</h1>
			</div>
			<div class="col-md-3 text_center_then_right">
				<div class="box_navigation"> <a href="contact.php"><i class="fas fa-envelope"></i></a></div>
			</div>
		</div>
	</div>
</header>

<section class="section_contact">
	<div class="container">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<form id="contact-form" method="post" action="contact_process.php" role="form">
					<div class="messages"></div>
					<div class="controls">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="form_name">First name*</label>
									<input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your first name*" required data-error="Firstname is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="form_lastname">Last name*</label>
									<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your last name*" required data-error="Lastname is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="form_email">Email*</label>
									<input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email*" required data-error="Valid email is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="form_phone">Telephone</label>
									<input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your telephone">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="form_message">Message*</label>
									<textarea id="form_message" name="message" class="form-control" placeholder="Message*" rows="4" required data-error="Please, leave us a message."></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-12">
								<input type="submit" class="btn btn-secondary btn-send" value="Send message">
							</div>
						</div>
					</div>
				</form>
			</div>
			<!-- /.8 --> 
			
		</div>
		<!-- /.row--> 
		
	</div>
	<!-- /.container--> 
</section>


<section class="section_grey">
	<div class="container">
		
		
		<div class="row">
		
		<div class="offset-md-2 col-md-8">
		
		
		
		<div class="row text-center">
		
		<div class="col-md-4">
<h3 class="text-center">Surrey</h3>

Oak House Mews
	<br>
	43 The Parade
	<br>
	Claygate, KT10 0PD
	<br>
	Tel: 01372 464 819
 </div>

		<div class="col-md-4"><h3 class="text-center">London</h3>
4 Carlos Place Mayfair
<br>
London W1K 3AW
</div>


		<div class="col-md-4">
<h3 class="text-center">Bristol</h3>
2 Farleigh Court<br>
Old Weston Road<br>
Flax Bourton BS48 1UR

		
		</div>
		</div>
		
	
	</div>
	</div>
	</div>

</section>


<script src="contact.js"></script>
<?php include('footer.php'); ?>
