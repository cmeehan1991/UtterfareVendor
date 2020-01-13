<div class="container-fluid vh-100">
	<div class="row">
		<div class="col-md-6 mx-auto my-auto">
			<h2>Claim Your Listing</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 mx-auto my-auto">
			<div class="alert claim-listing-alert" role="alert" style="display:none"></div>
		</div>
	</div>
	<div class="row my-auto mx-auto">
		<div class="col-md-6 mx-auto my-auto">
			<form name="claimListingForm" onsubmit="return window.claimListing(this);">
				<div class="form-group row">
					<label for="venueName">Restaurant/Venue&ast;</label>
					<input type="text" class="form-control" name="venueName" required>
				</div>
				<div class="form-group row">
					<div class="col">
						<label for="firstName">First Name&ast;</label>
						<input type="text" class="form-control" name="firstName" placeholder="First name" required>
					</div>
					<div class="col">
						<label for="lastName">Last Name&ast;</label>
						<input type="text" class="form-control" name="lastName" placeholder="Last name" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="emailAddress">Email Address&ast;</label>
					<input type="email" class="form-control" id="emailAddress" name="emailAddress" required>
				</div>
				<div class="form-group row">
					<label for="telephoneNumber">Telephone Number&ast;</label>
					<input type="tel" class="form-control" id="telephoneNumber" name="telephoneNumber" required>
				</div>
				<div class="form-check row">
					<input type="checkbox" class="form-check-input" name="formConfirmation" onchange="window.activateForm('claimListingForm');">
					<label class="form-check-label" for="formformConfirmation">By checking this box I am certifying that I am the owner, manager, or legally authorized to manage this listing on behalf of the owner(s) and/or manager(s).</label>
				</div>
				<div class="form-group row">
					<button type="submit" class="btn btn-outline-secondary" disabled>Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>