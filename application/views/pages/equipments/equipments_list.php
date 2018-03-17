<div class="content-wrapper">
    <h1><center><i class="fa fa-files-o"></i>&nbsp List of Equipment</center></h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="<?php echo base_url();?>equipments/list-of-equipments" method="post" id="equipmentForm">
                        <div class="col-sm-12">
                            <h5>Category:</h5>
                            <select class="form-control" id="category" name="category">
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
                            <input type="button" class="btn btn-primary" name="btnCreate" id="btnCreate" value="Create" style="display: none;">
                            <input type="button" class="btn btn-primary" name="btnDuplicate" id="btnDuplicate" value="Duplicate" style="display: none;">
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
                            <label id="labelYear" style="font-size: 25px"></label>
                            <table id="equipmentTable" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>CRTL Number</th>
                                        <th>Product Name</th>
                                        <th>Serial Number</th>
                                        <th>Remarks<br>(1st Semester)</th>
                                        <th>Remarks<br>(2nd Semester)</th>
                                        <th>Remarks<br>(Summer)</th>
                                        <th data-priority="2" style="width: 78px"><input type="checkbox" name="check_all" class="pull-left">Select All</label></th>
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

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="historyModal">

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
                'title': 'Equipments ' + $('#yearone').val() + " - " + $('#yeartwo').val(),
                'exportOptions': {
                    columns: [ 0, 1, 2, 3, 4, 5 ]
                }
            },
            ],
            'order': [[0, 'asc']],
            "aoColumns": [
            { "sType": "num" },
            { "render": function(data, type, row){
                return data.split('\n').join("<br/>");
            },
        },
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
                    required: "<span style='font-family: calibri; color: red;'>The Year field is empty</span>"
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
                'title': 'Equipments ' + $('#yearone').val() + " - " + $('#yeartwo').val(),
                'exportOptions': {
                    columns: [ 0, 1, 2, 3, 4, 5 ]
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
        ],
    }).draw();

        $(':checkbox[name=check_all]').click(function(){
            $(':checkbox[name="check_list[]"]').prop('checked', this.checked);
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
                    $('#btnDuplicate').hide();
                }else{
                    $('#btnCreate').show();
                    $('#btnDuplicate').show();
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
                        document.getElementById("labelYear").innerHTML = "SY: " + $('#yearone').val() + " - " + $('#yeartwo').val();
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
                    cconfirm: {
                        btnClass: 'btn-blue',
                        action: function(){
                            createTableForYear();
                        }
                    },
                    cancel: {
                     btnClass: 'btn-red',
                     action: function(){
                        $.alert('Canceled!');
                    }
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
                $('#btnCreate').hide();
                $('#btnDuplicate').hide();
                getTable(data);
            }
        });
    }

    $('#btnDuplicate').click(function(){
        if(formCreate.valid() === false){

        }else{
            $.confirm({
                title: 'There is no data for this year. Do you want to duplicate?',
                content: '',
                buttons: {
                    confirm: {
                        btnClass: 'btn-blue',
                        action: function(){
                            duplicateTableForYear();
                        }
                    },
                    cancel: {
                     btnClass: 'btn-red',
                     action: function(){
                        $.alert('Canceled!');
                    }
                },
            }
        });
        }
    });

    function duplicateTableForYear(){
        var url = "<?php echo base_url();?>equipments/duplicate-table";
        $.confirm({
            title: 'Enter year:',
            content: '' +
            '<form action="" class="formName" id="duplicateForm" method="post">' +
            '<div class="col-sm-4">' +
            '<select class="form-control" id="year" class="year" onchange="changeYearTwo(this)">' +
            '<?php
            foreach ($list_year as $item) {
                echo '<option value="'.$item->year.'">'.$item->year.'</option>';
            }?>'+
            '</select>' +
            '</div>' +
            '<div class="pull-left" style="margin-top: 10px;"> to' +
            '</div>' +
            '<div class="col-sm-4">' +
            '<input type="text" class="form-control input-style" name="yeartwoo" id="yeartwoo" readonly="true">' +
            '</div>' +
            '</form>',
            buttons: {
                formSubmit: {
                    text: 'Submit',
                    btnClass: 'btn-blue',
                    action: function () {
                        $.ajax({
                            type: 'POST',
                            url: url,
                            data:{
                                year: $('#year').val(),
                                yearone: $('#yearone').val(),
                            },
                            success: function(data){
                                $.alert('Success!');
                                getTable(data);
                                $('#btnCreate').hide();
                                $('#btnDuplicate').hide();
                            }
                        });
                    }
                },
                cancel: function () {
                    $.alert('Canceled!');
                },
            },
            onContentReady: function () {
                var jc = this;
                var yearData = parseInt($('#year').val());

                $('#yeartwoo').val(yearData + 1);
                this.$content.find('form').on('submit', function (e) {

                    e.preventDefault();
                    jc.$$formSubmit.trigger('click');
                });
            }
        });
    }

    function changeYearTwo(sel){
        var yearData = parseInt($('#year').val());

        $('#yeartwoo').val(yearData + 1);
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

    $(':checkbox[name=check_all]').click(function(){
        $(':checkbox[name="check_list[]"]').prop('checked', this.checked);
    });

    $('#btnEdit1').click(function(){

        if(formCreate.valid() === false){

        }else{
            if($('input:checkbox').is(':checked')){
                $('#anotherTable').show();
                getOtherTable();
            }else{
                $.alert('No item is selected!');
            }
        }
    });

    $('#btnEdit2').click(function(){
        if(formCreate.valid() === false){

        }else{
            if($('input:checkbox').is(':checked')){
                $('#anotherTable').show();
                getOtherTable();
            }else{
                $.alert('No item is selected!');
            }
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
       "<th name='first'>Remarks(1st Semester)</th>" +
       "<th name='second'>Remarks(2nd Semester)</th>" +
       "<th name='summer'>Remarks(Summer)</th>" +
       "<th></th>" +
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
        "columns":[
        {'data': '0'},
        {'data': '1'},
        {'data': '2'},
        {'data': '3'},
        {'data': '4'},
        {'data': '5'},
        {
            sortable: false,
            "render": function(data, type, row){
                var id = row[0];
                return '<a class="btn btn-success rolloverBtn" role="button" onclick="view_history('+id+');">View History</a>';
            }
        }
        ]
    });
       /*onclick="view_history('+id+');"*/

       $('#equipmentTableByCheck tbody').on( 'click', 'button', function () {
        alert('helo!');
    } );

       $('#equipmentTableByCheck ').on('click', 'td:not(:last-child)', function() {
          var $this = $(this);

          var id = table.row( this ).data();
          var year = table.row(this).data();
          var ctrl_no;
          var product_name;
          var serial_no;
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
                    'id': id[6],
                    'ctrl_no': ctrl_no,
                    'product_name': product_name,
                    'serial_no': serial_no,
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
                    'id': id[6],
                    'first': first,
                    'second': second,
                    'summer': summer,
                    'year': year[7],
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

   function view_history(buttonID){
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url();?>equipments/modal-list',
        dataType: 'json',
        data: {
            'id': buttonID,
        },
        success: function(data){
            $('#historyModal').modal('show');
            $('#historyTable').DataTable();
            document.getElementById("historyModal").innerHTML = '<div class="modal-dialog modal-lg" role="document">' +
            '<div class="modal-content">' +
            '<div class="modal-header">' +
            '<button type="button" class="close" data-dismiss="modal" aria-label="Close">' +
            '<span aria-hidden="true">&times;</span>' +
            '</button>' +
            '<h3 class="modal-title">History</h3>' +
            '</div>' +
            '<div class="modal-body">' +
            '<div class="container">' +
            '<form id="modalForm" method="post">' +
            '<div class="col-sm-2">' +
            '<h4><b>Control No</b>: '+ data[0].ctrl_no +' </h4>' +
            '</div>' +
            '<div class="col-sm-4">' +
            '<h4><b>Product Name</b>: '+ data[0].product_name +'</h4>' +
            '</div>' +
            '<div class="col-sm-3">' +
            '<h4><b>Serial No</b>: '+ data[0].serial_no +'</h4>' +
            '</div>' +
            '<div class="col-sm-4" style="float: right; margin-bottom: 5px;" id="EditSavebutton">' +
            '<input type="button" class="btn btn-primary" name="editModal" id="editModal" value="Edit" onclick="enable_edit('+data[0].idEquipmentUnit+');">' +
            '</div>' +
            '<div class="col-sm-8">' +
            '<h4><b>Procedures</b>: </h4>' +
            '</div>' +
            '<div class="col-sm-9">' +
            '<textarea class="form-control" rows="3" placeholder="Input Procedure" name="procedure" id="modal_procedure" readonly="true"> ' + data[0].procedures +'</textarea>'+
            '</div>' +
            '<div class="col-sm-8">' +
            '<h4><b>Standard Criteria</b>: </h4>' +
            '</div>' +
            '<div class="col-sm-9">' +
            '<textarea class="form-control" rows="3" placeholder="Input Procedure" name="standard_criteria" id="modal_standard_criteria" readonly="true"> ' + data[0].standard_criteria +'</textarea>'+
            '</div>' +
            '<div class="col-sm-5" style="float: right; margin-top: 10px;" id="AddProblembutton">' +
            '<a href="history?id='+data[0].idEquipmentUnit+'" target="_blank" style="margin-left: 45px;" class="btn btn-success rolloverBtn" role="button">Add Problem</a>' +
            '</div>' +
            '</form>'+
            '<div class="dataTable_wrapper col-sm-9" style="border:1px solid; padding: 8px; margin-top: 10px;">'+
            '<table id="historyTable" class="table table-striped table-bordered" width="100%" cellspacing="0">' +
            '<thead>' +
            '<tr>' + 
            '<th>Date</th>' +
            '<th>Problem</th>' +
            '<th>Date</th>' +
            '<th>Solution</th>' +
            '</tr>' +
            '</thead>'+
            '<tbody>' +
            '</tbody>'+
            '</table>'+
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>';
        }
    });
}

function enable_edit(id){
    document.getElementById("modal_procedure").readOnly = false;
    document.getElementById("modal_standard_criteria").readOnly = false;
    document.getElementById("editModal").remove();
    document.getElementById("EditSavebutton").innerHTML = '<input type="button" class="btn btn-primary" name="submitModal" id="submitModal" value="Update" onclick="update('+id+');">';
}

function update(id){
    var procedures          = document.getElementById("modal_procedure").value;
    var standard_criteria   = document.getElementById("modal_standard_criteria").value;

    $.ajax({
        type: 'POST',
        url: '<?php echo base_url();?>equipments/update-modal',
        data: {
            id: id,
            procedures: procedures,
            standard_criteria: standard_criteria,
        },
        success: function(data){
            $.alert('Updated!');document.getElementById("modal_procedure").readOnly = true;
            document.getElementById("modal_standard_criteria").readOnly = true;
            document.getElementById("submitModal").remove();
            document.getElementById("EditSavebutton").innerHTML = '<input type="button" class="btn btn-primary" name="editModal" id="editModal" value="Edit" onclick="enable_edit('+data+');">';
        }
    });
}
</script>