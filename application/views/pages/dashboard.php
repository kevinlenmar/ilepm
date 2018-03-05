<link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/morris.css">
<script src="<?php echo base_url();?>assets/dist/js/morris/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/dist/js/morris/raphael-min.js"></script>
<script src="<?php echo base_url();?>assets/dist/js/morris/morris.min.js"></script>
<div class="content-wrapper">
<div class="pull-left">
     <h3>Consumables Table</h3>    
     <div id="consumables" style="height: 250px; width: 500px;"></div>   
 </div>
 <div>
    <h3>Equipments Table</h3>
    <div id="equipments" style="height: 250px; width: 500px;"></div>    
</div>

</div>

<script type="text/javascript">

 $.ajax({
    type: "GET",
    url: "<?php echo base_url();?>dashboard/consumable-data",
    cache: false,
    dataType: "json",
    timeout: 30000,
    success : function (data) {
        if(data) {
            Morris.Bar({
                element: 'consumables',
                data: data,
                xkey: 'year',
                ykeys: ['yearvalue'],
                labels: ['Value'],
            });
        }
        else {
            $('#consumables').html('<div class="text-center cool-text" style="position: absolute"><h3>No entries</h3></div>');
        }
    },
});

 $.ajax({
    type: "GET",
    url: "<?php echo base_url();?>dashboard/equipment-data",
    cache: false,
    dataType: "json",
    timeout: 30000,
    success : function (data) {
        if(data) {
            Morris.Line({
                element: 'equipments',
                data: data,
                xkey: 'year',
                ykeys: ['yearvalue'],
                labels: ['Value'],
            });
        }
        else {
            $('#equipments').html('<div class="text-center cool-text" style="position: absolute"><h3>No entries</h3></div>');
        }
    },
});
</script>


