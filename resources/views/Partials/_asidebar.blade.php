<!-- Drawer -->
<aside class="app-layout-drawer">

    <!-- Drawer scroll area -->
    <div class="app-layout-drawer-scroll">
        <!-- Drawer logo -->
        <div id="logo" class="drawer-header">
            <a href="#"><img class="img-responsive" src="{{ asset('admin/img/logo/vip.png') }}" title="AppUI" alt="AppUI" /></a>
        </div>

        <!-- Drawer navigation -->
        <nav class="drawer-main">
            <ul class="nav nav-drawer">

                <li class="nav-item nav-drawer-header">VIP BUS SYSTEM</li>

                <li class="nav-item active">
                    <a href="{{ route('superadmin_index')}}"><i class="ion-ios-speedometer-outline"></i> Dashboard</a>
                </li>

               
                <li class="nav-item nav-drawer-header">VIP BUS SYSTEM</li>

                <li class="nav-item nav-item-has-subnav">
                    <a href="javascript:void(0)"><i class="ion-ios-calculator-outline"></i> BUSES</a>
                    <ul class="nav nav-subnav">
                            
                        <li>
                            <a href="{{ route('create-buses-types')}}">Add Bus Types</a>
                        </li>

                        <li>
                            <a href="{{ route('all-bustypes')}}">All Bus Types</a>
                        </li>

                        <li>
                            <a href="{{ route('create-buses')}}">Add Bus</a>
                        </li>

                        <li>
                            <a href="{{ route('all-buses')}}">All Buses</a>
                        </li>

                                                
                    </ul>
                </li>

                <li class="nav-item nav-item-has-subnav">
                    <a href="javascript:void(0)"><i class="ion-ios-compose-outline"></i> DRIVERS</a>
                    <ul class="nav nav-subnav">

                        <li>
                            <a href="{{ route('create-drivers') }}">Add Driver</a>
                        </li>

                        <li>
                            <a href="{{ route('all-drivers') }}">All Drivers</a>
                        </li>
             

                    </ul>
                </li>

                <li class="nav-item nav-item-has-subnav">
                    <a href="javascript:void(0)"><i class="ion-ios-list-outline"></i> MATES </a>
                    <ul class="nav nav-subnav">

                        <li>
                            <a href="{{ route('create-mates') }}">Add Mate</a>
                        </li>

                        <li>
                            <a href="{{ route('all-mates') }}">All Mates</a>
                        </li>

                       
                    </ul>
                </li>

                <li class="nav-item nav-item-has-subnav">
                    <a href="javascript:void(0)"><i class="ion-ios-browsers-outline"></i> PASSENGERS</a>
                    <ul class="nav nav-subnav">

                        <li>
                            <a href="base_pages_blank.html">Add Passenger</a>
                        </li>

                        <li>
                            <a href="base_pages_inbox.html">All Passengers</a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item nav-item-has-subnav">
                    <a href="javascript:void(0)"><i class="ion-social-javascript-outline"></i> TRIPS</a>
                    <ul class="nav nav-subnav">

                        <li>
                            <a href="base_js_maps.html">Add Trip</a>
                        </li>

                        <li>
                            <a href="base_js_sliders.html">All Trips</a>
                        </li>

                       
                    </ul>
                </li>

                 <li class="nav-item nav-item-has-subnav">
                    <a href="javascript:void(0)"><i class="ion-social-javascript-outline"></i> DEPARTING POINTS</a>
                    <ul class="nav nav-subnav">

                        <li>
                            <a href="{{ route('create-departingpoints')}}">Add Departing Point</a>
                        </li>

                        <li>
                            <a href="{{ route('all-departingpoints')}}">All Departing Points</a>
                        </li>


                    </ul>
                </li>

                 <li class="nav-item nav-item-has-subnav">
                    <a href="javascript:void(0)"><i class="ion-social-javascript-outline"></i> DESTINATION POINTS</a>
                    <ul class="nav nav-subnav">

                        <li>
                            <a href="{{ route('create-destinationpoints')}}">Add Destination Point</a>
                        </li>

                        <li>
                            <a href="{{ route('all-destinationpoints')}}">All Destination Points</a>
                        </li>


                    </ul>
                </li>

                 <li class="nav-item nav-item-has-subnav">
                    <a href="javascript:void(0)"><i class="ion-social-javascript-outline"></i> REPORTS</a>
                    <ul class="nav nav-subnav">

                        <li>
                            <a href="base_js_maps.html">Maps</a>
                        </li>

                        <li>
                            <a href="base_js_sliders.html">Sliders</a>
                        </li>

                        

                    </ul>
                </li>

                 <li class="nav-item nav-item-has-subnav">
                    <a href="javascript:void(0)"><i class="ion-social-javascript-outline"></i> USERS</a>
                    <ul class="nav nav-subnav">

                        <li>
                            <a href="base_js_maps.html">Add User</a>
                        </li>

                        <li>
                            <a href="base_js_sliders.html">All Users</a>
                        </li>
                                               

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout')}}"><i class="ion-ios-monitor-outline"></i> LOGOUT</a>
                </li>

            </ul>
        </nav>
        <!-- End drawer navigation -->

        <div class="drawer-footer">
            <p class="copyright">VIP BUS TRIP SYSTEM &copy;</p>
            
        </div>
    </div>
    <!-- End drawer scroll area -->
</aside>
<!-- End drawer -->