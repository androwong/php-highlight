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
<div class="offset-2 col-md-8">


<?php
/*
 *  CONFIGURE EVERYTHING HERE
 */
 


// an email address that will be in the From field of the email.
$from = 'noreply@bookhamschoice.com';

// an email address that will receive the email with the output of the form
$sendTo = 'info@bookhamschoice.com';

// subject of the email
$subject = 'Contact form submission from bookhamschoice.com';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'); 

// message that will be displayed when everything is OK :)
$okMessage = '<h2 class="text-center">Contact form successfully submitted. Thank you, we will get back to you soon</h2>';

// If something goes wrong, we will display this message.
$errorMessage = '<h2 class="text-center">There was an error while submitting the form. Please try again later</h2>';

/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try
{

    if(count($_POST) == 0) throw new \Exception('Form is empty');
            
    $emailText = "You have a new message from your contact form\n=============================\n";

    foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email 
        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    // All the neccessary headers for the email.
    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from,
    );
    
    // Send email
    mail($sendTo, $subject, $emailText, implode("\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}

?>

</div>
</div>
</div>
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

<?php include('footer.php'); ?>