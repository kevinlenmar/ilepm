<div class="container">
	<div class="content-wrapper content-wrapper-2">
		<h1><center>User Registration</h1></center>
			<form action="<?php echo base_url();?>users/new" method="post">
				<div class="form-group">
					<div class="form-group">
						<div class="col-sm-12">
							<h5>Employee ID:</h5>
                            <input type="text" class="form-control input-style" name="username" id="username" placeholder="Input Employee ID">
                            <span class="text-danger"><?php echo form_error('username'); ?></span>
                        </div>
                       	<div class="col-sm-6">
                       		<h5>First Name:</h5>
                   			<input type="text" class="form-control input-style" name="firstname" id="firstname" placeholder="Input First Name">
                            <span class="text-danger"><?php echo form_error('firstname'); ?></span>
                       	</div>
                       	<div class="col-sm-6">
                       		<h5>Last Name:</h5>
                   			<input type="text" class="form-control input-style" name="lastname" id="lastname" placeholder="Input Last Name">
                            <span class="text-danger"><?php echo form_error('lastname'); ?></span>
                       	</div>
                       	<div class="col-sm-12">
                       		<h5>Department:</h5>
                       		<select id="department" class="form-control" name="department" >
								<option value="">Select Department</option>
								<option value="College of Computer Engineering">College of Computer Engineering</option>
							</select>
							<span class="text-danger"><?php echo form_error('department'); ?></span>
                       	</div>
                       	<div class="col-sm-12">
                       		<h5>User Type:</h5>
                       		<select id="usertype" class="form-control" name="usertype" >
								<option value="">Select User Type</option>
								<option value="administrator">Administrator</option>
								<option value="encoder">Encoder</option>
								<option value="viewer">Viewer</option>
							</select>
							<span class="text-danger"><?php echo form_error('usertype'); ?></span>
                       	</div>
                       	<div class="col-sm-12">
                       		<h5>Contact Number:</h5>
                       		<input type="text" class="form-control input-group-custom no-arrow" name="contactnumber" id="contactnumber" placeholder="Input Contact Number:">
                            <span class="text-danger"><?php echo form_error('contactnumber'); ?></span>
                       	</div>
                       	<div class="button-style">
                       		<button type="submit" class="btn btn-primary">Submit</button>
                       	</div>
					</div>
				</div>
			</form>
	</div>
</div>