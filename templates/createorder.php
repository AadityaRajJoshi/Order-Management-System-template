<script id="createorder" type="text/template">
	<?php include('header.php') ?>
	<div style="background-image: url('images/icon/food.jpeg');" class="main-content">
    <div  class="section__content section__content--p30">
        <div  class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                     
                       <div class="card-header">Order Management System</div>
                          <div class="card-body">
                              <div class="card-title">
                                  <h3 class="text-center title-2">Create Order</h3>
                                </div>
                                        <hr>
                                <form action="" method="post" novalidate="novalidate">
                                                          
                                   <div class="form-group">
                                    <span class="Name">Resturant Name</span>
                                    <span class="label"><select class="form-control form-control-sm" id="MyRestaurant">
                                      {{#each mydata}}
                                     <option value={{id}}>{{username}}</option>
                                      {{/each}}
                                    </select></span>
                                  </div>

                                  <div class="form-group">
                                    <span class="Name">Remarks</span>
                                    <span class="label"><input type="text" class="form-control" placeholder="Remark" name="remarks" required></span>
                                  </div>

                                  <div class="form-group">
                                    <span class="Name">Lock</span>
                                    <span class="label"><input type="text" class="form-control" placeholder="Lock" name="lock" required></span>
                                  </div>

                                  <div class="form-group">
                                    <span class="Name">Status</span>
                                    <span class="label"><input type="text" class="form-control" placeholder="status" name="status" required></span>
                                  </div>

                                      <div>
                                        <button id="order-btn" type="submit" class="btn btn-lg btn-info btn-block">
                                            Create Order  
                                        </button>
                                      </div>
                                  </form>
                                  <div id ="orderCreate">
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
<?php include('footer.php') ?>
</script>