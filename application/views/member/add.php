<!doctype html>
<html>
<head>
<title>Add Members || School</title>
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
							<h3 class="h3-title">Add Member</h3>
							<form class="form-horizontal" action="<?php echo base_url('member/add'); ?>" method="post" enctype="multipart">
								<div class="form-group">
									<label class="col-sm-2 control-label">School</label>
									<div class="col-sm-8">
										<select name="school_id" class="form-control1">
											<option value="empty">Select</option>
											<?php if(!empty($school)){ foreach($school as $sch){ ?>
											<option value="<?php echo $sch['id']; ?>"><?php echo $sch['school_name']; ?></option>
											<?php } } ?>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Full Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="fullname" placeholder="Full Name">
										<span class="text-danger" style="color: red;"><?php echo form_error('fullname'); ?></span>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Email Address</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="email" placeholder="Email Address">
										<span class="text-danger" style="color: red;"><?php echo form_error('email'); ?></span>
									</div>
								</div>

								<div class="col-sm-offset-2"> 
									<button type="submit" name="add" class="btn btn-success">Create</button> 
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
