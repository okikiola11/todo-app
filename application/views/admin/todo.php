

<div class="page-container">

<!--====================================             /content-inner            ==================================-->
    <div class="left-content">
    
        <div class="inner-content">
        
        	<div class="outter-wp">
            	
                <div style="float:right; margin-top:25px; ">
                    <a href="<?php echo base_url(); ?>admin/patients/add/" type="button" class="btn-info btn-lg"> Add Todo </a>
                </div>
                
                <div style="clear:both;"></div>
                    
                 <?php
					
						if ($this->session->flashdata('message')):
					
					?>
                    
                    <div class="alert alert-info">
                    
                    	<a class="close" data-dimiss="alert">x
                        </a>
                        
                        <?php
							echo $this->session->flashdata('message');
						?>
                        
                    </div>
                
                <?php
					
					endif;
					
					if ($this->session->flashdata('error')):
				
				?>
                
                <div class="alert alert-info">
                    
                    <a class="close" data-dimiss="alert">x
                    </a>
                    
                    <?php
                        echo $this->session->flashdata('message');
                    ?>
                    
                </div>
                
                <?php
				
					endif;
				
				?>
                    
									
            	<div class="graph-visual tables-main">
                    
                    <h2 class="inner-tittle">Todo</h2>
                        
                      <div class="graph">
                        
                        <div class="tables">
                            
                            <table class="table"> 
                            	
                                <thead> 
                                	
                                    <tr> 
                                    	<th>ID</th> 
                                        <th>Todo</th>
                                        <th>Status</th>
                                        <th>Action</th> 
                                    </tr> 
                                </thead> 
                                
                                <tbody> 
                                	
                                    <?php
										
										if(!empty($todo))
										{
											
											foreach($todo as $todo_list) {
											?>
											
											<tr> <!--using dt-row so as to hide a deleted row -->
										   
												<td>
													<?php echo $todo_list['id']; ?> 
													<!--in bracket bcos its an array, returns result as an array-->
												</td>
												
												<td>
													
													<?php echo $todo_list['title']; ?>
													
												</td>
												 
												<td>
													<?php echo $todo_list['status']; ?>
												</td>
											   
												<td>
													<a href="<?php echo base_url('admin/todo/add/'.$todo_list['id']); ?>" 
													type="button" class="btn-xs btn-info">Edit</a>
													
													<span type="button" class="btn-xs btn-danger">Delete</span>
												</td>
											  
											</tr> 
											 
											 <?php 
											 
											}
										
										}else{
												
											echo '<tr>
												
												<td colspan="4" style="text-align:center;">
													
													No Record Found
													
												</td>
											
											</tr>';
											
										}
									?>           
                                </tbody>
                                 
                            </table> 
                        
                        </div>
                        
                	</div>
                                  
                </div>
                
                <!--==================                //graph-visual           =================================-->
            </div>
  
  		</div>
        
    </div>
    
</div>