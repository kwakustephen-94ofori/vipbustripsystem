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
                <div class="col-sm-12 col">
                    <!-- Bootstrap registration -->
                    <div class="card">
                        <div class="card-header bg-green bg-inverse" style="padding: 15px;">
                            <h4>ADD NEW TRIP</h4>
                            
                                    </div>

                                    <div class="card-block">

                                    @if(count($errors)>0)
                                            <div class="alert alert-danger" role="alert" id="myAlert">
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                               <span aria-hidden="true">&times;</span></button>
                                               @foreach($errors->all() as $error)
                                               <li><strong>Oops!:</strong> {{ $error }}</li>
                                               @endforeach
                                            </div>
                                        @endif
                                        
                                     <form class="form-horizontal" action="{{ route('post-create-new-trip')}}" method="post">

                                            {{ csrf_field() }}
                                        <div class="row">
                                        <div class="col-sm-5">
                                            
                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="tripname"> Name of Trip </label>
                                                <div class="col-xs-12">
                                                    <input class="form-control" required="required" type="text" id="tripname" name="tripname" required="required" placeholder="Morning Trip from Kumasi to Accra"/>
                                                </div>
                                            </div>

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="driver">-- Select Driver --</label>
                                                <div class="col-xs-12">
                                                <select style="color: #000;font-size: 16px;" class="form-control" id="driver" name="driver">
                                                        @foreach($allDrivers as $driver)
                                                        <option style="color: #000;" value="{{ $driver->id }}">{{ $driver->first_name . " ". $driver->other_name }} - {{ $driver->staff_number }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="departingpoint">Select Departing Point</label>
                                                <div class="col-xs-12">
                                                    <select style="color: #000;font-size: 16px;" class="form-control" id="departingpoint" name="departingpoint">
                                                        @foreach($allDepartingPoints as $departingpoint)
                                                        <option value="{{ $departingpoint->id }}">{{ $departingpoint->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="tripdeparturedate">Select Trip Departure Date</label>
                                                <div class="col-xs-12">
                                                    <input class="js-datepicker form-control"  type="date" id="tripdeparturedate" name="tripdeparturedate" required="required" data-date-format="mm/dd/yy"/>
                                                </div>
                                            </div>

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="tripdeparturetime">Select Trip Departure Time</label>
                                                <div class="col-xs-12">
                                                    <input class="js-datepicker form-control"  type="time" id="tripdeparturetime" name="tripdeparturetime" data-date-format="mm/dd/yy" placeholder="Eg. Gates"/>
                                                </div>
                                            </div>

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="number_males"> Number of Males on Bus </label>
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" id="number_males" name="number_males"  placeholder="Eg. 10"/>
                                                </div>
                                            </div>

                                       </div>

                                        <div class="col-sm-5 col-sm-offset-1">
                                           
                                           <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="bus">-- Select Bus --</label>
                                                <div class="col-xs-12">
                                                <select style="color: #000;font-size: 16px;" class="form-control" id="bus" name="bus">    
                                                    @foreach($allBuses as $bus)
                                                        <option value="{{ $bus->id }}">{{ $bus->name ." ". $bus->busmodel }} - {{$bus->registration_number}}</option>
                                                        @endforeach
                                                </select>
                                                </div>
                                            </div>

                                           <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="mate">-- Select Mate --</label>
                                                <div class="col-xs-12">
                                                    <select style="color: #000;font-size: 16px;" class="form-control" id="mate" name="mate">
                                                        @foreach($allMates as $mate)
                                                        <option value="{{ $mate->id }}">{{ $mate->first_name ." ". $mate->other_name }} {{$mate->staff_number}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="destinationpoint">Select Destination Point</label>
                                                <div class="col-xs-12">
                                                    <select style="color: #000;font-size: 16px;" class="form-control" id="destinationpoint" name="destinationpoint">
                                                        @foreach($allDestinationpoints as $destinationpoint)
                                                        <option value="{{ $destinationpoint->id }}">{{ $destinationpoint->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="triparrivaldate">Select Trip Arrival Date</label>
                                                <div class="col-xs-12">
                                                    <input class="js-datepicker form-control"  type="date" id="triparrivaldate" name="triparrivaldate" required="required" data-date-format="mm/dd/yy" placeholder="Eg. Gates"/>
                                                </div>
                                            </div>

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="triparrivaltime"> Trip Arrival Time </label>
                                                <div class="col-xs-12">
                                                    <input class="form-control"  type="time" id="triparrivaltime" name="triparrivaltime" />
                                                </div>
                                            </div>

                                            <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="number_females"> Number of Females in Bus </label>
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" id="number_females" name="number_females"  placeholder="Eg. 30"/>
                                                </div>
                                            </div>

                                           
                                        </div>
                                        

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group" style="padding: 5px;">
                                                <label class="col-xs-12" for="driver"> Driver Comments </label>
                                                <div class="col-xs-12">
                                                    <textarea name="driver_comments" class="form-control" id="driver_comments" rows="3" cols="25">
                                                        
                                                    </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group m-b-0" style="padding: 5px;">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-app" type="submit">Add Bus</button>
                                                </div>
                                            </div>
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
        </div>
        </body>

        </html>