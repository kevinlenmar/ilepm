<div class="container">
	<div class="content-wrapper content-wrapper-2">
      <h1><center>New Consumable Unit</center></h1>
        <form action="<?php echo base_url();?>consumables/new-consumables-unit" method="post">
          <div class="col-sm-6">
            <h5>Part Number:</h5>
              <input type="text" class="form-control input-style" name="part_no" id="part_no" placeholder="Input Product Name" style="width: 300px;">
              <span class="text-danger"><?php echo form_error('part_no'); ?></span>
          </div>
          <div class="col-sm-6">
            <h5>Category:</h5>
              <select class="form-control" id="category" name="category" style="width: 300px;">
                <option value="">Not yet selected</option>
                  <?php
                    foreach ($category as $item) {
                      echo '<option value="'.$item->id.'">'.$item->category_name.'</option>';
                      }
                  ?>
              </select>
              <span class="text-danger"><?php echo form_error('category'); ?></span>
          </div>
          <div class="col-sm-12">
            <h5>Description</h5>
              <textarea class="form-control" rows="3" placeholder="Input Description" id="description" name="description"></textarea>
              <span class="text-danger"><?php echo form_error('description'); ?></span>
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