<article class="registrationform">
	<h2>Registration form</h2>
	<p>Register for becoming a part of IEEE family</p>

	<form class="registration form-horizontal" action="#">

	  <fieldset id="personalinfo">
	    <legend>Personal Info</legend>
		
				<section class="row">
					<label class="col col-lg-4 control-label" for="myname">Name</label>
					<div class="controls">
						<input class="col col-lg-8" type="text" name="myname" id="myname" autofocus placeholder="Last, First" required>
					</div><!-- controls -->
				</section><!-- row -->

				<section class="row">
					<label class="col col-lg-4 control-label" for="companyname">College's Name</label>
					<div class="controls">
						<input class="col col-lg-8" type="text" name="companybname" id="companyname" />
					</div><!-- controls -->
				</section><!-- row -->

				<section class="row">
					<label class="col col-lg-4 control-label" for="myemail">Email</label>
					<div class="controls">
						<input class="col col-lg-8" type="email" name="myemail" id="myemail" required autocomplete="off" />
					</div><!-- controls -->
				</section><!-- row -->

	  </fieldset><!-- personal info -->

	  <fieldset id="otherinfo">
			<legend>Other Info</legend>

				<section class="row">
		  	<label class="col col-lg-4 control-label">PG or UG</label>
					<div class="controls col col-lg-8">
						<label class="radio">
							<input type="radio" name="requesttype" value="question" /> PG
						</label>
						<label class="radio">
							<input type="radio" name="requesttype" value="comment" /> UG
						</label>
					</div><!-- controls -->
				</section><!-- row -->

				
				<section class="row">
		  	<label class="col col-lg-4 control-label">Subscribe</label>
					<div class="controls col col-lg-8">
					<label class="checkbox">
						<input type="checkbox" id="subscribe" name="subscribe" CHECKED value="yes" />
						Would you like to subscribe to IEEE events?
					</label>
					</div><!-- controls -->
				</section><!-- row -->
	  </fieldset>
	  <button class="btn" type="submit">Submit</button>
	</form>
</article>