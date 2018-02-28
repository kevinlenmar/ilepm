<div class="content-wrapper">
    <h1>
        <center> List of Consumables </center>
    </h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="<?php echo base_url();?>consumables/list-of-consumables" method="post" id="consumableForm">
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
                        <div class="col-sm-4 pull-left" style="margin-top: 10px">
                            <input type="button" class="btn btn-primary" name="btnShow" id="btnShow" value="Show">
                            <input type="button" class="btn btn-primary" name="btnCreate" id="btnCreate" value="Copy and Create" disabled="true">
                        </div>
                        <div class="col-sm-3" style="margin-top: 10px;">
                            <div class="col-sm-2">
                                <h5>Filter: </h5>
                            </div>
                            <div class="col-sm-10">
                                <select class="form-control" id="filter" name="filter" onchange="getFilter(this);">
                                    <option value="all">View All</option>
                                    <option value="hide">View Hide Items</option>
                                    <option value="unhide">View Unhide Items</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-1" style="margin-top: 10px; float: right">
                            <input type="button" class="btn btn-primary" name="btnEdit1" id="btnEdit1" value="Edit">
                        </div>
                        <!-- <div class="col-sm-1" style="margin-top: 10px; float: right">
                            <input type="button" class="btn btn-primary" name="btnFlag" id="btnFlag" value="Flag">
                        </div> -->
                        <!-- <div class="col-sm-1" style="margin-top: 10px; float: right">
                            <input type="button" class="btn btn-primary" name="btnViewFlag" id="btnViewFlag" value="View Flag">
                        </div> -->
                        <div>
                            <div class="dataTable_wrapper col-sm-12" id="anotherTable">
                            </div>
                        </div>
                        <div class="dataTable_wrapper col-sm-12">
                            <table id="consumableTable" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Part Number</th>
                                        <th>Description</th>
                                        <th>1st Semester</th>
                                        <th>2nd Semester</th>
                                        <th>Summer</th>
                                        <th class="text-center" data-priority="2"><i class="fa fa-wrench fa-fw"></i></th>
                                        <th class="text-center" data-priority="3"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($table as $item){
                                        echo '<tr>
                                        <td>'.$item->part_number.'</td>
                                        <td>'.$item->description.'</td>
                                        <td>'.$item->first.'</td>
                                        <td>'.$item->second.'</td>
                                        <td>'.$item->summer.'</td>
                                        <td>
                                            <div class="text-center">
                                                <input type="checkbox" name="check_list[]" value="'.$item->id.'">
                                            </div>
                                        </td>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" name="btnFlag" id="btnFlag" value="'.$item->id.'">Flag</button>
                                    </td>
                                </tr>
                                ';
                            }
                            ?> 
                        </tbody>
                    </table>
                    <div class="col-sm-1" style="margin-top: 10px; float: right">
                        <input type="button" class="btn btn-primary" name="btnEdit2" id="btnEdit2" value="Edit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>


