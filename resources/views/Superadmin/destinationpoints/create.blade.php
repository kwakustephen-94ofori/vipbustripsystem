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
            <div class="container-fluid p-y-md" style="margin-top: 100px;">
              <div class="row">
                <div class="col-sm-5 col-sm-offset-3">
                    <!-- Bootstrap registration -->
                    <div class="card">
                        <div class="card-header bg-green bg-inverse">
                            <h4>ADD NEW DESTINATION POINT</h4>
                            <ul class="card-actions">
                                <li>
                                    <button type="button" data-toggle="card-action" data-action="refresh_toggle" data-action-mode="demo"><i class="ion-refresh"></i></button>
                                </li>
                                           
                                        </ul>
                                    </div>
                                    <div class="card-block">
                                        
                                        


                                        <form class="form-horizontal" action="{{ route('post-create-destinationpoints')}}" method="post">

                                            {{ csrf_field() }}

                                            <div class="form-group" style="padding: 20px;">
                                                <label class="col-xs-12" for="destinationpoint">Destination Point</label>
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" id="destinationpoint" name="destinationpoint" placeholder="Eg. Kumasi" required="required" style="padding: 10px;" />
                                                </div>
                                            </div>
                                            
                                            
                                            

                                            <div class="form-group m-b-0">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-app" type="submit">Add Destination Point</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- .card-block -->
                                </div>
                                <!-- .card -->
                                <!-- End Bootstrap registration -->
                            </div>
                            <!-- .col-lg-4 -->


                        </div>
                    </div>
                </div>
            </main>


            @include('Partials._admin_scripts')

        </body>

        </html>