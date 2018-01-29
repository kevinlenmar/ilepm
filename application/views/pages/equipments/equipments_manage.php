<div class="content-wrapper">
    <h1><center> Equipments </center></h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="<?php echo base_url();?>equipments/manage" method="post" id="equipmentForm">
                        <div class="col-sm-12" style="margin-bottom: 30px;">
                            <h5>Unit Name:</h5>
                                <select class="form-control" id="unit_name" name="unit_name" onchange="getVal(this);">
                                    <option value="">Not Selected</option>
                                    <?php
                                        foreach($example as $item) {
                                            echo '<option value="'.$item->unit.'">'.$item->unit.'</option>';
                                        }
                                    ?>
                                </select>
                                <span class="text-danger"><?php echo form_error('unit_name'); ?></span>
                        </div>
                        <div class="dataTable_wrapper">
                           <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>CRTL Number</th>
                                        <th>Product Name</th>
                                        <th>Serial Number</th>
                                        <th>Procedure</th>
                                        <th>Standard/Criteria</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach($sample as $item){
                                            echo '<tr>
                                                    <td>'.$item->ctrl_no.'</td>
                                                    <td>'.$item->product_name.'</td>
                                                    <td>'.$item->serial_no.'</td>
                                                    <td>'.$item->procedures.'</td>
                                                    <td>'.$item->standard_criteria.'</td>
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

<script src="<?php echo base_url(); ?>assets/dist/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/dataTables.bootstrap.min.js"></script>

 <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });

    function getVal(sel){
        var url = "<?php echo base_url();?>equipments/manage"; 
        $.ajax({
               type: "POST",
               url: url,
               data: $("#equipmentForm").serialize(), // serializes the form's elements.
               success: function(data)
               {
                    var newData = $(data).find('#example').html();
                    $('#example').DataTable().destroy();
                    $('#example').html(newData);
                    $('#example').DataTable().draw();
               }
             });
    }
  </script>