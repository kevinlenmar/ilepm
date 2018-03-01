<div class="content-wrapper">
    <h1><center><i class="fa fa-files-o"></i>&nbsp List of Equipment</center></h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="<?php echo base_url();?>equipments/list-of-equipments" method="post" id="equipmentForm">
                        <div class="col-sm-12">
                            <h5>Category:</h5>
                            <select class="form-control" id="category" name="category" onchange="getCategory(this);">
                                <option value="all">All</option>
                                <?php
                                foreach($category as $item) {
                                    echo '<option value="'.$item->id.'">'.$item->category_name.'</option>';
                                }
                                ?>
                            </select>
                            <span class="text-danger"><?php echo form_error('category'); ?></span>
                        </div>
                        <div class="col-sm-4" style="margin: 10px 0px 10px 0px;">
                            <div class="col-sm-1" style="margin-left: -15px">
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
                        <div class="col-sm-4 pull-left" style="margin-top: 10px">
                            <input type="button" class="btn btn-primary" name="btnShow" id="btnShow" value="Show">
                            <input type="button" class="btn btn-primary" name="btnCreate" id="btnCreate" value="Copy and Create" style="display: none;">
                        </div>
                        <div class="col-sm-3" style="margin-top: 10px;">
                            <div class="col-sm-2">
                                <h5>Filter: </h5>
                            </div>
                            <div class="col-sm-9">
                                <select class="form-control" id="filter" name="filter" onchange="getFilter(this);">
                                    <option value="unhide">View Items</option>
                                    <option value="hide">View Hide Items</option>
                                    <option value="all">View All</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-1" style="margin-top: 10px">
                            <input type="button" class="btn btn-primary" name="btnEdit1" id="btnEdit1" value="Edit">
                        </div>
                        <div>
                            <div class="dataTable_wrapper col-sm-12" id="anotherTable">
                            </div>
                        </div>
                        <div class="dataTable_wrapper col-sm-12" style="border:1px solid; padding: 8px">
                           <table id="equipmentTable" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>CRTL Number</th>
                                    <th>Product Name</th>
                                    <th>Serial Number</th>
                                    <th>Procedure</th>
                                    <th>Standard/Criteria</th>
                                    <th>Remarks<br>(1st Semester)</th>
                                    <th>Remarks<br>(2nd Semester)</th>
                                    <th>Remarks<br>(Summer)</th>
                                    <th class="text-center" data-priority="2"><i class="fa fa-wrench fa-fw"></i></th>
                                    <th></th>
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
                                    <td>'.$item->firstremark.'</td>
                                    <td>'.$item->secondremark.'</td>
                                    <td>'.$item->summerremark.'</td>
                                    <td>
                                        <div class="text-center">
                                            <input type="checkbox" name="check_list[]" value="'.$item->id.'">
                                        </div>
                                    </td>';
                                    if($item->flag != 1){
                                        echo '<td><button type="button" class="btn btn-primary" onclick="equipment_hide('."'".$item->id."'".');">Hide</button></td>';
                                    }else{
                                        echo '<td><button type="button" class="btn btn-primary" onclick="equipment_unhide('."'".$item->id."'".');">Unhide</button></td>';
                                    }
                                    echo '</tr>';
                                }
                                ?> 
                            </tbody>
                        </table>
                        <div class="col-sm-1" style="margin:5px 0px 0px 1005px">
                            <input type="button" class="btn btn-primary" name="btnEdit2" id="btnEdit2" value="Edit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script src="<?php echo base_url(); ?>assets/dist/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/dataTables.select.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/jquery-confirm.min.js"></script>

