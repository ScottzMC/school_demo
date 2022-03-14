<!DOCTYPE HTML>
<html>
<head>
<title>Home || School Demo</title>
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
					<h2 class="title1">Schools</h2>

					<div class="table-responsive bs-example widget-shadow">
						<h4>List of Schools</h4>
						<table class="table table-bordered"> 
							<thead> 
								<tr>
									<th>#</th>
									<th>School</th> 
									<th>Address</th> 
									<th>County</th> 
									<th>City</th> 
									<th>Postcode</th>
									<th>Action</th>
									<th>Action</th>
									<th>Action</th> 
								</tr> 
							</thead>
												    
							<p id='cte'></p>
							<tbody> 
							<?php 
								$count = 0;
								if(!empty($school)){ foreach($school as $sch){ 
									$count++;
							?>
								<tr> 
									<td scope="row"><?= $count; ?></td> 
									<td><?= $sch['school_name']; ?></td> 
									<td><?= character_limiter($sch['address'], 50); ?></td> 
									<td><?= $sch['county']; ?></td> 
									<td><?= $sch['city']; ?></td> 
									<td><?= $sch['postcode']; ?></td>
									<td><a href="<?= site_url('school/detail/'.$sch['id']); ?>">View</a></td>
									<td><a href="<?= site_url('school/edit/'.$sch['id']); ?>">Edit</a></td>
									<td><button type="button" onclick="delete_school(<?= $sch['id']; ?>)" class="btn btn-danger">Delete</button></td> 
								</tr> 
							<?php } }else{ ?>
							<div class="alert alert-danger"><?php echo $error; ?></div>
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
        location.reload();
        $('#cte').html(data)
        });
      }
    }
   </script>

	<?php $this->load->view('menu/script'); ?>
   
</body>
</html>