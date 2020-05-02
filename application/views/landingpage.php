<div class="col-md-2"></div>
<div class="col-md-8">
	<div class="box">
		<div class="box-body">
			<div class="col-md-12">
				<?php
					echo $strvalue;
				?>
			</div>
		<div class="col-md-12" style="margin-top: 20px;">
			<div class="col-md-3"></div>
			<form class="col-md-6" action="saveCustomer" method="POST">
				<div class="input-group" style="margin-top: 10px; margin-bottom: 10px;">
                  <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </div>
                  <input name="fullname" type="text" class="form-control" placeholder="Eg. Full Name" required pattern="[a-zA-Z]+[ ][a-zA-Z]+">
                </div>
				<div class="input-group" style="margin-top: 10px; margin-bottom: 10px;">
                  <div class="input-group-addon">
                    <i class="fa fa-building"></i>
                  </div>
                  <input name="address" type="text" class="form-control" placeholder="Address for delivery" required>
                </div>
				<div class="input-group" style="margin-top: 10px; margin-bottom: 10px;">
                  <div class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <input name="email" type="email" class="form-control" placeholder="Eg. example@email.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                </div>
				<div class="input-group" style="margin-top: 10px; margin-bottom: 10px;">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input name="phone" type="tel" class="form-control" placeholder="Phone Number" required>
                </div>
				<div class="container-contact100-form-btn">
				<input type="submit" class="btn btn-primary" value="Send Now">
			</div>
		</form>
		<div class="col-md-3"></div>
		</div>
	</div>
</div>
</div>
<div class="col-md-2"></div>