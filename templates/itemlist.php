<script id="ItemList" type="text/template">
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
                <th scope="col">SN</th>
                <th scope="col">Item Name</th>
                <th scope="col">Edits</th>
               
                </tr>
              </thead>
              <tbody>
                {{#each mydata}}
                <tr>
                <th>{{id}}</th>
                <td>{{name}}</td>
                <td><form><a href="javascript:App.navigate('UpdateItem')" <button class="btn btn-primary" id="getItemId" data-id={{id}}>Edit</button></a>
                    <button class="btn btn-danger" id="deleteItem" data-id={{id}}>Delete</button> </td>
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