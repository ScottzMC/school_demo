
<!doctype html>
<html>
<head>
<title>404 error</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php $this->load->view('menu/style'); ?>

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<?php $this->load->view('menu/nav'); ?>
	</div>

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1">404 Error Page</h3>
				<div class="error-page">
					<div class="">
						<h2>404</h2>
					</div>
					<div>
						<h3>
							<i class="fa fa-warning text-yellow"></i> 
							Oops! Page Not Found.
						</h3>
					</div>
					<p>We could not find the page you were looking for.</p>
				</div>
			</div>
		</div>
		
		<?php $this->load->view('menu/footer'); ?>
	</div>
	
	<?php $this->load->view('menu/script'); ?>

</body>
</html>