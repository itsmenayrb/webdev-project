<section class="container mb-5">
	<h1 class="text-center py-sm-2">Let's Talk</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" class="mt-4" id="message-form">
		<div class="alert alert-danger alert-dismissable show fade" role="alert" id="error">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="alert alert-success alert-dismissable show fade" role="alert" id="success">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="form-control-label" for="firstname">First name<span class="text-primary">*</span></label>
					<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" required/>
					<div id="fnerror"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="form-control-label" for="lastname">Last name<span class="text-primary">*</span></label>
					<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" required/>
					<div id="lnerror"></div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="form-control-label" for="email">Email<span class="text-primary">*</span></label>
			<input type="text" class="form-control" id="email" name="email" placeholder="Email" required/>
			<div id="eerror"></div>
		</div>
		<div class="form-group">
			<label class="form-control-label" for="message">Message<span class="text-primary">*</span></label>
			<textarea class="form-control" id="message" name="message" rows="6" required></textarea>
			<div id="merror"></div>
		</div>
		<input type="submit" class="btn btn-primary btn-lg" id="send" name="send" value="Send"/>
	</form>
</section>