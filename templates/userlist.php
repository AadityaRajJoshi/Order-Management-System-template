<script id="userlist" type="text/template">
<?php include('header.php') ?>
<div style="background-image: url('images/icon/food.jpeg');" class="main-content">
  <div class="section__content section__content--p30">
  
    <div class="container-fluid">
      <div  class="row m-t-3">
        <div class="col-md-12">
          <div style="height: 450px;" class="table-wrapper-scroll-y my-custom-scrollbar">
            <table  class="table table-dark table-data3" id="userTable">
              <thead id = "render_here">
                <tr>
                <th scope="col">SN</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                
                <th scope="col">Nice Name</th>
                
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Edits</th>
               
                </tr>
              </thead>
              <tbody >
               

                {{#each mydata}}
                <tr>
                    <th>{{id}}</th>
                    <td>{{username}}</td>
                    <td>{{email}}</td>
                    
                    <td>{{nicename}}</td>
                    
                    <td><{{created_date}}/td>
                    <td>{{updated_date}}</td>
                    <td><form><a href="javascript:App.navigate('updateUser')" <button class="btn btn-primary" id="getUserId" data-id={{id}}>Edit</button></a>
                    <button class="btn btn-danger" id="deleteUserId" data-id={{id}}>Delete</button> </td>
                    </form> 
               </tr>
                {{/each}}
              </tbody>
            </table>
            <div id="pagination-container">
                
            </div>
         
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>
</script>