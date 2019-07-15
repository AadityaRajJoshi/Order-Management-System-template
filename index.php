<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Order Management System</title>
         <!-- Jquery JS-->
     <script src="vendor/jquery-3.2.1.min.js"></script>
      <script src="vendor/Pagination.js" type="text/javascript"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script> 
   

         <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="css/theme.css" rel="stylesheet" media="all">
        <link type="text/css" rel="stylesheet" href="css/simplePagination.css"/>
        
        <script src="vendor/finch.js" type="text/javascript"></script>

        <script src="app.js"></script>
        <script src="js/user.js" type="text/javascript"></script>
        <script src="js/logout.js" type="text/javascript"></script>
        <script src="js/item.js" type="text/javascript"></script>
        <script src="js/order.js" type="text/javascript"></script>
        <script src="js/category.js" type="text/javascript"></script>
        <script src="js/menu.js" type="text/javascript"></script>
         
        <script src="js/orderfood.js" type="text/javascript"></script>
        <script src="js/dashboard.js" type="text/javascript"></script>
    
        <script src="vendor/jquery.cookie.js" type="text/javascript"></script>

        <script src="vendor/handlebars-v4.1.2.js"></script>
        <script src="vendor/loadsh.js"></script>
        <?php 
            foreach ( glob('templates/*.php') as $filename ){
                include_once $filename;
            } 
        ?>
    </head>
    <body>
       
        <div id="root"></div>
    
    </body>

    <!-- Jquery JS-->

</html>