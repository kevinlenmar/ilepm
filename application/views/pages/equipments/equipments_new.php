<div class="container">
	<div class="content-wrapper content-wrapper-2">
		<h1><center>New Equipments</h1></center>
			<form action="<?php echo base_url();?>equipments/new-equipments" method="post">
				<div class="form-group">
                        <div class="col-sm-6">
                              <h5>Ctrl No.</h5>
                              <input type="text" class="form-control input-style" name="ctrl_no" id="ctrl_no" placeholder="Input Control No.">
                              <span class="text-danger"><?php echo form_error('ctrl_no'); ?></span>
                        </div>
                   	<div class="col-sm-6">
                   		<h5>Product Name:</h5>
               			<input type="text" class="form-control input-style" name="prod_name" id="prod_name" placeholder="Input Product Name">
                        <span class="text-danger"><?php echo form_error('prod_name'); ?></span>
                   	</div>
                   	<div class="col-sm-6">
                   		<h5>Serial Number:</h5>
               			<input type="text" class="form-control input-style" name="serial_no" id="serial_no" placeholder="Input Serial Number">
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
                   		<h5>Procedure:</h5>
                        <textarea class="form-control" rows="3" placeholder="Input Procedure" id="procedure" name="procedure"></textarea>
                        <span class="text-danger"><?php echo form_error('procedure'); ?></span>
                   	</div>
                   	<div class="col-sm-12">
                   		<h5>Standard/Criteria</h5>
                   		<textarea class="form-control" rows="3" placeholder="Input Standard/Criteria" id="criteria" name="criteria"></textarea>
                   		<span class="text-danger"><?php echo form_error('criteria'); ?></span>
                   	</div>
                   	<div class="button-style">
                   		<button type="submit" class="btn btn-primary">Submit</button>
                   	</div>
				</div>
			</form>
	</div>
</div>