<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use DB;
use Session;
use App\User;
use App\Trip;

class TripsController extends Controller
{
    
    public function createNewTrip(){

    	$allDrivers = DB::table('drivers')
						->where('drivers.deleted_at', NULL)
						->select('drivers.*')
						->get();

		$allMates = DB::table('mates')
						->where('mates.deleted_at', NULL)
						->select('mates.*')
						->get();

		$allBuses = DB::table('buses')
						->leftjoin('bustypes','bustypes.id', "=", 'buses.bus_type_id')
						->where('buses.deleted_at', NULL)
						->select('buses.*', 'bustypes.name')
						->get();

		$allDepartingPoints = DB::table('departingpoints')
						->where('deleted_at', NULL)
						->get();

		$allDestinationpoints = DB::table('destinationpoints')
						->where('deleted_at', NULL)
						->get();


    	return view('Superadmin.trips.create',
    	       compact(
	    		'allBuses',
	    		'allDrivers',
	    		'allMates',
	    		'allDepartingPoints',
	    		'allDestinationpoints'
	    	));
    }

    public function postCreateNewTrip(Request $request){

    	               $this->validate($request, array(

							'tripname'=>'required',
							'bus'=>'required',
							'driver'=>'required',
							'mate'=>'required',
							'departingpoint'=>'required',
							'destinationpoint'=>'required',
							'tripdeparturedate'=>'required',
							'triparrivaldate'=>'required',
							
						));


						$trip = new Trip;
						$trip->name = $request["tripname"];
						$trip->driver_id = $request["driver"];
						$trip->mate_id = $request["mate"];
						$trip->bus_id = $request["bus"];
     					$trip->departingpoint_id = $request["departingpoint"];
     					$trip->destinapointpoint_id = $request["destinationpoint"];
     					$trip->departure_date = $request["tripdeparturedate"];
     					$trip->departure_time = $request["tripdeparturetime"];
     					$trip->arrival_date = $request["triparrivaldate"];
     					$trip->arrival_time = $request["triparrivaltime"];
     					$trip->number_males = $request["number_males"];
     					$trip->number_females = $request["number_females"];
     					$trip->driver_comments = $request["driver_comments"];
     					$trip->save();

     					

						Session::flash('new-trip-success','Trip Created successfully!');
						return redirect()->route('all-trips');

    }

		    public function allTrips(){

		    	$allTrips = DB::table('trips')
								->leftjoin('drivers','drivers.id', "=", 'trips.driver_id')
								->leftjoin('mates','mates.id', "=", 'trips.mate_id')
								->leftjoin('destinationpoints','destinationpoints.id', "=", 'trips.destinapointpoint_id')
								->leftjoin('departingpoints','departingpoints.id', "=", 'trips.departingpoint_id')
								->leftjoin('buses','buses.id', "=", 'trips.bus_id')
								->leftjoin('bustypes','bustypes.id', "=", 'buses.id')
								->where('trips.deleted_at', NULL)
								->select('trips.*', 'drivers.first_name as D_first_name','drivers.other_name as D_other_name','drivers.staff_number as D_staff_number','drivers.age as D_age','drivers.contact as D_contact','drivers.emergency_contact as D_emergency_contact','mates.first_name as M_first_name','mates.other_name as M_other_name','mates.staff_number as M_staff_number','mates.age as M_age','mates.contact as M_contact','mates.emergency_contact as M_emergency_contact','buses.busmodel','buses.registration_number','buses.capacity','bustypes.name as Bus_name','destinationpoints.name as Destinationpoint_name','departingpoints.name as Departingpoint_name')
								->paginate(10);

								//dd($allTrips);

						
						return view('Superadmin.trips.index', compact('allTrips'));
		    }

}
