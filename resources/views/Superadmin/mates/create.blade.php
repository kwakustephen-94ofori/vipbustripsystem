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
            <div class="container-fluid p-y-md" style="margin-top: 0px;">
              <div class="row">
                <div class="col-sm-5 col-sm-offset-3">
                    <!-- Bootstrap registration -->
                    <div class="card">
                        <div class="card-header bg-green bg-inverse">
                            <h4>ADD NEW MATE</h4>
                            
                                    </div>
                                    <div class="card-block">
                                        
                                        


                                        <form class="form-horizontal" action="{{ route('post-create-mates')}}" method="post">

                                            {{ csrf_field() }}

                                           <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="firstname">Firstname</label>
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" id="firstname" name="firstname" required="required" placeholder="Eg. Bill" required="required" />
                                                </div>
                                            </div>

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="othernames">Othernames</label>
                                                <div class="col-xs-12">
                                                    <input class="form-control" required="required" type="text" id="othernames" name="othernames" required="required" placeholder="Eg. Gates"/>
                                                </div>
                                            </div>

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="age">Age</label>
                                                <div class="col-xs-12">
                                                    <input class="form-control"  type="text" id="age" name="age" placeholder="Eg. 33"/>
                                                </div>
                                            </div>

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="staff_number">Staff Number</label>
                                                <div class="col-xs-12">
                                                    <input class="form-control" required="required" type="text" id="staff_number" required="required" name="staff_number" placeholder="Eg. 2120089"/>
                                                </div>
                                            </div>

                                            
                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="driver_contact">Mate Contact Number</label>
                                                <div class="col-xs-12">
                                                    <input class="form-control" required="required" type="text" id="driver_contact" name="driver_contact" placeholder="Eg. 0546729902"/>
                                                </div>
                                            </div>

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="emergency_contact">Mate Emergency Contact Number</label>
                                                <div class="col-xs-12">
                                                    <input class="form-control" required="required" type="text" id="emergency_contact" name="emergency_contact" placeholder="Eg. 0544290989" required="required" />
                                                </div>
                                            </div>
                                           
                                              <div class="form-group m-b-0">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-app" type="submit">Add Mate</button>
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