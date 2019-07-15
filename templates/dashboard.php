<script id="dashboard" type="text/template">
 <?php include('header.php') ?>
	<div style="background-image: url('images/icon/food.jpeg');" class="main-content">
		<div  class="section__content section__content--p30">
			<div  class="container-fluid">
				<div class="row">
				 

	               {{#if isCompany}}
	                <div class="col-lg-12">
	                	<div class="au-card au-card--no-shadow au-card--no-pad m-b-40" style="width:700px;">
	                    	<div class="au-card-title" style="background-image:url('images/icon/login.jpg');">
	                        	<div class="bg-overlay bg-overlay--blue">
	                        		
	                        	</div>
	                    	</div>
	                    	 <div class="au-task js-list-load">
	                       		 <div class="au-task-list js-scrollbar3">
	                            <div class="au-task__item au-task__item--danger">
	                                <div class="au-task__item-inner">
	                                   <table id="foodtable" class="table table-dark table-data3">
	                                                 <thead>
	                                                   <tr>
	                                                   <th scope="col">Food</th>
	                                                   <th scope="col">Category</th>
	                                                   <th scope="col">Quantity</th>
	                                                   <th scope="col">Total Price</th>
	                                                   <th scope="col">Ordered_by</th>
	                                                  
	                                                   </tr>
	                                                 </thead>
	                                                 <tbody>
	                                                   {{#each food}}
	                                                   <tr>
	                                                   <th>{{item}}</th>
	                                                   <td>{{category}}</td>
	                                                   <td>{{qty}}</td>
	                                                   <td>{{total_price}}</td>
	                                                   <td>{{ordered_by}}</td>
	                                                   
	                                                   </tr>
	                                                   {{/each}}
	                                                   
	                                                 </tbody>
	                                               </table>
	                                    
	                                </div>
	                            </div>
	                            </div>
	                            </div>
	                   
	                          
	                        </div>
	                    </div>
	                    {{else}}
	                    <div class="col-lg-6">
	                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
	                    <div class="au-card-title" style="background-image:url('images/icon/login.jpg');">
	                        <div class="bg-overlay bg-overlay--blue"></div>
	                        <h3>
	                        	
	                            <i class="zmdi zmdi-account-calendar"></i>26 April, 2018</h3>
	                        	
	                    </div>
	                    <div class="au-task js-list-load">
	                        <div class="au-task-list js-scrollbar3">
	                            <div class="au-task__item au-task__item--danger">
	                                <div class="au-task__item-inner">
	                                    <h5 class="task">
	                                        <a href="#" id="not"></a>
	                                    </h5>
	                                    {{#each data}}
	                                    <span class="time">{{created_date}}</span>
	                                    {{/each}}
	                                </div>
	                            </div>
	                            <div class="au-task__item au-task__item--warning">
	                                <div class="au-task__item-inner">
	                                    <h5 class="task">
	                                        <a href="#">Create new task for Dashboard</a>
	                                    </h5>
	                                    <span class="time">11:00 AM</span>
	                                </div>
	                            </div>
	                            <div class="au-task__item au-task__item--primary">
	                                <div class="au-task__item-inner">
	                                    <h5 class="task">
	                                        <a href="#">Meeting about plan for Admin Template 2018</a>
	                                    </h5>
	                                    <span class="time">02:00 PM</span>
	                                </div>
	                            </div>
	                            <div class="au-task__item au-task__item--success">
	                                <div class="au-task__item-inner">
	                                    <h5 class="task">
	                                        <a href="#">Create new task for Dashboard</a>
	                                    </h5>
	                                    <span class="time">03:30 PM</span>
	                                </div>
	                            </div>
	                            <div class="au-task__item au-task__item--danger js-load-item">
	                                <div class="au-task__item-inner">
	                                    <h5 class="task">
	                                        <a href="#">Meeting about plan for Admin Template 2018</a>
	                                    </h5>
	                                    <span class="time">10:00 AM</span>
	                                </div>
	                            </div>
	                            <div class="au-task__item au-task__item--warning js-load-item">
	                                <div class="au-task__item-inner">
	                                    <h5 class="task">
	                                        <a href="#">Create new task for Dashboard</a>
	                                    </h5>
	                                    <span class="time">11:00 AM</span>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	               </div>
	                    {{/if}}

	                </div>
	               </div>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php') ?>
</script>