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
              <div class="row">
                <div class="col-sm-12">
                    
                 <!-- Striped Table -->
                                <div class="card">
                                    <div class="card-header">
                                        <h4>ALL REGISTERED TRIPS</h4>
                                        <div class="card-actions">
                                            <code><a class="btn btn-info btn-sm"><i class="ion-print"></i> Print Trip list</a> <a class="btn btn-success btn-sm" href="{{ route('create-new-trip')}}"><i class="ion-plus"></i> Add New Trip</a></code>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        
                                        @if(Session::has('new-trip-success'))

                                        <div class="alert alert-success alert-dismissible" role="alert" id="successMessage">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                       <span aria-hidden="true">&times;</span>
                                                </button>

                                                <strong class="text-success">Success!</strong>
                                                  {{ Session::get('new-trip-success') }}
                                            </div>

                                        @endif

                                        
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Trip Name</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                    <th>Depart Date & Time </th>
                                                    <th>Arrival Date & Time </th>
                                                    <th class="#">Created</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($allTrips as $index=>$trip)
                                                <tr>
                                                    <td class="text-center">{{ $index+1 }}</td>
                                                    <td>{{ $trip->name }}</td>
                                                    <td>{{ $trip->Departingpoint_name }}</td>
                                                    <td>{{ $trip->Destinationpoint_name }}</td>
                                                    <td>{{ date('M j, Y', strtotime($trip->departure_date)) ." - " . date('H:i A', strtotime($trip->departure_time)) }}</td>
                                                    <td>{{ date('M j, Y', strtotime($trip->arrival_date)) ." " . date('H:i A', strtotime($trip->arrival_time)) }}</td>
                                                    <td>{{ date('M j, Y', strtotime($trip->created_at)) }}</td>
                                                    <td class="text-center"><a class="btn btn-xs btn-success" data-toggle="tooltip" title="Edit Trip"><i class="ion-edit" style="color: #FFFFFF"></i></a>
                                                            <a class="btn btn-xs btn-warning" data-toggle="tooltip" title="View  Trip Information" style="color: #FFFFFF"><i class="ion-eye"></i></a>
                                                        
                                                        <a class="btn btn-xs btn-info" data-toggle="tooltip" title="Add Passengers To Trip" style="color: #FFFFFF"><i class="ion-plus"></i></a>

                                                        <a class="btn btn-xs btn-danger" data-toggle="tooltip" title="Delete Trip" style="color: #FFFFFF"><i class="ion-close"></i></a>

                                                        </td>
                                                    
                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                        {{ $allTrips->links() }}
                                    </div>
                                    <!-- .card-block -->
                                </div>
                                <!-- .card -->
                                <!-- End Striped Table -->


                </div>
                   
                </div>
                    </div>
                </div>
            </main>


            @include('Partials._admin_scripts')

        </body>

        </html>