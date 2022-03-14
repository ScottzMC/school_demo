<!doctype html>
<html>
<head>
<?php foreach($school as $sch){} ?>
<title><?= $sch['school_name']; ?> || School</title>
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
			<div class="tables">
				<div class="table-responsive bs-example widget-shadow">
					<h4 class="margin-h4"><?= $sch['school_name']; ?></h4>
					<table class="table table-bordered"> 
						<thead> 
							<tr> 
								<th>Address</th> 
								<th>County</th> 
								<th>City</th> 
								<th>Postcode</th>
								<th>Action</th>
								<th>Action</th> 
							</tr> 
						</thead> 

						<tbody> 
						<?php if(!empty($school)){ foreach($school as $sch){ ?>
							<tr> 
								<td><?= $sch['address']; ?></td> 
								<td><?= $sch['county']; ?></td> 
								<td><?= $sch['city']; ?></td> 
								<td><?= $sch['postcode']; ?></td>
								<td><a href="<?= site_url('school/edit/'.$sch['id']); ?>">Edit</a></td>
								<td><button type="button" onclick="delete_school(<?= $sch['id']; ?>)" class="btn btn-danger">Delete</button></td> 
							</tr> 
						<?php } }else{ ?>
							<div class="alert alert-danger"><?= $error; ?></div>
							<?php } ?>
						</tbody> 

					</table>

				</div>

				<div class="table-responsive bs-example widget-shadow">
					<h4>List of Members</h4>
					<table class="table table-bordered"> 
						<thead> 
							<tr> 
								<th>Full Name</th> 
								<th>Email Address</th> 
								<th>Created At</th> 
								<th>Action</th>
								<th>Action</th> 
							</tr> 
						</thead> 
						<p id='cte'></p>
						<tbody> 
						<?php 
							if(!empty($member)){ foreach($member as $mem){ 
						?>
							<tr> 
								<td><?= $mem['fullname']; ?></td> 
								<td><?= $mem['email']; ?></td> 
								<td><?= date("j M Y", strtotime($mem['created_at'])); ?></td> 
								<td><a href="<?= site_url('member/edit/'.$mem['id']); ?>">Edit</a></td>
								<td><button type="button" onclick="delete_member(<?= $mem['id']; ?>)" class="btn btn-danger">Delete</button></td> 
							</tr> 
						<?php } }else{ ?>
						<div class="alert alert-danger"><?= $error; ?></div>
						<?php } ?>
						</tbody> 

					</table>

				</div>
			</div>
		</div>
	</div>
		
		<?php $this->load->view('menu/footer'); ?>
	</div>
	
	<script>
    function delete_school(id){
      var id = id;
      if(confirm("Are you sure you want to delete this school")){
      $.post('<?php echo base_url('school/delete_school'); ?>', {"id": id}, function(data){
        location.href="<?php echo site_url('school/view'); ?>";
        $('#cte').html(data)
        });
      }
    }

    function delete_member(id){
      var id = id;
      if(confirm("Are you sure you want to delete this member")){
      $.post('<?php echo base_url('school/delete_member'); ?>', {"id": id}, function(data){
        location.reload();
        $('#cte').html(data)
        });
      }
    }
  </script>
    
	<?php $this->load->view('menu/script'); ?>

</body>
</html>