     
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<div class="page-container">
<!--============================           /content-inner         =============================-->

<!--============================           /sidebar-menu          =============================-->
    <div class="sidebar-menu">
    
        <header class="logo">
            <a href="#" class="sidebar-icon"> 
                <span class="fa fa-bars"></span> </a> <a href="<?php echo base_url(); ?>"> 
                <span id="logo"> 
                <h1>ADMIN</h1></span> 
       		</a> 
        </header>
    
        <div style="border-top:1px solid rgba(69, 74, 84, 0.7)">
        
        </div>
    	<!--==================        /down           ======================-->
    
        <div class="down">	
            <a href="<?php echo base_url(); ?>"><img src="images/admin.jpg"></a>
            <a href="<?php echo base_url(); ?>"><span class="name-caret">
			
			<?php 
				$usrname = $this->session->userdata('firstname').' '.$this->session->userdata('lastname');
				
				echo ucfirst($usrname);
			?>
            
			</span></a>
            <p>Administrator</p>
            
            <ul>
                <li><a class="tooltips" href="<?php echo base_url(); ?>admin/logout/"><span>Log out</span>
                <i class="lnr lnr-power-switch"></i></a></li>
            </ul>
        </div>
    <!--==================================       //down           =============================-->
        
        <div class="menu">
            
            <ul id="menu">
             
                <li id="menu-academico">
                    <a href="#">
                    	<i class="fa fa-table"></i> <span>Todo</span> 
                        <span class="fa fa-angle-right" style="float: right"></span>
                    </a>
                </li>
                
                <li>
                	<a href="<?php echo base_url(); ?>admin/logout/"><i class="lnr lnr-pencil"></i> <span>Logout</span></a>

                </li>
            
            </ul>
        
        </div>
    
    </div>

<div class="clearfix"></div>		

</div>
							
                            
 