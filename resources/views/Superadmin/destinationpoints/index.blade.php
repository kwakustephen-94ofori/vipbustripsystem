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
                                        <h4>ALL DESTINATION POINTS</h4>
                                        <div class="card-actions">
                                            <code><a class="btn btn-success btn-sm" href="{{ route('create-destinationpoints')}}"><i class="ion-plus"></i> Add New Destination Point</a></code>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        
                                        @if(Session::has('new-destinationpoint-success'))

                                        <div class="alert alert-success alert-dismissible" role="alert" id="successMessage">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                       <span aria-hidden="true">&times;</span>
                                                </button>

                                                <strong class="text-success">Success!</strong>
                                                  {{ Session::get('new-destinationpoint-success') }}
                                            </div>

                                        @endif

                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Destination Point</th>
                                                    <th class="#">Date Created</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($allDestinationpoints as $index=>$destinationpoint)
                                                <tr>
                                                    <td class="text-center">{{ $index+1 }}</td>
                                                    <td>{{ $destinationpoint->name }}</td>
                                                    <td>{{ date('M j, Y, H:i', strtotime($destinationpoint->created_at)) }}</td>
                                                    <td class="text-center"><button class="btn btn-xs btn-success" type="button" data-toggle="tooltip" title="Edit BusType"><i class="ion-edit"></i></button>
                                                            <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="Delete BusType"><i class="ion-close"></i></button></td>
                                                    
                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                        {{ $allDestinationpoints->links() }}
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