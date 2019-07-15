<script  id = "EditMenu" type="text/template">
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
                                  <h3 class="text-center title-2">Update Menu</h3>
                                </div>
                                        <hr>
                                 <form action="" method="post" novalidate="novalidate">
                                     
                                      <div class="form-group">
                                          <span class="Name">Item Name</span>
                                            <span class="label"><select class="form-control form-control-sm" id="MyItem" >
                                              
                                              {{#each itemdata}}
                                             <option value={{id}}>{{name}}</option>
                                              {{/each}}
                                              
                                            </select></span>
                                        </div>

                                     <div class="form-group">
                                        <span class="Name">Category</span>
                                          <span class="label">
                                              <select class="form-control form-control-sm" id="MyCategory" >
                                              
                                                 {{#each categorydata}}
                                                <option value = {{id}} >{{name}}</option>
                                              {{/each}}
                                              
                                              </select>
                                              </span>
                                        </div>


                                        <div class="form-group">
                                          <span class="Name">Price</span>
                                            <span class="label"><input type="text" value="{{mydata.price}}" name="Updateprice" class="form-control" placeholder="Price"  required></span>
                                        </div>

                                      <div>
                                        <button id="Update-menu-btn" type="submit" data-id={{mydata.id}} class="btn btn-lg btn-info btn-block">
                                            Update Menu 
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