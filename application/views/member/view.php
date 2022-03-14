
<!doctype html>
<html>
<head>
<title>Members || School</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php $this->load->view('menu/style'); ?>

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<?php $this->load->view('menu/nav'); ?>
	    <p id='cte'></p>

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Members</h2>

					<div class="table-responsive bs-example widget-shadow">
						<h4>List of Members</h4>

						<table class="table table-bordered"> 
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Name</th> 
									<th>Email Address</th> 
									<th>School</th> 
									<th>Created</th> 
									<th>Action</th>
									<th>Action</th> 
								</tr> 
							</thead> 

							<tbody> 
								<?php 
								$count = 0;
								if(!empty($member)){ foreach($member as $mem){ 
									$count++;
								?>
								<tr> 
									<td scope="row"><?php echo $count; ?></td> 
									<td><?php echo $mem['fullname']; ?></td> 
									<td><?php echo $mem['email']; ?></td> 
									<td><?php echo $mem['school_name']; ?></td> 
									<td><?php echo date("j M Y", strtotime($mem['created_at'])); ?></td> 
									<td><a href="<?php echo site_url('member/edit/'.$mem['id']); ?>">Edit</a></td>
									<td><button type="button" onclick="delete_member(<?php echo $mem['id']; ?>)" class="btn btn-danger">Delete</button></td>  
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
      function delete_member(id){
        var id = id;
        if(confirm("Are you sure you want to delete this member")){
        $.post('<?php echo base_url('member/delete_member'); ?>', {"id": id}, function(data){
          location.href="<?php echo site_url('member/view'); ?>";
          $('#cte').html(data)
          });
        }
      }
    </script>
    
	<?php $this->load->view('menu/script'); ?>

</body>
</html>