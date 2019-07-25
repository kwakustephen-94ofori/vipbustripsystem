<!DOCTYPE html>

<html class="app-ui">
<head>
        @include('Partials._admin_styles')
    </head>


<body class="app-ui">
        <!-- <div class="app-layout-canvas">
        <div class="app-layout-container"> -->

<main class="">

                    <!-- Page header -->
                    <div class="page-header bg-green bg-inverse">
                        <div class="container">
                            <!-- Section Content -->
                            <div class="p-y-lg text-center">
                                <h1 class="display-2">- VIP BUS TRIP SYSTEM -</h1>
                                <h4 class="display-2">ADMIN LOGIN</h4>
                            </div>
                            <!-- End Section Content -->
                        </div>
                    </div>
                    <!-- End Page header -->

                    <!-- Page content -->
                    <div class="page-content" style="padding: 60px;">
                        <div class="container">
                        
                            <div class="row">
                                <!-- Login card -->
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="card">
                            @if(Session::has('login-error'))

                             <div class="alert alert-danger alert-dismissible" role="alert" id="successMessage">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                </button>

                                <strong>Ooops!</strong>
                                  {{ Session::get('login-error') }}
                            </div>
                             @endif
                                        <h3 class="card-header h4">Login</h3>
                                        <div class="card-block">
                                            <form action="{{ route('postLogin')}}" method="POST">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label class="sr-only" for="frontend_login_email">Email</label>
                                                    <input type="email" class="form-control" id="frontend_login_email" placeholder="Email" name="email" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="frontend_login_password">Password</label>
                                                    <input type="password" class="form-control" id="frontend_login_password" placeholder="Password" name="password" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="frontend_login_remember" class="css-input switch switch-sm switch-app">
									<input type="checkbox" id="frontend_login_remember" /><span></span> Remember me</a>
								</label>
                                                </div>
                                                <button type="submit" class="btn btn-app btn-block">Login</button>
                                            </form>
                                        </div>
                                        <!-- .card-block -->
                                    </div>
                                    <!-- .card -->
                                </div>
                                <!-- .col-md-6 -->
                                <!-- End login -->

                                

                            </div>
                            <!-- .row -->
                        </div>
                        <!-- .container -->
                    </div>
                    <!-- End page content -->

                </main>

            </div>
        </div>
    </body>