<script type="text/javascript">
    var formCreate = $("#equipmentForm");
    $(document).ready(function() {
        $('#equipmentTable').DataTable({
            'dom': "<'row'<'col-sm-4'l><'col-sm-5 text-center visible-lg'B><'col-sm-3'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            'buttons': [
            {
                'extend': 'excel',
                'text': '<i class="fa fa-file-excel-o fg-green"></i>&nbsp;Excel',
                'exportOptions': {
                    'columns': ':visible'
                }
            },
            ],
            'order': [[0, 'asc']],
            "aoColumns": [
            { "sType": "num" },
            { "render": function(data, type, row){
                return data.split('\n').join("<br/>");
            }
        },
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        ],
    });


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
        $('#equipmentTable').DataTable({
            'dom': "<'row'<'col-sm-4'l><'col-sm-5 text-center visible-lg'B><'col-sm-3'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            'buttons': [
            {
                'extend': 'excel',
                'text': '<i class="fa fa-file-excel-o fg-green"></i>&nbsp;Excel',
                'exportOptions': {
                    'columns': ':visible'
                }
            },
            ],
            'order': [[0, 'asc']],
            "aoColumns": [
            { "sType": "num" },
            { "render": function(data, type, row){
                return data.split('\n').join("<br/>");
            }
        },
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        ],
    }).draw();
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
        var url = "<?php echo base_url();?>equipments/create-equipments-button";
        var yearData = parseInt($('#yearone').val());
        $('#yeartwo').val(yearData + 1);
        $.ajax({
            type: "POST",
            url: url,
            data: $('#equipmentForm').serialize(),
            success: function(data){
                if(data == 'true'){
                    $('#btnCreate').hide();
                }else{
                    $('#btnCreate').show();
                }
            }
        });
    }

    $('#btnShow').click(function(){
        var url = "<?php echo base_url();?>equipments/show-equipments";

        if(formCreate.valid() === false){

        }else{
            $.ajax({
                type: "POST",
                url: url,
                data: $('#equipmentForm').serialize(),
                success: function(data){
                    if(data == 'false'){
                        $.alert('No Data for this year');
                    }else{
                        getTable(data);
                    }
                }
            });
        }

    });

    $('#btnCreate').click(function(){

        if(formCreate.valid() === false){

        }else{
            $.confirm({
                title: 'There is no data for this year. Do you want to create?',
                content: '',
                buttons: {
                    confirm: function () {
                        createTableForYear();
                    },
                    cancel: function () {
                        $.alert('Canceled!');
                    },
                }
            });
        }
    });

    function createTableForYear(){
        var year = $('#yearone').val();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url();?>equipments/list-of-equipments-create',
            data: {
                'year': year,
            },
            success: function(data){
                $.alert('Success!');
                $('#btnCreate').prop('disabled', true);
                getTable(data);
            }
        });
    }

    function getFilter(sel){

        $.ajax({
            type: 'POST',
            url: "<?php echo base_url();?>equipments/filter-equipments",
            data: $('#equipmentForm').serialize(),
            success: function(data){
                getTable(data);
            }
        });
    }

    function equipment_hide(id){
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url();?>equipments/flag",
            data: {
                'id': id,
                'category': $('#category').val(),
                'year': $('#yearone').val(),
                'filter': $('#filter').val(),
            },
            success: function(data){
                getTable(data);
            }
        });
    }

    function equipment_unhide(id){
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url();?>equipments/unflag",
            data: {
                'id': id,
                'category': $('#category').val(),
                'year': $('#yearone').val(),
                'filter': $('#filter').val(),
            },
            success: function(data){
                getTable(data);
            }
        });
    }

    $('#btnEdit1').click(function(){

        if(formCreate.valid() === false){

        }else{
            $('#anotherTable').show();
            getOtherTable();
        }
    });

    $('#btnEdit2').click(function(){
        if(formCreate.valid() === false){

        }else{
            $('#anotherTable').show();
            getOtherTable();
        }
    });

    function getOtherTable(){
       var url = "<?php echo base_url();?>equipments/list-display-of-equipments";
       document.getElementById("anotherTable").style.border = '1px solid black';
       document.getElementById("anotherTable").style.marginBottom = '30px';
       document.getElementById("anotherTable").innerHTML = "<h3>Editting Table</h3> <div style='padding:8px'><table id='equipmentTableByCheck' class='table table-striped table-bordered' width='100%' cellspacing='0'>" +
       "<thead>" +
       "<tr>" + 
       "<th name='ctrl_no'>CTRL Number</th>" +
       "<th name='product_name'>Product Name</th>" +
       "<th name='serial_no'>Serial Number</th>" +
       "<th name='procedures'>Procedure</th>" +
       "<th name='standard_criteria'>Standard/Criteria</th>" +
       "<th name='first'>Remarks(1st Semester)</th>" +
       "<th name='second'>Remarks(2nd Semester)</th>" +
       "<th name='summer'>Remarks(Summer)</th>" +
       "</tr>" +
       "</thead>"+
       "<tbody>" +
       "</tbody>"+
       "</table>"+ 
       "<button class='btn btn-primary' type='submit' id='btnConfirm' style='margin-left:966px'>Confirm</button>"
       "</div>";

       var searchIDs = $("#equipmentTable input:checkbox:checked").map(function(){
          return $(this).val();
      }).get();

       var table = $('#equipmentTableByCheck').DataTable({
        "bProcessing": true,
        "bServerSide": true,
        "ajax":{
            url: url,
            type: 'POST',
            data: function(d){
                d.id = searchIDs;
                d.year = $('#yearone').val();
            },
            select: true,
        },
    });

       $('#equipmentTableByCheck').on('click', 'td', function() {
          var $this = $(this);

          var id = table.row( this ).data();
          var year = table.row(this).data();
          var ctrl_no;
          var product_name;
          var serial_no;
          var procedures;
          var standard_criteria;
          var first;
          var second;
          var summer;
          var idx = table.cell( this ).index().column;
          var title = table.column(idx).header();

          var colName = title.getAttribute("name");
          var $input = $('<input>', {
            value: $this.text(),
            type: 'text',
            name: $(title).html(),
            blur: function() {
               $this.text(this.value);
               var val = this.value;

               if(colName == 'ctrl_no'){
                ctrl_no = val;  
            }else if(colName == 'product_name'){
                product_name = val;
            }else if(colName == 'serial_no'){
                serial_no = val;
            }else if(colName == 'procedures'){
                procedures = val;
            }else if(colName == 'standard_criteria'){
                standard_criteria = val;
            }else if(colName == 'first'){
                first = val;
            }else if(colName == 'second'){
                second = val;
            }else if(colName == 'summer'){
                summer = val;
            }

            $.ajax({
                type: 'POST',
                url : '<?php echo base_url();?>equipments/edit-equipments',
                data: {
                    'id': id[8],
                    'ctrl_no': ctrl_no,
                    'product_name': product_name,
                    'serial_no': serial_no,
                    'procedures': procedures,
                    'standard_criteria': standard_criteria,
                    'category': $('#category').val(),
                    'filter': $('#filter').val(),
                    'year': $('#yearone').val(),
                },
                success: function(data){
                    getTable(data);
                }
            });

            $.ajax({
                type: 'POST',
                url : '<?php echo base_url();?>equipments/edited-equipments',
                data: {
                    'id': id[8],
                    'first': first,
                    'second': second,
                    'summer': summer,
                    'year': year[9],
                    'category': $('#category').val(),
                    'filter': $('#filter').val(),
                    'yearone': $('#yearone').val(),
                },
                success: function(data){
                    getTable(data);
                }
            });
        },
        keyup: function(e) {
           if (e.which === 13) $input.blur();
       }
   }).appendTo( $this.empty() ).focus();
      });

       $('#btnConfirm').click(function(){
        $('#anotherTable').hide();
    });
   }
</script>