<!-- Form Fields -->
<form id="default_form" class="col-wrap" action="thankyou.php" method="post">
	<ul>
		<li class="lbl-hint lbl-mini">
			<label for="form_fname">First Name*</label>
			<input type="text" id="form_fname" name="form_fname" placeholder="First Name*" REQUIRED>
		</li>
		<li class="lbl-hint lbl-mini col1-2 field-col">
			<label for="form_email">Email*</label>
			<input type="email" id="form_email" name="form_email" placeholder="Email*" REQUIRED>
		</li>
		<li class="lbl-hint lbl-mini col1-2 field-col">
			<label for="form_phone">Phone</label>
			<input type="tel" id="form_phone" name="form_phone" placeholder="Phone">
		</li>
		<li class="lbl-hint lbl-mini">
			<label for="form_street">Street Address</label>
			<input type="text" id="form_street" name="form_street" placeholder="Street Address">
		</li>
		<li class="lbl-hint lbl-mini col1-2 field-col">
			<label for="form_city">City</label>
			<input type="text" id="form_city" name="form_city" placeholder="City">
		</li>
		<li class="lbl-hint lbl-mini col1-4 field-col">
			<label for="form_state">State</label>
			<select class="" id="form_state" name="form_state">
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">District Of Columbia</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
			</select>
		</li>
		<li class="lbl-hint lbl-mini col1-4 field-col">
			<label for="form_zip">Zip Code</label>
			<input type="text" id="form_zip" name="form_zip" placeholder="Zip Code">
		</li>
		<li class="lbl-hint lbl-mini">
			<label for="form_fname">Student's Date of Birth*</label>
			<input type="text" id="form_fname" name="form_fname" placeholder="Student's Date of Birth*" REQUIRED>
		</li>
		<li>
			<hr>
		</li>
		<li class="inline">
			<label for="form_">Parent or Student?*</label>
			<div class="radio-wrap lbl-block">
				<label class="radio" for="form_parent"><input type="radio" id="form_parent" name="form_parent" REQUIRED> Parent</label>
				<label class="radio" for="form_student"><input type="radio" id="form_student" name="form_parent" REQUIRED> Student</label>
			</div>
		</li>
		<li class="inline">
			<label for="form_">What programs are you interested in?</label>
			<div class="chbx-wrap lbl-block">
				<label class="chbx" for="form_prgm_tennis"><input type="checkbox" id="form_prgm_tennis" name="form_prgm_tennis"> Tennis</label>
				<label class="chbx" for="form_prgm_golf"><input type="checkbox" id="form_prgm_golf" name="form_prgm_golf"> Golf</label>
				<label class="chbx" for="form_prgm_enrichment"><input type="checkbox" id="form_prgm_enrichment" name="form_prgm_enrichment"> Enrichment for High School Students</label>
				<label class="chbx" for="form_prgm_college"><input type="checkbox" id="form_prgm_college" name="form_prgm_college"> College Credit at Villanova University</label>
				<label class="chbx" for="form_prgm_xploration"><input type="checkbox" id="form_prgm_xploration" name="form_prgm_xploration"> Xploration for Middle School Students</label>
				<label class="chbx" for="form_prgm_art"><input type="checkbox" id="form_prgm_art" name="form_prgm_art"> Art: Summer at Penn</label>
				<label class="chbx" for="form_prgm_architecture"><input type="checkbox" id="form_prgm_architecture" name="form_prgm_architecture"> Architecture: Summer at Penn</label>
				<label class="chbx" for="form_prgm_intern"><input type="checkbox" id="form_prgm_intern" name="form_prgm_intern"> Internships</label>
				<label class="chbx" for="form_prgm_medicine"><input type="checkbox" id="form_prgm_medicine" name="form_prgm_medicine"> Penn Medicine for High School Students</label>
				<label class="chbx" for="form_prgm_international"><input type="checkbox" id="form_prgm_international" name="form_prgm_international"> International Affair: Leadership through Model UN</label>
				<label class="chbx" for="form_prgm_wharton"><input type="checkbox" id="form_prgm_wharton" name="form_prgm_wharton"> Wharton Sports Business Academy</label>
				<label class="chbx" for="form_prgm_leadership"><input type="checkbox" id="form_prgm_leadership" name="form_prgm_leadership"> Leadership in the Business World</label>
				<label class="chbx" for="form_prgm_mgmt"><input type="checkbox" id="form_prgm_mgmt" name="form_prgm_mgmt"> Management &amp; Technology Summer Institute</label>
				<label class="chbx" for="form_prgm_nfl"><input type="checkbox" id="form_prgm_nfl" name="form_prgm_nfl"> NFL - Wharton Prep Leadership Program</label>
				<label class="chbx" for="form_prgm_residential"><input type="checkbox" id="form_prgm_residential" name="form_prgm_residential"> Residential Services</label>
				<label class="chbx" for="form_prgm_yesh"><input type="checkbox" id="form_prgm_yesh" name="form_prgm_yesh"> Yesh Shabbat</label>
			</div>
		</li>
		<li class="inline">
			<label for="form_">I would like additional information via</label>
			<div class="radio-wrap lbl-block">
				<label class="radio" for="form_mail"><input type="radio" id="form_mail" name="form_contact" REQUIRED> Mail</label>
				<label class="radio" for="form_phone"><input type="radio" id="form_phone" name="form_contact" REQUIRED> Phone</label>
			</div>
		</li>
		<li>
			<br>
			<button type="submit" class="submit" id="form_submit" name="form_submit">Submit</button>
		</li>
	</ul>
</form>