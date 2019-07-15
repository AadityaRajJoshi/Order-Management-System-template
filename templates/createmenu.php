<script  id = "createmenu" type="text/template">
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
                                  <h3 class="text-center title-2">Create Menu</h3>
                                </div>
                                        <hr>
                                 <form action="" method="post" novalidate="novalidate">
                                     
                                      <div class="form-group">
                                          <span class="Name">Item Name</span>
                                            <span class="label"><select class="form-control form-control-sm" id="myItem">
                                              {{#each mydata}} 
                                             <option value={{id}}>{{name}}</option>
                                              {{/each}}
                                            </select></span>
                                        </div>




                                     <div class="form-group">
                                        <span class="Name">Category</span>
                                          <span class="label">
                                              <select class="form-control form-control-sm" id="myCategory">
                                              {{#each data}} 
                                                <option value = {{id}} >{{name}}</option>
                                              {{/each}}
                                              </select>
                                              </span>
                                        </div>


                                       

                                        <div class="form-group">
                                          <span class="Name">Price</span>
                                            <span class="label"><input type="text" name="price" class="form-control" placeholder="Price" required></span>
                                        </div>

                                      <div>
                                        <button id="menu-btn" type="submit" class="btn btn-lg btn-info btn-block">
                                            Create Menu   
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