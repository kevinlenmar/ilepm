<div class="content-wrapper">
	<form action="add-equipments-csv" method="POST" enctype="multipart/form-data">
		<div class="form-group">
           	<div class="col-sm-12">
           		<h5>Unit Name:</h5>
       			<input type="text" class="form-control input-style" name="unit_name" id="unit_name" placeholder="Input Unit Name">
                <span class="text-danger"><?php echo form_error('unit_name'); ?></span>
                <input type="file" name="csvfile" accept="CSV">
				<input type="submit" name="">
		</div>
	</form>


<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

 <script type="text/javascript">
    $(document).ready(function() {
   		$('#example').DataTable();
	});
  </script>
  