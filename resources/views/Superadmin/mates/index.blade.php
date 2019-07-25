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
                                        <h4>ALL REGISTERED MATES</h4>
                                        <div class="card-actions">
                                            <code><a class="btn btn-info btn-sm"><i class="ion-print"></i> Print Mate list</a> <a class="btn btn-success btn-sm" href="{{ route('create-mates')}}"><i class="ion-plus"></i> Add New Mate</a></code>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        
                                        @if(Session::has('new-mate-success'))

                                        <div class="alert alert-success alert-dismissible" role="alert" id="successMessage">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                       <span aria-hidden="true">&times;</span>
                                                </button>

                                                <strong class="text-success">Success!</strong>
                                                  {{ Session::get('new-mate-success') }}
                                        </div>

                                        @endif

                                        @if(count($errors)>0)
                                            <div class="alert alert-danger" role="alert" id="myAlert">
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                               <span aria-hidden="true">&times;</span></button>
                                               @foreach($errors->all() as $error)
                                               <li><strong>Oops!:</strong> {{ $error }}</li>
                                               @endforeach
                                            </div>
                                        @endif

                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Mate Name</th>
                                                    <th>Mate Staff Number</th>
                                                    <th>Age</th>
                                                    <th>Mate Contact</th>
                                                    <th>Emergency Contact</th>
                                                    <th class="#">Date Created</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($allMates as $index=>$mates)
                                                <tr>
                                                    <td class="text-center">{{ $index+1 }}</td>
                                                    <td>{{ $mates->first_name ." ".  $mates->other_name}}</td>
                                                    <td>{{ $mates->staff_number }}</td>
                                                    <td>{{ $mates->age }}</td>
                                                    <td>{{ $mates->contact }}</td>
                                                    <td>{{ $mates->emergency_contact }}</td>
                                                    <td>{{ date('M j, Y, H:i', strtotime($mates->created_at)) }}</td>
                                                    <td class="text-center"><a class="btn btn-xs btn-success" data-toggle="tooltip" title="Edit Bus"><i class="ion-edit" style="color: #FFFFFF"></i></a>
                                                            <a class="btn btn-xs btn-danger" data-toggle="tooltip" title="Delete Bus" style="color: #FFFFFF"><i class="ion-close"></i></a></td>
                                                    
                                                </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                        {{ $allMates->links() }}
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