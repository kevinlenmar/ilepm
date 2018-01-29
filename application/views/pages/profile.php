<div class="container">
	<div class="content-wrapper" >
		<h1><center>Profile</center></h1>
		<div class="form-group">
			<img src="<?php echo $sample[0]->image;?>" class="img-circle img-responsive center-block" alt="<?php echo $sample[0]->firstname; echo " "; echo $sample[0]->lastname; ?>">
			<div class="col-sm-6 pull-left">
				<h2>Name:</h2> <h4><?php echo $sample[0]->firstname; echo " "; echo $sample[0]->lastname; ?></h4>
			</div>
			<div class="col-sm-6">
				<h2>Department:</h2> <h4><?php echo $sample[0]->department;?></h4>
			</div>
			<div class="col-sm-6 pull-left">
				<h2>User Type:</h2> <h4><?php echo ucfirst($sample[0]->usertype);?></h4>
			</div>
			<div class="col-sm-6">
				<h2>Contact Number:</h2> <h4><?php echo ucfirst($sample[0]->contactnumber);?></h4>
			</div>
			<input type="date" name="">
		</div>
	</div>
</div>