<script type="text/javascript">
    var editor;
    var formCreate = $("#consumableForm");
    $(document).ready(function() {
        $('#consumableTable').DataTable({
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
        var newData = $(data).find('#consumableTable').html();
        $('#consumableTable').DataTable().destroy();
        $('#consumableTable').html(newData);
        $('#consumableTable').DataTable({
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
        var url = "<?php echo base_url();?>consumables/list-of-consumables"; 
        $.ajax({
           type: "POST",
           url: url,
         data: $('#consumableForm').serialize(), // serializes the form's elements.
         success: function(data){
            getTable(data);
        }
    });
    }

    function getYear(sel){
        var yearData = parseInt($('#yearone').val());
        $('#yeartwo').val(yearData + 1);

        $.ajax({
            type: "POST",
            url: '<?php echo base_url();?>consumables/create-consumables-button',
            data: $('#consumableForm').serialize(),
            success: function(data){
                if(data == 'true'){
                    $('#btnCreate').prop('disabled', true);
                }else{
                    $('#btnCreate').prop('disabled', false);
                }
            }
        });
    }

    $('#btnShow').click(function(){
        var url = "<?php echo base_url();?>consumables/show-consumables";

        if(formCreate.valid() === false){

        }else{
            $.ajax({
                type: "POST",
                url: url,
                data: $('#consumableForm').serialize(),
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
        var url = "<?php echo base_url();?>consumables/list-of-consumables-year";

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
        var url = "<?php echo base_url();?>consumables/list-of-consumables-year-create";
        var year = $('#yearone').val();
        $.ajax({
            type: 'POST',
            url: url,
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
        var url = "<?php echo base_url();?>consumables/list-display-of-consumables";
        document.getElementById("anotherTable").style.border = '1px solid black';
        document.getElementById("anotherTable").style.marginBottom = '30px';
        document.getElementById("anotherTable").innerHTML = "<div style='margin-top: 30px'><button class='btn btn-primary' type='submit' id='btnConfirm'>Confirm</button><table id='consumableTableByCheck' class='table table-striped table-bordered' width='100%' cellspacing='0'>" +
        "<thead>" +
        "<tr>" + 
        "<th name='partNo'>Part Number</th>" +
        "<th name='description'>Description</th>" +
        "<th name='first'>1st Semester</th>" +
        "<th name='second'>2nd Semester</th>" +
        "<th name='summer'>Summer</th>" +
        "</tr>" +
        "</thead>"+
        "<tbody>" +
        "</tbody>"+
        "</table>"+ 
        "</div>";

        var searchIDs = $("#consumableTable input:checkbox:checked").map(function(){
          return $(this).val();
      }).get();

        var table = $('#consumableTableByCheck').DataTable({
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
                "columns": [
                {'data': 'part_number'},
                {'data': 'description'},
                {'data': 'first'},
                {'data': 'second'},
                {'data': 'summer'},
                {'data': 'id'},
                {'data': 'year'},
                ],
            },
        });

        $('#consumableTableByCheck').on('click', 'td', function() {
          var $this = $(this);

          var id = table.row( this ).data();
          var year = table.row(this).data();
          var partNumber;
          var description;
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

               if(colName == "partNo"){
                partNumber = val;
            } else if(colName == "description"){
                description = val;
            } else if(colName == "first"){
                first = val;
            } else if(colName == "second"){
                second = val;
            } else if(colName == "summer"){
                summer = val;
            }
            $.ajax({
                type: 'POST',
                url : '<?php echo base_url();?>consumables/edit-consumables',
                data: {
                    'id': id[5],
                    'part_number': partNumber,
                    'description': description,
                },
                success: function(data){
                    getTable(data);
                }
            });

            $.ajax({
                type: 'POST',
                url : '<?php echo base_url();?>consumables/edited-consumables',
                data: {
                    'id': id[5],
                    'first': first,
                    'second': second,
                    'summer': summer,
                    'year': year[6],
                },
                success: function(data){
                    getTable(data);
                },
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

    function getFilter(sel){

        $.ajax({
            type: 'POST',
            url: "<?php echo base_url();?>filter-consumables",
            data: $('#consumableForm').serialize(),
            success: function(data){
                getTable(data);
            }
        });
    }

    function getFlagTable(){
        var url = "<?php echo base_url();?>consumables/flag";
        document.getElementById("anotherTable").style.border = '1px solid black';
        document.getElementById("anotherTable").style.marginBottom = '30px';
        document.getElementById("anotherTable").innerHTML = "<div style='margin-top: 30px'><button class='btn btn-primary' type='submit' id='btnConfirm'>Confirm</button><table id='consumableTableByFlag' class='table table-striped table-bordered' width='100%' cellspacing='0'>" +
        "<thead>" +
        "<tr>" + 
        "<th>Part Number</th>" +
        "<th>Description</th>" +
        "<th>1st Semester</th>" +
        "<th>2nd Semester</th>" +
        "<th>Summer</th>" +
        "<th></th>" +
        "</tr>" +
        "</thead>"+
        "<tbody>" +
        "</tbody>"+
        "</table>";

        $('#consumableTableByFlag').on('click', 'td', function() {
            var $this = $(this);

            var id = table.row( this ).data();
            /* console.log(id);*/
        });
        var table = $('#consumableTableByFlag').DataTable({
            "bProcessing": true,
            "bServerSide": true,
            "ajax":{
                url: url,
                type: 'POST',
                data:{
                    'flag': 1,
                },
            },
            columnDefs: [ {
                targets: 5,
                searchable: false,
                orderable: false,
                render: function(data, type, row){
                    return '<input type="checkbox" name="id[]">';
                }
            } ],
            select: {
                style:    'os',
                selector: 'td:last-child'
            },
            order: [[ 1, 'asc' ]]
        });
    }

    $('#btnFlag').click(function(){
        var url = "<?php echo base_url();?>consumables/flagged";

        var searchIDs = $("#consumableTable input:checkbox:checked").map(function(){
          return $(this).val();
      }).get();

        $.ajax({
            type: 'POST',
            url: url,
            data: {
                'id': searchIDs,
                'year': $('#yearone').val(),
            },
            success: function(data){

            }
            
        });
    });
</script>
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
</body>
</html>

