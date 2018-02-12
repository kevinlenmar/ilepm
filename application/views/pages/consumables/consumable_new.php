<div class="container">
	<div class="content-wrapper content-wrapper-2">
            <h1><center>New Consumables</center></h1>
            <form action="<?php echo base_url();?>consumables/new-consumables" method="post">
                  <div class="col-sm-1">
                        <h5>Term:</h5>
                        <select class="form-control" id="term" name="term" style="width: 140px;">
                              <option value="first">1st Semester</option>
                              <option value="second">2nd Semester</option>
                              <option value="summer">Summer</option>
                        </select>
                  </div>
                  <div class="col-sm-8" style="margin-left: 110px;">
                        <h5>SY:</h5>
                        <div class="col-sm-1" style="width: 150px;">
                            <input type="text" class="form-control input-style" name="yearone" id="yearone" onchange="getYear();">
                            <span class="text-danger"><?php echo form_error('yearone'); ?></span>
                      </div>
                      <div class="col-sm-1" style="margin-left: -20px;">
                            <h5>to</h5>
                      </div>
                      <div class="col-sm-1" style="width: 150px;">
                            <input type="text" class="form-control input-style" name="yeartwo" id="yeartwo" readonly="true">
                      </div>
                      
                </div>
                   <div class="col-sm-2">
                        <h5>Part Number:</h5>
                        <input type="text" class="form-control input-style" name="part_no" id="part_no" placeholder="Input Product Name" style="width: 300px;">
                        <span class="text-danger"><?php echo form_error('part_no'); ?></span>
                  </div>
                  <div class="col-sm-2" style="margin-left: 200px;">
                        <h5>Unit Name:</h5>
                              <select class="form-control" id="unit_name" name="unit_name" style="width: 300px;">
                                    <option value="">Not yet selected</option>
                                    <?php
                                          foreach ($unit as $item) {
                                          echo '<option value="'.$item->id.'">'.$item->unit_name.'</option>';
                                          }
                                    ?>
                              </select>
					<span class="text-danger"><?php echo form_error('unit_name'); ?></span>
                  </div>
                  <div class="col-sm-12">
                        <h5>Description</h5>
                        <textarea class="form-control" rows="3" placeholder="Input Description" id="description" name="description"></textarea>
                        <span class="text-danger"><?php echo form_error('description'); ?></span>
                  </div>
                  <div class="col-sm-12" style="margin-top: 10px;">
                        <h5 class="pull-left" style="margin-right: 10px;">Quantity:</h5>
                        <input type="text" class="form-control input-style" name="qty" id="qty" placeholder="Input Quantity" style="width: 120px;">
                        <span class="text-danger"><?php echo form_error('qty'); ?></span>
                  </div> 
                  <div class="button-style">
                        <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
            </form>
      </div>
</div>

<script type="text/javascript">
      function getYear(){
            $.ajax({
              type: "POST",
              success: function(data)
              {
                var newData = parseInt($('#yearone').val());
                $('#yeartwo').val(newData + 1);
              }
            });
      }
</script>