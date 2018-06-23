
<div class="left-content">
	
    <div class="inner-content">
	<!--===========    footer section start   ==============-->
    
        <footer>
            <p>All Rights Reserved </a></p>
        </footer>
	
    <!--===========    //footer section end   ===========-->
	</div>

</div>

<script>
	var toggle = true;
	
	$(".sidebar-icon").click(function() 
	{                
		if (toggle)
		{
			$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
			$("#menu span").css({"position":"absolute"});
		}
		
		else
		{
			$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
			setTimeout(function() {
			$("#menu span").css({"position":"relative"});
		}, 400);
		}
	
		toggle = !toggle;
	});
</script>

<!--=================================           js          =======================================-->
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/augmt-templat/css/vroom.css">
<!--<script type="text/javascript" src="<?php echo base_url(); ?>asset/admin/augmt-templat/js/vroom.js"></script>
--><script type="text/javascript" src="<?php echo base_url(); ?>asset/admin/augmt-templat/js/TweenLite.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/admin/augmt-templat/js/CSSPlugin.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/admin/augmt-templat/js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/admin/augmt-templat/js/scripts.js"></script>

<!--================================   Bootstrap Core JavaScript     ==============================-->
<script type="text/javascript" src="<?php echo base_url(); ?>asset/admin/augmt-templat/js/bootstrap.min.js"></script>


</body>
</html>