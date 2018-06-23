<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Admin Login</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />

<script type="application/x-javascript"> 
	addEventListener("load", function() 
	{ 
		setTimeout(hideURLbar, 0); 
	}, false);
	
	function hideURLbar()
	{ 
		window.scrollTo(0,1); 
	} 
</script>

<!--========================================== //custom-theme ================================================-->
<link href="<?php echo base_url(); ?>asset/admin/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>asset/admin/css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>asset/admin/css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>asset/admin/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!----======================================font-awesome-icons ===============================================-->
<link href="<?php echo base_url(); ?>asset/admin/css/font-awesome.css" rel="stylesheet"> 
<!--===================================== //font-awesome-icons ===============================================-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

</head>


<body>
	<!--============================== banner ================================================-->
    
    <div class="wthree_agile_admin_info">
    <!--============================== /w3_agileits_top_na====================================-->
    <!--================================== /nav===============================================-->
        
        <div class="w3_agileits_top_nav">
        
            <ul id="gn-menu" class="gn-menu-main">
            
    <!--================================= //nav_agile_w3l ====================================-->
                <li class="second logo admin">
                
                    <h1>
                    
                        <a href="main-page.html">
                        	<i class="fa fa-graduation-cap" aria-hidden="true"></i>Admin Login
                        </a>
                    
                    </h1>
                
                </li>
            
            </ul>
        <!--================================ //nav ==========================================-->
        
        </div>

    <div class="clearfix"></div>
    <!--================================  //w3_agileits_top_nav==============================-->
    
    <!--================================  /inner_content=====================================-->
        <div class="inner_content">
        <!--======================== /inner_content_w3_agile_info============================-->
            <div class="inner_content_w3_agile_info">
            
                <div class="registration admin_agile">
                
                    <div class="signin-form profile admin">
                    
                    	<h2>Admin Login</h2>
                        
                        <div class="login-form">
                        
                            <form action="<?php echo base_url(); ?>admin/validate-admin/" method="post">
                            
                                <input type="text" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username" required>
                                
                                <input type="password" name="password" placeholder="Password" required>
                                
                                <div class="tp">
                                	<input type="submit" value="LOGIN">
                                </div>
                            
                            </form>
                        
                        </div>
                        
                        
                        <div class="login-social-grids admin_w3">
                            <ul>
                                <li>
                                	<a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                
                                <li>
                                	<a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                
                                <li>
                                	<a href="#"><i class="fa fa-rss"></i></a>
                                </li>
                            </ul>
                        </div>
                    
                    <h6><a href="<?php echo base_url(); ?>site">Back To Home</a><h6>
                    
                   <?php 
						echo validation_errors();
						
						if(!empty($this->session->userdata('error_mssg_display'))) //set session inorder to display error msg, mke sure to unset session so as not to clash wen u uae again
						{
							echo '<div class="alert alert-danger">
							<a class="close" data-dismiss="alert">x</a>'.$this->session->userdata('error_mssg_display').'</div>';
							
							$this->session->unset_userdata('error_mssg_display');
						} 
					
				   ?>
                    
              	</div>
                    
            
            
            </div>
        <!--================================  //inner_content_w3_agile_info========================= -->
        </div>
    <!--======================================= //inner_content======================================-->
    </div>
    <!--========================================= banner ============================================-->

    <!--================================ copy rights start here======================================-->
    <div class="copyrights">
	    <p>
        	© 2017 Hospital Management System. All Rights Reserved 
        </p>
    </div>	
<!--================================ copy rights end here===========================================-->
<!--====================================== js ======================================================-->

<script type="text/javascript" src="<?php echo base_url(); ?>asset/admin/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url(); ?>asset/admin/js/modernizr.custom.js"></script>

<script src="<?php echo base_url(); ?>asset/admin/js/classie.js"></script>
<script src="<?php echo base_url(); ?>asset/admin/js/gnmenu.js"></script>

<script>
	new gnMenu( document.getElementById( 'gn-menu' ) );
</script>

<script src="<?php echo base_url(); ?>asset/admin/js/screenfull.js"></script>

<script>
	$(function () {
		$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
		
		if (!screenfull.enabled) {
			return false;
		}
	
		$('#toggle').click(function () {
			screenfull.toggle($('#container')[0]);
		});	
	});
</script>

<script src="<?php echo base_url(); ?>asset/admin/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>asset/admin/js/scripts.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>asset/admin/js/bootstrap-3.1.1.min.js"></script>


</body>
</html>