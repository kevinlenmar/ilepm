<div class="container">
	<div class="content-wrapper content-wrapper-2">
		<h1><center>New Consumable Category</h1></center>
			<form action="<?php echo base_url();?>consumables/new-consumables-category" method="post">
				<div class="form-group">
                   	<div class="col-sm-12">
                   		<h5>Category:</h5>
               			<input type="text" class="form-control input-style" name="category" id="category" placeholder="Input Category">
                        <span class="text-danger"><?php echo form_error('category'); ?></span>
                   	<div class="button-style">
                   		<button type="submit" class="btn btn-primary">Submit</button>
                   	</div>
				</div>
			</form>
	</div>
</div>