<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbCz5cOHBso9Pzg0mVI0XcxshBIHa92SE&libraries=places"></script>
<section class="content">
		<?php if ($this->session->flashdata('success')) {?>
				<div class="alert alert-success fade in">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php }?>
			<?php if ($this->session->flashdata('error')) {?>
				<div class="alert alert-danger fade in">
					<?php echo $this->session->flashdata('error'); ?>
				</div>
			<?php }?>

				<div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $section; ?></h3>
               <hr class="hrstyle">
		   </div><!-- /.box-header -->
		   <a href="<?php echo site_url('admins/city/Cities'); ?>" class="btn bg-navy margin">Back to Cities</a>

            <div class="box-body">
				<?php echo form_open('admins/city/Adventures/add/'.$city_id, array('id' => 'form1', 'enctype' => 'multipart/form-data')); ?>

					<div class="row">
					 <div class="col-md-6">
						  <div class="form-group">
							<label>Adventure</label>
							<input type="hidden" name="city_id" value="<?php echo $city_id ?>"/>
							<input type="hidden" name="country_id" value="<?php echo $country_id['country_id']; ?>"/>
							<input type="text" id="searchTextField" name="adventure_name" class="form-control required" maxlength="300" value="<?php echo set_value('adventure_name') ?>" autocomplete="off" placeholder=""/>
							<?php echo form_error('adventure_name'); ?>
						 </div><!-- /.form-group -->
					</div>
				 </div><!-- /.row -->

				  <div class="row">
					 <div class="col-md-6">
						  <div class="form-group">
							<label>Image</label>
							<input type="file" name="image" accept=".png,.jpg,.jpeg,.gif"/>
							<p class="text-info">[Only .jpg,.jpeg,.png,.gif]</p>
						   </div><!-- /.form-group -->
					</div>
				 </div><!-- /.row -->

				 <div class="row">
					 <div class="col-md-12">
						  <div class="form-group">
							<label>Details</label>
							<textarea name="adventure_details" class="form-control" rows="8"><?php echo set_value('adventure_details') ?></textarea>
							<?php echo form_error('adventure_details'); ?>
						 </div><!-- /.form-group -->
					</div>
				 </div><!-- /.row -->

				 <?php
				 	$def=array();
				 	if($default['default_tags']!='' || $default['default_tags']!=0)
				 	{	
				 		$def=explode(',',$default['default_tags']);
				 	}	
				 	//print_r($def);die;
				  ?>

				  <div class="row">	
					<div class="col-md-12">
						  <div class="form-group">
							<label>Known For</label>
							<select name="knownfor[]" class="required form-control select2" multiple>
								<option value="">Select Known For Tags</option>
								<?php foreach($tags as $list){ ?>
								<option value="<?php echo $list['id']; ?>"
								<?php if(in_array($list['id'], $def)){ echo 'selected'; } ?>

								><?php echo $list['tag_name']; ?></option>
								<?php } ?>
							</select>
							<?php echo form_error('known_for'); ?>
						 </div><!-- /.form-group -->
					</div>
				 </div><!-- /.row -->

					<div class="row">
					<div class="col-md-6">
						  <div class="form-group">
							<label>Address</label>
							<textarea name="adventure_address" class="form-control required" rows="4" maxlength="800"><?php echo set_value('adventure_address') ?></textarea>
							<?php echo form_error('adventure_address'); ?>
						 </div><!-- /.form-group -->
					</div>

					<div class="col-md-6">
						  <div class="form-group">
							<label>Zipcode</label>
							<input type="text" id="zipcode" name="zipcode" class="form-control" value="<?php echo set_value('zipcode') ?>" autocomplete="off" maxlength="30"/>
							
						 </div><!-- /.form-group -->
					</div>
					
				 </div><!-- /.row -->

				  <div class="row">
					 <div class="col-md-6">
						  <div class="form-group">
							<label>Latitude</label>
							<input type="text" id="adventure_lat" name="adventure_lat" class="form-control required number" value="<?php echo set_value('adventure_lat') ?>" autocomplete="off"/>
							<?php echo form_error('adventure_lat'); ?>
						 </div><!-- /.form-group -->
					</div>

					 <div class="col-md-6">
						  <div class="form-group">
							<label>Longitude</label>
							<input type="text" id="adventure_long" name="adventure_long" class="form-control required number" value="<?php echo set_value('adventure_long') ?>" autocomplete="off"/>
							<?php echo form_error('adventure_long'); ?>
						 </div><!-- /.form-group -->
					</div>
				 </div><!-- /.row -->

				 <div class="row">
					 <div class="col-md-6">
						  <div class="form-group">
							<label>Contact</label>
							<input type="text" id="adventure_contact" name="adventure_contact" class="form-control" maxlength="100" value="<?php echo set_value('adventure_contact') ?>" autocomplete="off"/>
							<?php echo form_error('adventure_contact'); ?>
						 </div><!-- /.form-group -->
					</div>

					 <div class="col-md-6">
						  <div class="form-group">
							<label>Website</label>
							<input type="text" id="adventure_website" name="adventure_website" class="form-control url" maxlength="300" value="<?php echo set_value('adventure_website') ?>" autocomplete="off"/>
							<?php echo form_error('adventure_website'); ?>
						 </div><!-- /.form-group -->
					</div>
				 </div><!-- /.row -->

				  <div class="row">
					 <div class="col-md-6">
						  <div class="form-group">
							<label>Nearest Public Station</label>
							<textarea name="adventure_nearest_public_transport" class="form-control" rows="4" maxlength="500"><?php echo set_value('adventure_nearest_public_transport') ?></textarea>
							<?php echo form_error('adventure_nearest_public_transport'); ?>
						 </div><!-- /.form-group -->
					</div>

					<div class="col-md-6">
						  <div class="form-group">
							<label>Admission Fee</label>
							<textarea name="adventure_admissionfee" class="form-control" rows="4" maxlength="1000"><?php echo set_value('adventure_admissionfee') ?></textarea>
							<?php echo form_error('adventure_admissionfee'); ?>
						 </div><!-- /.form-group -->
					</div>
				 </div><!-- /.row -->

				  <div class="row">
					 <div class="col-md-4">
						  <div class="form-group">
							<label>Open/Close Timing</label>
							<textarea name="adventure_open_close_timing" class="form-control" rows="6" maxlength="1000"><?php echo set_value('adventure_open_close_timing') ?></textarea>
							<?php echo form_error('adventure_open_close_timing'); ?>
						 </div><!-- /.form-group -->
					</div>

					<div class="col-md-4">
						  <div class="form-group">
							<label>Time Required (In Hours)</label>
							<input type="text" name="adventure_time_required" class="form-control required number" value="<?php echo set_value('adventure_time_required') ?>" maxlength="4"/>
							<?php echo form_error('adventure_time_required'); ?>
						 </div><!-- /.form-group -->
					</div>

					 <div class="col-md-4">
						  <div class="form-group">
							<label>Wait Time</label>
							<textarea name="adventure_wait_time" class="form-control" rows="6" maxlength="1000"><?php echo set_value('adventure_wait_time') ?></textarea>
							<?php echo form_error('adventure_wait_time'); ?>
						 </div><!-- /.form-group -->
					</div>
					
				 </div><!-- /.row -->

				  <div class="form-group">
                     <label>
                     Buy Ticket ?
                       <input type="radio" name="adventure_buy_ticket" class="minimal" value="1" checked>&nbsp;Yes&nbsp;
                     </label>
                     <label>
                       <input type="radio" name="adventure_buy_ticket" class="minimal" value="0">&nbsp;No&nbsp;
                     </label>
                </div>

                  <div class="form-group">
                     <label>
                   Get Your Guide ?
                       <input type="radio" name="adventure_getyourguid" class="minimal" value="1" checked>&nbsp;Yes&nbsp;
                     </label>
                     <label>
                       <input type="radio" name="adventure_getyourguid" class="minimal" value="0">&nbsp;No&nbsp;
                     </label>
                </div>

                 <div class="form-group">
                     <label>
                      Tag Star
                       <input type="radio" name="tag_star" class="minimal" value="1" >&nbsp;Yes&nbsp;
                     </label>
                     <label>
                       <input type="radio" name="tag_star" class="minimal" value="0" checked>&nbsp;No&nbsp;
                     </label>
                </div>


                 <div class="row">
					 <div class="col-md-12">
						  <div class="form-group">
							<label>Credit</label>
							<input type="text" name="credit" maxlength="2000" class="form-control" value="<?php echo set_value('credit'); ?>"/>
							<?php echo form_error('credit'); ?>
						 </div><!-- /.form-group -->
					</div>
			   </div>


       
                
		 <table>
				<tr>
					<td><input type="submit" class="btn btn-block btn-primary" name="btnsubmit" value="Submit"/></td><td>&nbsp;</td>
					<td><button type="reset" class="btn btn-block btn-danger">Reset</button></td><td>&nbsp;</td>
					<td><a href="<?php echo site_url('admins/city/Adventures/index').'/'.$city_id  ?>" class="btn btn-block btn-default" >Cancel</a></td><td>&nbsp;</td>
				</tr>
			</table>

				<?php echo form_close(); ?>

            </div><!-- /.box-body -->

          </div><!-- /.box -->
<script>
	function checkreadonly(id)
	{
		if($("#chk"+id).is(':checked'))
		{
			$("#"+id).removeAttr('readonly');
		}
		else
		{
			$("#"+id).val('');
			$("#"+id).attr('readonly', 'readonly');
		}
	}
</script>
<script>
  
function initialize() {
   
    var input = document.getElementById('searchTextField');
    var options = {componentRestrictions: {}};
    var autocomplete = new google.maps.places.Autocomplete(input, options);
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
   		var place = autocomplete.getPlace();
   		$("#adventure_lat").val(place.geometry.location.lat());
    	$("#adventure_long").val(place.geometry.location.lng()); 
    });
}
             
google.maps.event.addDomListener(window, 'load', initialize);


</script>
</section>