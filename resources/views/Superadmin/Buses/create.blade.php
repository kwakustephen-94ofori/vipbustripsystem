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
            <div class="container-fluid p-y-md" style="margin-top: 50px;">
              <div class="row">
                <div class="col-sm-5 col-sm-offset-3">
                    <!-- Bootstrap registration -->
                    <div class="card">
                        <div class="card-header bg-green bg-inverse">
                            <h4>ADD NEW BUS</h4>
                            <!-- <ul class="card-actions">
                                <li>
                                    <button type="button" data-toggle="card-action" data-action="refresh_toggle" data-action-mode="demo"><i class="ion-refresh"></i></button>
                                </li>
                                            
                                        </ul> -->
                                    </div>
                                    <div class="card-block">
                                        
                                        


                                        <form class="form-horizontal" action="{{ route('post-create-buses')}}" method="post">

                                            {{ csrf_field() }}

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="bustypename">Bus Type</label>
                                                <div class="col-xs-12">
                                                    <select class="form-control" id="bustypename" name="bustypename" style="padding: 10px;">
                                                        <option value="#">- Select Bus Type -</option>
                                                        @foreach($allBusTypes as $busTypes)
                                                        <option value="{{ $busTypes->id}}">{{ $busTypes->name }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="busmodel">Bus Model</label>
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" id="busmodel" name="busmodel" placeholder="Eg. Hilux" />
                                                </div>
                                            </div>

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="busregistrationnumber">Bus Registration Number</label>
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" id="busregistrationnumber" name="busregistrationnumber" required="required" placeholder="Eg. GT- 2389" />
                                                </div>
                                            </div>

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="busseatcapacity">Bus Seat Capacity</label>
                                                <div class="col-xs-12">
                                                    <input class="form-control" required="required" type="text" id="busseatcapacity" name="busseatcapacity" placeholder="Eg. 30"/>
                                                </div>
                                            </div>
                                            
                                            
                                            

                                            <div class="form-group m-b-0">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-app" type="submit">Add Bus</button>
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