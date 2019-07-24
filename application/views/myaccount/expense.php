
<div class="wraper container">
<div class="row">
    <div class="col-sm-12">
       <h4 class="page-title">Orders</h4>
    </div>
</div>

<div class="row card-box">

	

	<?php if($this->session->flashdata('success')){ ?>
		<div class="alert bg-success alert-dismissible">
			<?php echo $this->session->flashdata('success'); ?>
		</div>

	<?php  }else if($this->session->flashdata('error')){  ?>

	 <div class="alert bg-danger alert-dismissible">
		 <button type = "button" class="close" data-dismiss = "alert">&times;</button>
			<?php echo $this->session->flashdata('error'); ?>
	   </div>

	<?php } ?>

		<div class="col-sm-6">
		<h3 class="header-title text text-custom">
		<?php /*?>Purchased Package Details And Expenses<?php */?>
		Purchase Details
		</h3></div>
		<div class="col-sm-6">
		<div class="pull-right alert alert-info">
			<?php /*?>Available Balance: <?php echo $available_balance;?><?php */?>
			Available Travel Guides: <?php echo $available_balance;?>
		</div></div>
		<?php if(count($expense) > 0){?>
		
		<div class="col-sm-12 col-md-12 col-lg-12">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Date</th>
						<th>Name</th>
						<th>Price(INR)</th>
						<th>Quantity</th>
						<th>Invoice</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($expense as $value)
					{ 
					?>
					<tr>
					<td><?php echo date("l M j, Y",strtotime($value['purchsed_date']))?></td>
					<td><?php echo $value['package_name']?></td>
					<td><?php echo $value['package_price']?></td>
					<td><?php echo $p = $value['package_qty']?></td>
					<td><a href="<?php echo site_url('invoce-download').'/'.$value['orderid'];?>" ><i class="fa fa-download"></i> Invoice</a></td>
					</tr>

					<?php } ?>
				</tbody>
			</table>
		</div>
		<?php }else{?>
			
			<div class="col-sm-6">
			
			<div class="alert bg-info">
				Data Not Available
			</div>
			</div>
		<?php }?>
	</div>


	

</div>

<?php if(count($downloaded_travelGuides) > 0){?>

<div class="row card-box">
	<div class="col-sm-12">
		<h3 class="header-title text text-custom">Download Travel Guide</h3>
	</div>
	<div class="col-sm-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>City Name</th>
					<th>Date of Download</th>
					<th>Re-Download</th>
				</tr>
			</thead>
			<tbody>
		<?php foreach($downloaded_travelGuides as $DT){?>
			<tr>
				<td><?= $DT->city_name?></td>
				<td><?= date("l M j,Y",strtotime($DT->created_at));?></td>
				<td>
					<a href="<?php echo site_url('download-guide/'.md5($DT->city_id).'/1');?>" data-toggle="tooltip" title="Re-Download">
					<i class="fa fa-download"></i>&nbsp;Download Travel Guide
					</a>
				</td>
			</tr>
		<?php }?>
			</tbody>
		</table>
	</div>
</div>

<?php }?>

</div>
 <!-- container -->
