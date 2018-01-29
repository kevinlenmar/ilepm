<div class="container">
	<div class="content-wrapper content-wrapper-2">
		<h1><center>New Consumables</h1></center>
			<form action="<?php echo base_url();?>consumables/new-consumables-unit" method="post">
				<div class="form-group">
                   	<div class="col-sm-12">
                   		<h5>Unit Name:</h5>
               			<input type="text" class="form-control input-style" name="unit_name" id="unit_name" placeholder="Input Unit Name">
                        <span class="text-danger"><?php echo form_error('unit_name'); ?></span>
                   	<div class="button-style">
                   		<button type="submit" class="btn btn-primary">Submit</button>
                   	</div>
				</div>
			</form>
	</div>
</div>