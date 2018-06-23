     
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
                <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> 
                <h1>ADMIN</h1></span> 
        <!--<img id="logo" src="" alt="Logo"/>--> 
        	</a> 
        </header>
    
        <div style="border-top:1px solid rgba(69, 74, 84, 0.7)">
        </div>
    <!--=======================              /down                 ============================-->
    
        <div class="down">	
            <a href="index.html"><img src="images/admin.jpg"></a>
            <a href="index.html"><span class="name-caret">Jasmin Leo</span></a>
            <p>System Administrator in Company</p>
            
            <ul>
                <li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
                <li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
                <li><a class="tooltips" href="<?php echo base_url(); ?>admin/logout/"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
            </ul>
        </div>
    <!--==================================       //down           =============================-->
        
        <div class="menu">
            
            <ul id="menu">
               
                <li>
                	<a href="<?php echo base_url(); ?>admin/dashboard/">
                    	<i class="fa fa-tachometer"></i> <span>Dashboard</span>
                    </a>
                </li>
                
                <li id="menu-academico">
                    <a href="#">
                    	<i class="fa fa-table"></i> <span> Records</span> 
                        <span class="fa fa-angle-right" style="float: right"></span>
                    </a>
                
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-boletim"><a href="widget.html">Patient Charts</a></li>
                        <li id="menu-academico-boletim"><a href="<?php echo base_url(); ?>admin/consultation/">Consultations</a></li>
                        <li id="menu-academico-boletim"><a href="<?php echo base_url(); ?>admin/activities/">Activities</a></li>
                        <li id="menu-academico-avaliacoes"><a href="<?php echo base_url(); ?>admin/patients/"> Patients</a></li>
                        <li id="menu-academico-boletim"><a href="widget.html">Inpatient</a></li>
                        <li id="menu-academico-boletim"><a href="widget.html">Bed Calendar</a></li>
                        <li id="menu-academico-boletim"><a href="widget.html">Calendar</a></li>
                        <li id="menu-academico-avaliacoes"><a href="tabs.html">Resources</a></li>
                    </ul>
                
                </li>
                
                <li id="menu-academico">
                	<a href="<?php echo base_url(); ?>admin/laboratory/">
                    	<i class="fa fa-file-text-o"></i> <span>Laboratory</span> 
                    	<span class="fa fa-angle-right" style="float: right"></span>
                    </a>
                </li>
                
                <li id="menu-academico">
                	<a href="typography.html"><i class="lnr lnr-pencil"></i> <span>Imaging</span></a>
                    
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-avaliacoes"><a href="forms.html">Forms</a></li>
                        <li id="menu-academico-boletim"><a href="validation.html">Validation Forms</a></li>
                    </ul>
                </li>
                
                <li id="menu-academico">
                    <a href="<?php echo base_url(); ?>admin/history/">
                    	<i class="lnr lnr-book"></i> 
                        <span>History</span> <span class="fa fa-angle-right" style="float: right"></span>
                    </a>
                
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-avaliacoes"><a href="<?php echo base_url(); ?>admin/history/">Medical History</a></li>
                        <li id="menu-academico-boletim"><a href="register.html">Social History</a></li>
                        <li id="menu-academico-boletim"><a href="404.html">Faminly History</a></li>
                    </ul>
                </li>
                
                <li>
                	<a href="<?php echo base_url(); ?>admin/users/"><i class="lnr lnr-pencil"></i> <span>Staffs</span></a>
                    
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-avaliacoes"><a href="<?php echo base_url(); ?>admin/users/">Users</a></li>
                        <li id="menu-academico-boletim"><a href="<?php echo base_url(); ?>admin/department/">Department</a></li>
                        <li id="menu-academico-boletim"><a href="<?php echo base_url(); ?>admin/view-users-category/">Users Category</a></li>
                    </ul>
                </li>
                
                <li><a href="typography.html"><i class="lnr lnr-pencil"></i> <span>Pharmacy</span></a></li>
                
                <li id="menu-academico"><a href="#"><i class="lnr lnr-book"></i> <span>Billing</span> <span class="fa fa-angle-right" style="float: right"></span></a></li>
                
                <li>
                    <a href="#">
                    	<i class="lnr lnr-envelope"></i> 
                        <span>Billing</span><span class="fa fa-angle-right" style="float: right"></span>
                    </a>
                   
                    <ul>
                        <li><a href="inbox.html"><i class="fa fa-inbox"></i> Dashboard</a></li>
                        <li><a href="compose.html"><i class="fa fa-pencil-square-o"></i> Patients</a></li>
                        <li><a href="editor.html"><span class="lnr lnr-highlight"></span> Copayers</a></li>
                        <li><a href="editor.html"><span class="lnr lnr-highlight"></span> Invoices</a></li>
                        <li><a href="editor.html"><span class="lnr lnr-highlight"></span> Receipts</a></li>
                        <li><a href="editor.html"><span class="lnr lnr-highlight"></span> Special Offers</a></li>
                    </ul>
                </li>
                
                <li id="menu-academico">
                    <a href="#">
                    	<i class="lnr lnr-layers"></i> 
                    	<span>Company</span> <span class="fa fa-angle-right" style="float: right"></span>
                    </a>
                    
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-avaliacoes"><a href="grids.html">Location</a></li>
                        <li id="menu-academico-boletim" ><a href="media.html">Company</a></li>
                        <li id="menu-academico-boletim" ><a href="media.html">Items</a></li>
                        <li id="menu-academico-boletim" ><a href="media.html">Prepaid Items</a></li>
                        <li id="menu-academico-boletim" ><a href="media.html">Transfers</a></li>
                        <li id="menu-academico-boletim" ><a href="media.html">Recipes</a></li>
                        <li id="menu-academico-boletim" ><a href="media.html">Bills of Payment</a></li>
                    </ul>
                </li>
                
                <!--<li>
                	<a href="chart.html"><i class="lnr lnr-chart-bars"></i> 
                    	<span>Repots</span> <span class="fa fa-angle-right" style="float: right"></span>
                    </a>
                
                    <ul>
                        <li><a href="map.html"><i class="lnr lnr-map"></i> Maps</a></li>
                        <li><a href="graph.html"><i class="lnr lnr-apartment"></i> Graph Visualization</a></li>
                    </ul>
                </li>-->
                
                
            
            </ul>
        
        </div>
    
    </div>

<div class="clearfix"></div>		

</div>
							
                            
 