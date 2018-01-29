<div class="container">
	<div class="content-wrapper content-wrapper-2">
		<h1><center>New Consumables</h1></center>
			<form action="<?php echo base_url();?>consumables/new-consumables" method="post">
				<div class="form-group">
                   	<div class="col-sm-12">
                   		<h5>Part Number:</h5>
               			<input type="text" class="form-control input-style" name="part_no" id="part_no" placeholder="Input Product Name">
                        <span class="text-danger"><?php echo form_error('part_no'); ?></span>
                   	</div>
                   	<div class="col-sm-12">
                   		<h5>Unit Name:</h5>
                   			<select class="form-control" id="unit_name" name="unit_name">
                   			<option value="">Not yet selected</option>
							<?php
								foreach ($example as $item) {
									echo '<option value="'.$item->unit.'">'.$item->unit.'</option>';
								}
							?>
						</select>
						<span class="text-danger"><?php echo form_error('unit_name'); ?></span>
                   	</div>
                   	<div class="col-sm-12">
                   		<h5>Description</h5>
                   		<textarea class="form-control" rows="3" placeholder="Input Description" id="description" name="description"></textarea>
                   		<span class="text-danger"><?php echo form_error('description'); ?></span>
                   	</div>
                   	<div class="button-style">
                   		<button type="submit" class="btn btn-primary">Submit</button>
                   	</div>
				</div>
			</form>
	</div>
</div>