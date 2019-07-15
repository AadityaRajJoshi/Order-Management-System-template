<script  id = "orderfoodlist" type="text/template">
<?php include('header.php') ?>  
  <?php include('header.php') ?>
<div style="background-image: url('images/icon/food.jpeg');" class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <div  class="row m-t-3">
        <div class="col-md-12">
<!-- DATA TABLE-->
          <div style="height: 450px;" class="table-wrapper-scroll-y my-custom-scrollbar">
            <table  class="table table-dark table-data3">
              <thead>
                <tr>
                
                <th scope="col">Item</th>
                <th scope="col">Category</th>
                <th scope="col">quantity</th>
                <th scope="col">Ordered By</th>
                <th scope="col">Total Price</th>
                <th scope="col">Edit</th>

               
                </tr>
              </thead>
              <tbody>
                {{#each food}}
                <tr>
                <td>{{item}}</td>
                <td>{{category}}</td>
                <td>{{qty}}</td>
                <td>{{ordered_by}}</td>
                <td>{{total_price}}</td>
                <td><form>
                    <button class="btn btn-danger" id="deletefoodlist" data-id={{id}}>Delete</button> </td>
                    </form> </td>
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
<?php include('footer.php') ?>
</script>