<div class="content">
	<div class="content-wrapper content-wrapper-2">
		<h1><center>Import Consumables</center></h1>
		<form action="<?php echo base_url();?>consumables/add-consumables-csv" method="POST" enctype="multipart/form-data">
			<div class="col-sm-12">
				<h5>Unit Name:</h5>
				<select class="form-control" id="category" name="category" style="width: 300px; margin-bottom: 20px;">
					<option value="">Not yet selected</option>
					<?php
					foreach ($category as $item) {
						echo '<option value="'.$item->id.'">'.$item->category_name.'</option>';
					}
					?>
				</select>
				<span class="text-danger"><?php echo form_error('category'); ?></span>
			</div>
			<div class="col-sm-12">
				<input type="file" name="csvfile" id="csv" accept="CSV">
				<input type="submit" name="csv" id="csv" class="btn btn-primary" style="margin-top: 10px;">
			</div>
		</form>
	</div>
</div>

<!-- <div class="content-wrapper">
	<form action="add-consumables-csv" method="POST" enctype="multipart/form-data">
		<input type="file" name="csvfile" accept="CSV">
		<input type="submit" name="">
	</form>


<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

 <script type="text/javascript">
    $(document).ready(function() {
   		$('#example').DataTable();
	});
</script> -->
