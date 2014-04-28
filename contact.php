<?php include "header.php"; ?>
<div class="fifteen columns clients">
	<div class="section">
		<h1>Contact</h1>
<!-- Form -->
		<div class="wrapper">
		<div id="main" style="padding:0 0 0 0;">
		
		<!-- Form -->
		<form id="contact-form">
			<div>
				<label>
					<span>Name: (required)</span>
					<input id="contactName" name="contactName" placeholder="Please enter your name" type="text" tabindex="1" required autofocus>
				</label>
			</div>
			<div>
				<label>
					<span>Email: (required)</span>
					<input id="email" name="email" placeholder="Please enter your email address" type="email" tabindex="2" required>
				</label>
			</div>
			<div>
				<label>
					<span>Telephone:</span>
					<input id="phone" name="phone" placeholder="Please enter your number" type="tel" tabindex="3">
				</label>
			</div>
			<div>
				<label>
					<span>Website:</span>
					<input id="website" name="website" placeholder="http://" type="url" tabindex="4">
				</label>
			</div>
			<div>
				<label>
					<span>Message: (required)</span>
					<textarea id="message" name="message" placeholder="Include all the details you can" tabindex="5" required></textarea>
				</label>
			</div>
			<div class="toggler">
				<div id="effect" class="ui-widget-content ui-corner-all">
				<label class="ui-widget-header ui-corner-all"><span id="msgTitle"></span></label>
						<p id="msgBody"></p>
					</div>
			</div>
			<div>
				<button name="submit" type="submit" id="contact-submit">Send Email</button>
			</div>
		</form>
		<!-- /Form -->
		
		</div>
	</div>
		<hr/>

	</div>
</div>


<script src="<?php echo $urlJs; ?>formscripts.js"></script>
<?php include "footer.php"; ?>
