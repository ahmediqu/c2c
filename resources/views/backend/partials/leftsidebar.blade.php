<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>
                
                <li class="has_sub">
                    <a href="{{route('dashboard')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
                </li>
                
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span> Administration </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/users')}}">Users</a></li>
                        
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/users/list')}}">All Users</a></li>
                        
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span> Category Management System </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('adminCategory.index')}}">Category</a></li>
                        
                    </ul>
                </li>


                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span> Devesion And City Manage </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/devesion')}}">Devesion</a></li>
                        <li><a href="{{url('admin/city')}}">City</a></li>
                        
                    </ul>
                </li>


                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-o"></i> <span> Brand And Model Manage </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/brand')}}">Brand</a></li>
                        <li><a href="{{url('admin/model')}}">Model</a></li>
                        
                    </ul>
                </li>


               
                
                <!--<li class="has_sub">-->
                <!--    <a href="calendar.html" class="waves-effect"><i class="zmdi zmdi-calendar"></i><span> Calendar </span> </a>-->
                <!--</li>-->
                
                
                
                

                <!-- <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-fire"></i> <span> E-comarce </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/brand')}}">Brand</a></li>
                        <li><a href="{{url('admin/brand')}}">Item</a></li>
                        
                        <li><a href="{{url('admin/product/category')}}">Product Category</a></li>
                        <li><a href="{{url('admin/product/features')}}">Product Features</a></li>
                        <li><a href="{{url('admin/product')}}">Product</a></li>
                        <li><a href="{{url('admin/product/attributes')}}">Product Attribute</a></li>
                    </ul>
                </li> -->


                

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-album"></i> <span> Membership </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/blogCat')}}">Member List</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-widgets"></i> <span> Advertise Posting & Bumper Ads System </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/banner_page_position')}}">Advertise Posting Page manage</a></li>
                        <li><a href="{{url('admin/banner/request')}}">Advertise Banner Request</a></li>
                        <li><a href="widgets-charts.html">Bumper Ads System</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-widgets"></i> <span> Page Management System </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/doctor/specialities')}}">Home Page</a></li>
                        <li><a href="widgets-charts.html">About Page</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-widgets"></i> <span> Account Management System </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/doctor/specialities')}}">Home Page</a></li>
                        <li><a href="widgets-charts.html">About Page</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-album"></i> <span> Product Promotion Code </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/blogCat')}}">Generate Code</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-widgets"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('admin/doctor/specialities')}}">Home Page</a></li>
                        <li><a href="widgets-charts.html">About Page</a></li>
                    </ul>
                </li>

                
                
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
</div>