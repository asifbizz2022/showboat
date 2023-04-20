<nav class="page-sidebar sidebar-fixed " id="sidebar">
            <div id="sidebar-collapse">
                <!-- <div class="admin-block d-flex">
                    <div>
                        <img src="./assets/img/admin-avatar.png" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">James Brown</div><small>Administrator</small></div>
                </div> -->
                <ul class="side-menu metismenu ">
                    <li>
                        <a href="{{ url('/home')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li> 
                    <li class="heading text-left">STORE</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Users</span><i class="fa fa-angle-left arrow"></i>
                        </a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{ url('/')}}/get/user/data">User List</a>
                            </li>
                            
                        </ul>
                    </li>

                    
 
                   
                </ul>
            </div>
        </nav>