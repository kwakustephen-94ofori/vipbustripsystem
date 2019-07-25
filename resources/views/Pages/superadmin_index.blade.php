<!DOCTYPE html>

<html class="app-ui">

    <head>
        @include('Partials._admin_styles')
    </head>

    <body class="app-ui layout-has-drawer layout-has-fixed-header">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

               @include('Partials._asidebar')
               
               @include('Partials._header')

                <main class="app-layout-content">

                    <!-- Page Content -->
                    <div class="container-fluid p-y-md">
                        <!-- Stats -->
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h2 text-muted m-t-0 m-b-xs">BUS TYPES</p>
                                            <p class="h3 text-blue m-t-sm m-b-0">26</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-blue bg-inverse"><i class="ion-ios-bell fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->

                            <div class="col-sm-6 col-lg-4">
                                <a class="card bg-red bg-inverse" href="javascript:void(0)" style="background-color: #996600">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h2 text-muted m-t-0 m-b-xs" style="color: #fff;">DRIVERS</p>
                                            <p class="h3 m-t-sm m-b-0" style="color: #fff;">20</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-people fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->

                            <div class="col-sm-6 col-lg-4">
                                <a class="card bg-blue bg-inverse" href="javascript:void(0)" style="background-color: #9900ff;">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h2 text-muted m-t-0 m-b-xs" style="color: #fff;">MATES</p>
                                            <p class="h3 m-t-sm m-b-0" style="color: #fff;">14</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-speedometer fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->

                            <!-- <div class="col-sm-6 col-lg-3">
                                <a class="card bg-purple bg-inverse" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h6 text-muted m-t-0 m-b-xs">Messages</p>
                                            <p class="h3 m-t-sm m-b-0">3 new</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-email fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div> -->
                            <!-- .col-sm-6 -->
                        </div>
                        <!-- .row -->
                        

                        <!-- Stats -->
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <a class="card" href="javascript:void(0)"  style="background-color: #ffbf00; font-weight: bolder; color: #fff;padding: 10px;">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h4 text-muted m-t-0 m-b-xs" style="color: #fff;font-size: 20px;">PASSENGERS</p>
                                            <p class="h3 text-blue m-t-sm m-b-0" style="color: #fff;">99</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-blue bg-inverse"><i class="ion-ios-bell fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->

                            <div class="col-sm-6 col-lg-4">
                                <a class="card bg-blue bg-inverse" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h2 text-muted m-t-0 m-b-xs" style="color: #fff;">TRIPS</p>
                                            <p class="h3 m-t-sm m-b-0" style="color: #fff;">39</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-people fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->

                            <div class="col-sm-6 col-lg-4">
                                <a class="card bg-red bg-inverse" href="javascript:void(0)"  style="background-color: violet; font-weight: bolder;">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h2 text-muted m-t-0 m-b-xs" style="color: #fff;">USERS</p>
                                            <p class="h3 m-t-sm m-b-0" style="color: #fff;">12</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-speedometer fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->

                            <!-- <div class="col-sm-6 col-lg-3">
                                <a class="card bg-purple bg-inverse" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h6 text-muted m-t-0 m-b-xs">Messages</p>
                                            <p class="h3 m-t-sm m-b-0">3 new</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-email fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div> -->
                            <!-- .col-sm-6 -->
                        </div>
                        <!-- .row -->

                        <!-- Stats -->
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <a class="card" href="javascript:void(0)"  style="background-color: #006699;color: #FFF; font-weight: bolder;padding: 5px;">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h3 text-muted m-t-0 m-b-xs" style="color: #fff;padding: 9px;">DEPARTING POINTS</p>
                                            <p class="h3 text-blue m-t-sm m-b-0" style="color: #fff;">10</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-blue bg-inverse"><i class="ion-ios-bell fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->

                            <div class="col-sm-6 col-lg-4">
                                <a class="card bg-green bg-inverse" href="javascript:void(0)" style="background-color:#009933;padding: 10px;font-weight: bolder;color: #fff;">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h3 text-muted m-t-0 m-b-xs" style="color: #fff;">DESTINATION POINTS</p>
                                            <p class="h2 m-t-sm m-b-0" style="color: #fff;">9</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-people fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->

                            <div class="col-sm-6 col-lg-4">
                                <a class="card bg-blue bg-inverse" href="javascript:void(0)" style="background-color: #1a0066; font-weight: bolder;padding: 13px;">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h3 text-muted m-t-0 m-b-xs">REPORTS</p>
                                            <p class="h3 m-t-sm m-b-0">20</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-speedometer fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->

                            <!-- <div class="col-sm-6 col-lg-3">
                                <a class="card bg-purple bg-inverse" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h6 text-muted m-t-0 m-b-xs">Messages</p>
                                            <p class="h3 m-t-sm m-b-0">3 new</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-email fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div> -->
                            <!-- .col-sm-6 -->
                        </div>
                        <!-- .row -->

                        <!-- End stats -->

                    
                    </div>
                    <!-- .container-fluid -->
                    <!-- End Page Content -->

                </main>

            </div>
            <!-- .app-layout-container -->
        </div>
        <!-- .app-layout-canvas -->

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div id="apps-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps card -->
                    <div class="card m-b-0">
                        <div class="card-header bg-app bg-inverse">
                            <h4>Apps</h4>
                            <ul class="card-actions">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="card card-block m-b-0 bg-app-secondary bg-inverse" href="index.html">
                                        <i class="ion-speedometer fa-4x"></i>
                                        <p>Admin</p>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="card card-block m-b-0 bg-app-tertiary bg-inverse" href="frontend_home.html">
                                        <i class="ion-laptop fa-4x"></i>
                                        <p>Frontend</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- .card-block -->
                    </div>
                    <!-- End Apps card -->
                </div>
            </div>
        </div>
        <!-- End Apps Modal -->

        <div class="app-ui-mask-modal"></div>
        
        @include('Partials._admin_scripts')
      
    </body>

</html>