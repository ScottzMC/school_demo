<!--left-fixed -navigation-->
<aside class="sidebar-left">
  <nav class="navbar navbar-inverse">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <h1><a class="navbar-brand" href="<?php echo site_url('school/view'); ?>">Scott Nnaghor</a></h1>
  </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>School</span>
        <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('school/add'); ?>"><i class="fa fa-angle-right"></i> Add Schools</a></li>
          <li><a href="<?php echo site_url('school/view'); ?>"><i class="fa fa-angle-right"></i> View Schools</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Member</span>
        <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('member/add'); ?>"><i class="fa fa-angle-right"></i> Add Member</a></li>
          <li><a href="<?php echo site_url('member/view'); ?>"><i class="fa fa-angle-right"></i> View Members</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <!-- /.navbar-collapse -->
</nav>
</aside>
</div>
<!--left-fixed -navigation-->

<!-- header-starts -->
<div class="sticky-header header-section ">
  <div class="header-left">
    
    <!--toggle button start-->
    <button id="showLeftPush"><i class="fa fa-bars"></i></button>
    <!--toggle button end-->
    
    <!--notification menu end -->
    <div class="clearfix"> </div>
  </div>
  <div class="header-right">
    
    <div class="profile_details">   
      <ul>
        <li class="dropdown profile_details_drop">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <div class="profile_img"> 
              <div class="user-name">
                <p>Scott Nnaghor</p>
                <span>Administrator</span>
              </div>  
            </div>  
          </a>
        </li>
      </ul>
    </div>
    <div class="clearfix"> </div>       
  </div>
  <div class="clearfix"> </div> 
</div>
<!-- //header-ends -->