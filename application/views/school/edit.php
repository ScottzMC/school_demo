<!doctype html>
<html>
<head>
<?php foreach($school as $sch){} ?>
<title>Edit <?= $sch['school_name']; ?> || School</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php $this->load->view('menu/style'); ?>

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<?php $this->load->view('menu/nav'); ?>		

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<div class="form-three widget-shadow">
							<h3 class="h3-title">Edit <?= $sch['school_name']; ?> School</h3>
							<form class="form-horizontal" action="<?= base_url('school/edit/'.$sch['id']); ?>" method="post" enctype="multipart">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">School</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="school_name" placeholder="School" value="<?= $sch['school_name']; ?>">
										<span class="text-danger" style="color: red;"><?= form_error('school_name'); ?></span>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Address</label>
									<div class="col-sm-8">
										<textarea class="form-control" name="address" placeholder="Address"><?= $sch['address']; ?></textarea>
										<span class="text-danger" style="color: red;"><?= form_error('address'); ?></span>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">County</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="county" placeholder="County" value="<?= $sch['county']; ?>">
										<span class="text-danger" style="color: red;"><?= form_error('county'); ?></span>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">City</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="city" placeholder="City" value="<?= $sch['city']; ?>">
										<span class="text-danger" style="color: red;"><?= form_error('city'); ?></span>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Postcode</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="postcode" placeholder="Postcode" value="<?= $sch['postcode']; ?>">
										<span class="text-danger" style="color: red;"><?= form_error('postcode'); ?></span>
									</div>
								</div>						

								<div class="col-sm-offset-2"> 
									<button type="submit" name="edit" class="btn btn-success">Update</button> 
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<?php $this->load->view('menu/footer'); ?>
	</div>
	
	<?php $this->load->view('menu/script'); ?>
   
</body>
</html>