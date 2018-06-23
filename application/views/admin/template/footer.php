<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2017 Steven's Hospital. All Rights Reserved </p>
</div>	
<!--copy rights end here-->
<!-- js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/admin/js/jquery-2.1.4.min.js"></script>

	<!-- /amcharts -->
<script src="<?php echo base_url(); ?>asset/admin/js/amcharts.js"></script>
<script src="<?php echo base_url(); ?>asset/admin/js/serial.js"></script>
<script src="<?php echo base_url(); ?>asset/admin/js/export.js"></script>	
<script src="<?php echo base_url(); ?>asset/admin/js/light.js"></script>
				<!-- Chart code -->
	 
	<!-- //amcharts -->
<script src="<?php echo base_url(); ?>asset/admin/js/chart1.js"></script>
<script src="<?php echo base_url(); ?>asset/admin/js/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>asset/admin/js/modernizr.custom.js"></script>

<script src="<?php echo base_url(); ?>asset/admin/js/classie.js"></script>
<script src="<?php echo base_url(); ?>asset/admin/js/gnmenu.js"></script>

<script>
	new gnMenu( document.getElementById( 'gn-menu' ) );
</script>
			
            <!-- script-for-menu -->

<!-- /circle-->

	<!-- //circle -->
	<!--skycons-icons-->
<script src="<?php echo base_url(); ?>asset/admin/js/skycons.js"></script>
	<script>
		var icons = new Skycons({"color": "#fcb216"}),
		  list  = [
			"partly-cloudy-day"
		  ],
		  i;
		
		for(i = list.length; i--; )
		icons.set(list[i], list[i]);
		icons.play();
    </script>
    
	<script>
		var icons = new Skycons({"color": "#fff"}),
		  list  = [
			"clear-night","partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind","fog"
		  ],
		  i;
		
		for(i = list.length; i--; )
		icons.set(list[i], list[i]);
		icons.play();
    </script>
<!--//skycons-icons-->
<!-- //js -->
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
<script src="<?php echo base_url(); ?>asset/admin/js/bars.js"></script>
<script src="<?php echo base_url(); ?>asset/admin/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>asset/admin/js/scripts.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>asset/admin/js/bootstrap-3.1.1.min.js"></script>


</body>
</html>