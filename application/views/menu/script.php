<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- side nav js -->
<script src="<?php echo base_url('js/sidebar-nav.min.js'); ?>" type='text/javascript'></script>
<script>
    $('.sidebar-menu').SidebarNav()
  </script>
<!-- //side nav js -->

<!-- Classie --><!-- for toggle left push menu script -->
	<script src="<?php echo base_url('js/classie.js'); ?>"></script>
	<script>
		var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
			showLeftPush = document.getElementById( 'showLeftPush' ),
			body = document.body;
			
		showLeftPush.onclick = function() {
			classie.toggle( this, 'active' );
			classie.toggle( body, 'cbp-spmenu-push-toright' );
			classie.toggle( menuLeft, 'cbp-spmenu-open' );
			disableOther( 'showLeftPush' );
		};
		
		function disableOther( button ) {
			if( button !== 'showLeftPush' ) {
				classie.toggle( showLeftPush, 'disabled' );
			}
		}
	</script>
<!-- //Classie --><!-- //for toggle left push menu script -->

<!-- Bootstrap Core JavaScript -->
 <script src="<?php echo base_url('js/bootstrap.js'); ?>"> </script>