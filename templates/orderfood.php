<script id="orderfood" type="text/template">
	<?php include('header.php') ?>

	<div style="background-image: url('images/icon/food.jpeg');" class="main-content">
	<div style="float: left; margin-left: 260px;" class="section__content section__content--p30">
		<div style="width:1100px;" class="container-fluid">
			<form>
			<div "class="row">
				<div  class="col-lg-12">
					<div  class="card">
						<div class="card-header">
						
						<h4>Order Food</h4>
						</div>
						<div class="card-body">
							<div class="custom-tab">
								<nav>
									<div class="nav nav-tabs" id="nav-tab" role="tablist">
										<a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#nonveg" role="tab" aria-controls="custom-nav-home"
													 aria-selected="true">Non-vegetarian</a>
										<a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#veg" role="tab" aria-controls="custom-nav-profile"
													 aria-selected="false">vegetarian</a>
										<a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#cold" role="tab" aria-controls="custom-nav-contact"
													 aria-selected="false">Cold Drinks</a>
										<button type="submit" class="btn btn-primary" id="orderFood" style="margin-left: 400px; width: 215px;">Order</button>
									</div>

									</nav>
										<div class="tab-content pl-3 pt-2" id="nav-tabContent">
											<div class="tab-pane fade show active" id="nonveg" role="tabpanel" aria-labelledby="custom-nav-home-tab">
												<div style="height: 300px;  float: left;" class="table-wrapper-scroll-y my-custom-scrollbar col-lg-9">
													
													
										           	<table class="table table-dark table-data3" id="myTable">
										              <thead>
										                <tr>

										              
										                <th scope="col">Name</th>
										                <th scope="col">Category</th>
										                <th scope="col">Quantity</th>
										                <th scope="col">Price</th>
										                <th scope="col">Check</th>
										                <th scope="col">Tax</th>
										                </tr>
										              </thead>
										              <tbody>

										                <tr>

										              	{{#each mydata}}
										              	
										                <td id= "row1">{{item}}</td>
										              
										                <td id = "row2">{{category}}</td>
										                	
										                <td id= "row3"><input type ="textbox" name="quantity" id="qun"></td>
										                <td id= "row4">{{price}}</td>
										                <td id = "row4"><input type="checkbox" class="mycheckbox" id="myCheck" value={{price}} data-id={{id}} ></td>
										                <td id="row5">13%</td>
										                </tr>
										                 	 {{/each}}
										            </tbody>
										            </table>
										          </div>
										          <div style="height: 300px;  color: black; float: right;" class="table-wrapper-scroll-y my-custom-scrollbar col-lg-3">
										          	<table class="table table-dark table-data3">
										              <thead>
										                <tr>
										                	<th scope="col">Total Price</th>
										            	</tr>
										        		</thead>
										        		<tbody>
										                <tr>
										                <td id="p"></td>
										            	</tr>
										        		</tbody>

										    		</table>
										           

										          
										          	<div>
										          		{{#each data}}
										              <p> remark: {{remark}}  </p>
										              <p> status: {{status}}  </p>
										              <p class="restro">{{id}}  </p>
										              <p class="restro" id="restid"> {{company_id}}  </p>
										          		{{/each}}

										    		</div>
										           </div>


										        </div>

												<div class="tab-pane fade" id="veg" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
													<div style="height: 300px; float: left;" class="table-wrapper-scroll-y my-custom-scrollbar col-lg-9">
										            <table class="table table-dark table-data3">
										              <thead>
										                <tr>
										                <th scope="col">SN</th>
										                <th scope="col">Name</th>
										                <th scope="col">Quatnity</th>
										                <th scope="col">check</th>
										                <th scope="col">Price</th>
										                <th scope="col">Tax</th>
										                
										                
										                </tr>
										              </thead>
										              <tbody>
										                <tr>
										                <th>1</th>
										                <td>Mark</td>
										                <td>Otto</td>
										                <td><input type="checkbox" class="form-check-input"></td>
										                <td>hawa</td>
										                <td>hawa</td>
										                
										               

										                </tr>
										                <tr>
										                <th scope="row">2</th>
										                <td>Mark</td>
										                <td>Otto</td>
										                <td>demo</td>
										                <td>hawa</td>
										                

										                </tr>
										                <tr>
										                <th scope="row">3</th>
										                <td>Mark</td>
										                <td>Otto</td>
										                <td>demo</td>
										                <td>hawa</td>
										               

										                </tr>
										                <tr>
										                <th scope="row">4</th>
										                <td>Mark</td>
										                <td>Otto</td>
										                <td>demo</td>
										                <td>hawa</td>
										             

										                </tr>
										                <tr>
										                <th scope="row">5</th>
										                <td>Mark</td>
										                <td>Otto</td>
										                <td>demo</td>
										                <td>hawa</td>
										            

										                </tr>
										                <tr>
										                <th scope="row">6</th>
										                <td>Mark</td>
										                <td>Otto</td>
										                <td>demo</td>
										                <td>hawa</td>
										              

										                </tr>
										                <tr>
										                <th scope="row">7</th>
										                <td>Mark</td>
										                <td>Otto</td>
										                <td>demo</td>
										                <td>hawa</td>
										              

										                </tr>
										                <tr>
										                <th scope="row">8</th>
										                <td>Mark</td>
										                <td>Otto</td>
										                <td>demo</td>
										                <td>hawa</td>
										               
										                </tr>
										              </tbody>
										            </table>
										          </div>
										             <div style="height: 300px;  color: black; float: right;" class="table-wrapper-scroll-y my-custom-scrollbar col-lg-3">
										          	<table class="table table-dark table-data3">
										              <thead>
										                <tr>
										                	<th scope="col">Total Price</th>
										            	</tr>
										        		</thead>
										        		<tbody>
										                <tr>
										                <td><input type="text" name="totalprice" readonly></td>
										        		</tbody>
										    		</table>
										           </div>
												</div>


												<div class="tab-pane fade" id="cold" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
													<div style="height: 300px; float: left;" class="table-wrapper-scroll-y my-custom-scrollbar col-lg-9">
										            <table class="table table-dark table-data3">
										              <thead>
										                <tr>
										                <th scope="col">SN</th>
										                <th scope="col">Name</th>
										                <th scope="col">Quanity</th>
										                <th scope="col">Check</th>
										                <th scope="col">Price</th>
										                <th scope="col">Tax</th>
										              
										                
										                </tr>
										              </thead>
										              <tbody>
										                <tr>
										                <th>1</th>
										                <td>Mark</td>
										                <td>Otto</td>
										                <td><input type="checkbox" class="form-check-input"></td>
										                <td>hawa</td>
										                <td>hawa</td>
										                
										                </tr>

										                <tr>
										                <th scope="row">2</th>
										                <td>Mark</td>
										                <td>Otto</td>
										                <td>demo</td>
										                <td>hawa</td>
										                </tr>

										                <tr>
										                <th scope="row">3</th>
										                <td>Mark</td>
										                <td>Otto</td>
										                <td>demo</td>
										                <td>hawa</td>
										                </tr>

										                <tr>
										                <th scope="row">4</th>
										                <td>Mark</td>
										                <td>Otto</td>
										                <td>demo</td>
										                <td>hawa</td>
										                </tr>

										                <tr>
										                <th scope="row">5</th>
										                <td>Mark</td>
										                <td>Otto</td>
										                <td>demo</td>
										                <td>hawa</td>
										                </tr>

										                <tr>
										                <th scope="row">6</th>
										                <td>Mark</td>
										                <td>Otto</td>
										                <td>demo</td>
										                <td>hawa</td>
										                </tr>

										                <tr>
										                <th scope="row">7</th>
										                <td>Mark</td>
										                <td>Otto</td>
										                <td>demo</td>
										                <td>hawa</td>
										                </tr>

										                <tr>
										                <th scope="row">8</th>
										                <td>Mark</td>
										                <td>Otto</td>
										                <td>demo</td>
										                <td>hawa</td>
										                </tr>

										              </tbody>
										       </table>
										  </div>
										   <div style="height: 300px;   color: black; float: right;" class="table-wrapper-scroll-y my-custom-scrollbar col-lg-3">
										          	<table class="table table-dark table-data3">
										              <thead>
										                <tr>
										                	<th scope="col"></th>
										            	</tr>
										        		</thead>
										        		<tbody>
										                <tr>
										                <td><input type="text" name="totalprice" readonly></td>
										        		</tbody>
										    		</table>
										           </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- /# column -->
			</div>
		</form>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>
</script>