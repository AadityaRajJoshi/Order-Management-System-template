<script id = "updateCreateUser" type="text/x-handlebars-template">
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
                                  <h3 class="text-center title-2">Update User</h3>
                                </div>
                                    <hr>
                                <form action="" method="post" novalidate="novalidate">
                                  <div class="form-group">
                                    <span class="Name">User Name</span>
                                    <span class="label"><input type="text" class="form-control" name="username1"  placeholder="User name" value="{{mydata.username}}"  required></span>
                                  </div> 

                                  <div class="form-group">
                                    <span class="Name">Email</span>
                                    <span class="label"><input type="email" class="form-control" name="useremail" placeholder="Email" value="{{mydata.email}}" required></span>
                                  </div> 
                                 

                                  <div class="form-group">
                                    <span class="Name">Select User</span>
                                    <span class="label"><select class="form-control form-control-sm" id="myselect">
                                       <option value=3>Customer</option>
                                       <option value=4>Resturant</option>
                                   </select></span>
                                  </div> 

                                  <div class="form-group">
                                    <span class="Name">Nice Name</span>
                                    <span class="label"><input type="text" class="form-control" name="usernicename" placeholder="nice name" value="{{mydata.nicename}}" required></span>
                                  </div> 

                                      <div>
                                        <button id="updateuser-btn" class="btn btn-lg btn-info btn-block" data-id={{mydata.id}}>
                                            Update User  
                                        </button>
                                      </div>
                                  </form>
                            </div>
                        </div>
                      }
                    </div>
                </div>
            </div>
        </div>
  </div>
<?php include('footer.php') ?>
</script>