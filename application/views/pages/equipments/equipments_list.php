<div class="content-wrapper">
    <h1><center>List of Equipment</center></h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="<?php echo base_url();?>equipments/list-of-equipments" method="post" id="equipmentForm">
                        <div class="col-sm-12">
                            <h5>Category:</h5>
                            <select class="form-control" id="category" name="category" onchange="getCategory(this);">
                                <option value="">Not Selected</option>
                                <?php
                                foreach($category as $item) {
                                    echo '<option value="'.$item->id.'">'.$item->category_name.'</option>';
                                }
                                ?>
                            </select>
                            <span class="text-danger"><?php echo form_error('category'); ?></span>
                        </div>
                        <div class="col-sm-4" style="margin: 10px 0px 10px 0px;">
                            <div class="col-sm-1">
                                <h5>SY:</h5>
                            </div>
                            <div class="col-sm-1" style="width: 150px;">
                                <input type="text" class="form-control input-style" name="yearone" id="yearone" onchange="getYear(this);" required="true">
                                <span class="text-danger"><?php echo form_error('yearone'); ?></span>
                            </div>
                            <div class="col-sm-1" style="margin-left: -20px; margin-right: -10px;">
                                <h5>to</h5>
                            </div>
                            <div class="col-sm-1" style="width: 150px;">
                                <input type="text" class="form-control input-style" name="yeartwo" id="yeartwo" readonly="true">
                            </div>
                        </div>
                        <div class="col-sm-4" style="margin-top: 10px">
                            <input type="button" class="btn btn-primary" name="btnYear" id="btnYear" value="Proceed">
                        </div>
                        <div class="dataTable_wrapper col-sm-12">
                           <table id="equipmentTable" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>CRTL Number</th>
                                    <th>Product Name</th>
                                    <th>Serial Number</th>
                                    <th>Procedure</th>
                                    <th>Standard/Criteria</th>
                                    <th>1st Semester</th>
                                    <th>2nd Semester</th>
                                    <th>Summer</th>
                                    <th class="text-center" data-priority="2"><i class="fa fa-wrench fa-fw"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($table as $item){
                                    echo '<tr>
                                    <td>'.$item->ctrl_no.'</td>
                                    <td>'.$item->product_name.'</td>
                                    <td>'.$item->serial_no.'</td>
                                    <td>'.$item->procedures.'</td>
                                    <td>'.$item->standard_criteria.'</td>
                                    <td>'.$item->first.'</td>
                                    <td>'.$item->second.'</td>
                                    <td>'.$item->summer.'</td>
                                    <td>
                                        <div class="text-center">
                                            <input type="checkbox" name="checkbox" onchange="toggleCheckbox(this)" value="'.$item->id.'">
                                        </div>
                                    </td>
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
    var formCreate = $("#equipmentForm");
    $(document).ready(function() {
        $('#equipmentTable').DataTable();

        jQuery.validator.setDefaults({
            debug: true,
            success: "valid"
        });

        formCreate.validate({
            ignore: ".input-sm",
            rules: {
                yearone: {
                    required: true
                },
            },

            messages: {
                yearone: {
                    required: "<span style='font-family: calibri'>The Year field is empty</span>"
                },
            }
        });
    });

    function getTable(data){
        var newData = $(data).find('#equipmentTable').html();
        $('#equipmentTable').DataTable().destroy();
        $('#equipmentTable').html(newData);
        $('#equipmentTable').DataTable().draw();
    }

    function getCategory(sel){
        var url = "<?php echo base_url();?>equipments/list-of-equipments"; 
        $.ajax({
           type: "POST",
           url: url,
               data: $("#equipmentForm").serialize(), // serializes the form's elements.
               success: function(data){
                getTable(data);
            }
        });
    }

    function getYear(sel){
        var yearData = parseInt($('#yearone').val());
        $('#yeartwo').val(yearData + 1);
    }

    $('#btnYear').click(function(){
        var url = "<?php echo base_url();?>equipments/list-of-equipments-year";

        if(formCreate.valid() === false){

        }else{
            $.ajax({
                type: "POST",
                url: url,
                data: $('#equipmentForm').serialize(),
                success: function(data){
                    if(data == "There's no data for this year. Do you want to create?"){
                        if(confirm(data)){
                            createTableForYear();
                        }else{
                            alert("Didn't create");
                        }
                    }else{
                        getTable(data);
                        console.log(data);
                    }
                }
            });
        }
    });

    function createTableForYear(){
        var url = "<?php echo base_url();?>equipments/list-of-equipments-year-create";
        var year = $('#yearone').val();
        $.ajax({
            type: 'POST',
            url: url,
            data: {
                'year': year,
            },
            success: function(data){
                console.log(data);
                alert("Success");
            }
        });
    }
</script>