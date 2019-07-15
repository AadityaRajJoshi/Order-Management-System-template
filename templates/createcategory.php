<script id="createcategory" type="text/template">
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
                                  <h3 class="text-center title-2">Create Category</h3>
                                </div>
                                        <hr>
                                <form action="" method="post" novalidate="novalidate">
                                    <div class="form-group">
                                        <span class="Name">Category Name</span>
                                        <span class="label"><input type="text" class="form-control" name="categoryname"  placeholder="category Name" required></span>
                                      </div>

                                      <div>
                                        <button id="category-btn" type="submit" class="btn btn-lg btn-info btn-block">
                                            Create Category   
                                        </button>
                                      </div>
                                  </form>
                                  <div id="catmessage" ></Div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
<?php include('footer.php') ?>
</script>