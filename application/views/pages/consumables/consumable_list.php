<div class="content-wrapper">
    <h1>
        <center><i class="fa fa-files-o"></i>&nbsp List of Consumables </center>
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
                            <div class="col-sm-10">
                                <select class="form-control" id="filter" name="filter" onchange="getFilter(this);">
                                    <option value="unhide">View Items</option>
                                    <option value="hide">View Hidden Items</option>
                                    <option value="all">View All</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-1" style="margin-top: 10px; float: right">
                            <input type="button" class="btn btn-primary" name="btnEdit1" id="btnEdit1" value="Edit">
                        </div>
                        <div>
                            <div class="dataTable_wrapper col-sm-12" id="anotherTable">
                            </div>
                        </div>
                        <div class="dataTable_wrapper col-sm-12" style="border:1px solid; padding: 8px">
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
                                        </td>';
                                        if($item->flag != 1){
                                            echo '<td><button type="button" class="btn btn-primary" onclick="consumable_hide('."'".$item->id."'".');">Hide</button></td>';
                                        }else{
                                            echo '<td><button type="button" class="btn btn-primary" onclick="consumable_unhide('."'".$item->id."'".');">Unhide</button></td>';
                                        }
                                        echo '</tr>';
                                    }
                                    ?> 
                                </tbody>
                            </table>
                            <div class="col-sm-1" style="margin:10px 0px 0px 1000px">
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
            'fnRowCallback': function(nRow, aData, iDisplayIndex, iDisplayIndexFull){
                var flag = aData['flag'];
                
                if(flag === '1'){
                    $(nRow).addClass('bg-lightBlue');
                }
            },
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
            'fnRowCallback': function(nRow, aData, iDisplayIndex, iDisplayIndexFull){
                var flag = aData['cs.flag'];
                
                if(flag === '1'){
                    $(nRow).addClass('bg-lightBlue');
                }
            },
        }).draw();
    }

    function getYear(sel){
        var yearData = parseInt($('#yearone').val());
        var newValue = (isNaN(yearData) ? 0 : yearData);
        
        var yearData = parseInt($('#yearone').val()) || 0;

        $('#yeartwo').val(yearData + 1);
        

        $.ajax({
            type: "POST",
            url: '<?php echo base_url();?>consumables/create-consumables-button',
            data: $('#consumableForm').serialize(),
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
        var url = "<?php echo base_url();?>consumables/show-consumables";

        if(formCreate.valid() === false){

        }else{
            $.ajax({
                type: "POST",
                url: url,
                data: $('#consumableForm').serialize(),
                success: function(data){
                    if(data == 'false'){
                        $.alert('No data for this year');
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
                    confirm: {
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
        var url = "<?php echo base_url();?>consumables/duplicate-table";
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
        var url = "<?php echo base_url();?>consumables/list-display-of-consumables";
        document.getElementById("anotherTable").style.border = '1px solid black';
        document.getElementById("anotherTable").style.marginBottom = '30px';
        document.getElementById("anotherTable").innerHTML = "<h3>Editting Table</h3> <div style='padding:8px'><table id='consumableTableByCheck' class='table table-striped table-bordered' width='100%' cellspacing='0'>" +
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
        "<button class='btn btn-primary' type='submit' id='btnConfirm' style='margin-left:966px'>Confirm</button>"
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
                url : '<?php echo base_url();?>consumables/edited-consumables',
                data: {
                    'id': id[5],
                    'first': first,
                    'second': second,
                    'summer': summer,
                    'year': year[6],
                    'category': $('#category').val(),
                    'filter': $('#filter').val(),
                    'yearone': $('#yearone').val(),
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

    function consumable_hide(id){
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url();?>consumables/flag",
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

    function consumable_unhide(id){
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url();?>consumables/unflag",
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
</body>
</html>

