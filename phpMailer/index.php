<?php include 'sendmail.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHPMalier</title>
</head>
<body>
	<section class="module" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2 class="module-title font-alt">Get in touch</h2>
					<div class="module-subtitle font-serif"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<form id="contactForm" role="form" method="post" action="sendmail.php">
						<div class="form-group">
							<label class="sr-only" for="name">Name</label>
							<input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name."/>
							<p class="help-block text-danger"></p>
						</div>
						<div class="form-group">
							<label class="sr-only" for="email">Email</label>
							<input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address."/>
							<p class="help-block text-danger"></p>
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required="required" data-validation-required-message="Please enter your message."></textarea>
							<p class="help-block text-danger"></p>
						</div>
						<div class="text-center">
							<button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit" name="submit">Submit</button>
						</div>
					</form>
					<div class="ajax-response font-alt" id="contactFormResponse"></div>
				</div>
			</div>
		</div>
	</section>
	
	<script type="text/javascript">
		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}
	</script>
</body>
</html>