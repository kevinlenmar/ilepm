<div class="content-wrapper">
    <h1><center> List of Consumables </center></h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="<?php echo base_url();?>consumables/list-of-consumables" method="post" id="consumableForm">
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
                        </div>
                        <div class="col-sm-4" style="margin: 10px 0px 10px 0px;">
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
                        <div class="dataTable_wrapper col-sm-12">
                            <table id="consumableTable" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Part Number</th>
                                        <th>Description</th>
                                        <th>First Semester</th>
                                        <th>Second Semester</th>
                                        <th>Summer</th>
                                        <th class="text-center" data-priority="2"><i class="fa fa-wrench fa-fw"></i></th>
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
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle btn-ilepm" data-toggle="dropdown">
                                                        <i class="fa fa-chevron-down fa-fw"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="" data-toggle="modal" data-target="#quantityModal" id="addQuantity">Add Quantity</a></li>
                                                        <li><a href="javascript:void(0)">Edit Unit</a></li>
                                                    </ul>
                                                </div>
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

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="quantityModal">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="pull-right btn btn-default btn-danger btn-circle" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Add Quantity</h4>
            </div>
            <div class="modal-body form-horizontal">
                <div class="box-body">
                    <form action="<?php echo base_url();?>consumables/add-quantity-modal" method="post" id="quantityModalForm">
                        <div class="col-sm-12">
                            <h4>Term:</h4>
                            <select class="form-control" id="term" name="term" style="width: 140px;">
                                <option value="first">1st Semester</option>
                                <option value="second">2nd Semester</option>
                                <option value="summer">Summer</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                           <h4>Year</h4>
                           <input type="text" class="form-control" id="year" name="year" placeholder="Input Year">
                           <span class="text-danger"><?php echo form_error('year'); ?></span>
                       </div>
                       <div class="col-sm-12" style="margin-bottom: 4px;">
                        <h4>Quantity:</h4>
                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Input Quantity">
                        <span class="text-danger"><?php echo form_error('quantity'); ?></span>
                    </div>
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-primary" id="submitAddModal" name="submitAddModal" style="margin-left: 150px;">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#consumableTable').DataTable({
            'order': [[0, 'asc']],
            "aoColumns": [
            { "sType": "num" },
            null,
            null,
            null,
            null,
            null,
            ],
        });
    });

    function getCategory(sel){
        var url = "<?php echo base_url();?>consumables/list-of-consumables"; 

        $.ajax({
           type: "POST",
           url: url,
           data: $('#consumableForm').serialize(), // serializes the form's elements.
           success: function(data)
           {
            var newData = $(data).find('#consumableTable').html();
            $('#consumableTable').DataTable().destroy();
            $('#consumableTable').html(newData);
            $('#consumableTable').DataTable({
                'order': [[0, 'asc']],
                "aoColumns": [
                { "sType": "num" },
                null,
                null,
                null,
                null,
                null,
                ],
            }).draw();
        }
    });
    }

    function getYear(sel){
        var url = "<?php echo base_url();?>consumables/list-of-consumables"; 
        $.ajax({
            type: "POST",
            url: url,
            data: $("#consumableForm").serialize(),
            success: function(data)
            {
                var yearData = parseInt($('#yearone').val());
                var newData = $(data).find('#consumableTable').html();
                $('#yeartwo').val(yearData + 1);
                $('#consumableTable').DataTable().destroy();
                $('#consumableTable').html(newData);
                $('#consumableTable').DataTable({
                    'order': [[0, 'asc']],
                    "aoColumns": [
                    { "sType": "num" },
                    null,
                    null,
                    null,
                    null,
                    null,
                    ],
                }).draw();
            }
        });
    }
</script>


<script src="<?php echo base_url(); ?>assets/dist/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/dataTables.bootstrap.min.js"></script>

</body>
</html>

