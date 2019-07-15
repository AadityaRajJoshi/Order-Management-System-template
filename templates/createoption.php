<script id="createoption" type="text/template">
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
                                  <h3 class="text-center title-2">Create Option</h3>
                                </div>
                                        <hr>
                                <form action="" method="post" novalidate="novalidate">
                                  <div class="form-group">
                                    <span class="Name">Name</span>
                                      <span class="label"><input type="text" class="form-control" placeholder="name" required></span>
                                  </div>

                                  <div class="form-group">
                                    <span class="Name">value</span>
                                    <span class="label"><input type="text" class="form-control" placeholder="value" required></span>
                                  </div>

                                  <div class="form-group">
                                    <span class="Name">User Name</span>
                                      <span class="label"><select class="form-control form-control-sm">
                                        <option>resturant</option>
                                        <option>company</option>
                                        <option>customer</option>
                                      </select></span>
                                  </div>

                                      <div>
                                        <button id="option-btn" type="submit" class="btn btn-lg btn-info btn-block">
                                            Create Option  
                                        </button>
                                      </div>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
 <?php include('footer.php') ?>
</script>