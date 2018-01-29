
<div class="content-wrapper">
	<h1><center>User List</center></h1>
		<!--<div class="toogle">
	        <span><b><small>User Type: </small></b></span>
	        <span class="btn-group" role="group">
	            <button type="button" class="btn btn-default active" data-role="user_type">All</button>
	            <button type="button" class="btn btn-default" data-role="user_type">Administrator</button>
	       	    <button type="button" class="btn btn-default" data-role="user_type">Encoder</button>
	            <button type="button" class="btn btn-default" data-role="user_type">Viewer</button>
	        </span>
		</div>-->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                   <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
            	<th>ID Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Department</th>
                <th>User Type</th>
                <th>Contact Number</th>
            </tr>
        </thead>
        <tbody>
        	<?php 
        		foreach($sample as $item){
        			echo '<tr>
    						<td>
                                <a href="../profile?username='.$item->username.'">
                                '.$item->username.'
                                </a>
                            </td>
    						<td>'.$item->firstname.'</td>
    						<td>'.$item->lastname.'</td>
    						<td>'.$item->department.'</td>
    						<td>'.$item->usertype.'</td>
    						<td>'.$item->contactnumber.'</td>
    					</tr>
        			';
        		}
        	?>
        </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

 <script type="text/javascript">
    $(document).ready(function() {
   		$('#example').DataTable();
	});
  </script>
  