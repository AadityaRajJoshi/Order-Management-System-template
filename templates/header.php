

<div id="mainHeader" class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <div id="bars">

        <div  class="menu-sidebar d-none d-lg-block">
            <div  class="logo">

                <a href="#">
                    <img src="images/icon/logo.jpg" alt="Order management" style="height: 80px; margin-left: 20px;" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                          <li>
                            <a href="javascript:App.navigate('dashboard')">
                              
                                <i class="fas fa-chart-bar"></i>Dashboard</a>
                                
                                
                          </li>
                        <li class=" has-sub">
                            <a class="js-arrow" >
                                
                                <i class="fas fa-tachometer-alt"></i>Management</a>
                                
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                {{#if isSA}}
                                 <li>
                                    <a href="javascript:App.navigate('createuser')" id="userCreate">Create User</a>
                                </li>
                               {{else if isCompany}}
                                <li>
                                    <a href="javascript:App.navigate('createuser')" id="userCreate">Create User</a>
                                </li>
                                
                                <li>
                                    <a href="javascript:App.navigate('CreateOrder')" id="orderCreate">Create Order</a>
                                </li>
                                {{else if isRestaurant}}
                                 <li>
                                    <a href="javascript:App.navigate('CreateItem')" id="itemCreate">Create Item</a>
                                </li>

                                <li>
                                    <a href="javascript:App.navigate('createCategory')" id="categoryCreate">Create Category</a>
                                </li>

                                <li>
                                    <a href="javascript:App.navigate('CreateMenu')" id="menuCreate">Create Menu</a>
                                </li>
                                
                              {{/if}}
                               </ul>


                        </li>
                          <li class=" has-sub">
                            <a class="js-arrow">
                                <i class="fas fa-table"></i>List</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                {{#if isSA}}
                                 <li>
                                    <a href="javascript:App.navigate('UserList')" id="listUser">User List</a>
                                </li>
                                {{else if isCompany}}
                                 <li>
                                    <a href="javascript:App.navigate('UserList')" id="listUser">User List</a>
                                </li>

                                <li>
                                    <a href="javascript:App.navigate('OrderfoodList')" id="listorderfood"> Ordered Food</a>
                                </li>

                                <li>
                                    <a href="javascript:App.navigate('OrderList')" id="OrderList"> Ordered List</a>
                                </li>

                                {{else if isRestaurant}}
                                <li>
                                    <a href="javascript:App.navigate('FoodList')" id="listFood">Food List</a>
                                </li>
                                <li>
                                    <a href="javascript:App.navigate('ItemList')" id="listItem">Item List</a>
                                </li>
                                <li>
                                    <a href="javascript:App.navigate('CategoryList')" id="listCategory">Category List</a>
                                </li>
                                {{else}}
                                
                               
                               {{/if}}
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:App.navigate('orderfood')" id="foodOrder">
                                <i class="far fa-check-square"></i>Order Food</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div  class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                   
                     <div style = "float: left;" class="quotes"><i> Ramailo- Manage Your Order </i></div>
                     
                        <div style = "float: right;" class="header-wrap">
                            <div  class="header-button">
                                <div  class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">4</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" id='login-name' href="#">Hello {{user}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="http://www.gmail.com">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="http://www.gmail.com"></a>
                                                    </h5>
                                                    <span class="email">{{email}}</span>
                                                </div>
                                            </div>
                                            
                                            <div class="account-dropdown__footer">
                                                    <a >
                                                        
                                                    <button id="btn"><i class="zmdi zmdi-power" ></i>Logout</button>
                                                    </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
