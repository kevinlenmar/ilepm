<div class="content-wrapper">
	<h1><center> Consumables </center></h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="<?php echo base_url();?>consumables/manage" method="post" id="consumableForm">
                        <div class="col-sm-12">
                            <h5>Unit Name:</h5>
                            <select class="form-control" id="unit_name" name="unit_name" onchange="getUnit(this);">
                                <option value="">Not Selected</option>
                                <?php
                                foreach($example as $item) {
                                    echo '<option value="'.$item->unit.'">'.$item->unit.'</option>';
                                }
                                ?>
                            </select>
                            <span class="text-danger"><?php echo form_error('unit_name'); ?></span>
                        </div>
                        <div class="col-sm-4" style="margin-bottom: 30px; margin-top: 10px;">
                            <div class="col-sm-2" style="margin-left: -14px;">
                                <h5>Term:</h5>
                            </div>
                            <select class="form-control" id="term" name="term" style="width: 140px;" onchange="getMonth(this);">
                                <option value="first">1st Semester</option>
                                <option value="second">2nd Semester</option>
                                <option value="summer">Summer</option>
                            </select>
                        </div>
                        <div class="col-sm-7" style="margin-top: 10px; margin-left: -70px;">
                            <div class="col-sm-1">
                                <h5>SY:</h5>
                            </div>
                            <div class="col-sm-1" style="width: 150px;">
                                <input type="text" class="form-control input-style" name="yearone" id="yearone" onchange="getYear(this);">
                                <span class="text-danger"><?php echo form_error('yearone'); ?></span>
                            </div>
                            <div class="col-sm-1" style="margin-left: -20px; margin-right: -10px;">
                                <h5>to</h5>
                            </div>
                            <div class="col-sm-1" style="width: 150px;">
                                <input type="text" class="form-control input-style" name="yeartwo" id="yeartwo" readonly="true">
                            </div>
                        </div>
                        <!-- <div class="col-sm-1" style="margin-top: 10px; margin-left: -40px;">
                            <input type="submit" name="proceed" id="proceed" value="Proceed" class="btn btn-primary">
                        </div> -->
                        <div class="dataTable_wrapper col-sm-12">
                            <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Part Number</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($sample as $item){
                                        echo '<tr>
                                        <td>'.$item->part_number.'</td>
                                        <td>'.$item->description.'</td>
                                        <td>'.$item->qty.'</td>
                                    </tr>
                                    ';
                                }
                                ?> 
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
        });
    });

    function getUnit(sel){
        var url = "<?php echo base_url();?>consumables/manage"; 
        $.ajax({
               type: "POST",
               url: url,
               data: $("#consumableForm").serialize(), // serializes the form's elements.
               success: function(data)
               {
                    var newData = $(data).find('#example').html();
                    $('#example').DataTable().destroy();
                    $('#example').html(newData);
                    $('#example').DataTable().draw();
               }
             });
         }

     function getYear(sel){
        var url = "<?php echo base_url();?>consumables/manage"; 
        $.ajax({
            type: "POST",
            url: url,
            data: $("#consumableForm").serialize(),
            success: function(data)
            {
                var yearData = parseInt($('#yearone').val());
                var newData = $(data).find('#example').html();
                $('#yeartwo').val(yearData + 1);
                $('#example').DataTable().destroy();
                $('#example').html(newData);
                $('#example').DataTable().draw();
            }
        });
    }

    function getMonth(){
        var url = "<?php echo base_url();?>consumables/manage"; 
        $.ajax({
            type: "POST",
            url: url,
            data: $("#consumableForm").serialize(),
            success: function(data){
                var newData = $(data).find('#example').html();
                $('#example').DataTable().destroy();
                $('#example').html(newData);
                $('#example').DataTable().draw();
            }
        });
    }
    </script>


    <script src="<?php echo base_url(); ?>assets/dist/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/dataTables.bootstrap.min.js"></script>

</body>
</html>

