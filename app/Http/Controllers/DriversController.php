<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use DB;
use Session;
use App\User;
use App\Driver;

class DriversController extends Controller
{
    
        

           public function createDrivers(){

    		        return view('Superadmin.drivers.create');
			}

			public function postCreateDrivers(Request $request){

						$this->validate($request, array(

							'firstname'=>'required',
							'othernames'=>'required',
							'staff_number'=>'required',
							'driver_contact'=>'required',
							'emergency_contact'=>'required',

						));


						$driver = new Driver;
						$driver->first_name = $request["firstname"];
						$driver->other_name = $request["othernames"];
						$driver->staff_number = $request["staff_number"];
						$driver->age = $request["age"];
     					$driver->contact = $request["driver_contact"];
     					$driver->emergency_contact = $request["emergency_contact"];
						$driver->save();

						Session::flash('new-driver-success','Driver Information Added successfully!');
						return redirect()->route('all-drivers');



			}


			public function allDrivers(){

						$allDrivers = DB::table('drivers')
						->where('drivers.deleted_at', NULL)
						->select('drivers.*')
						->paginate(10);

						//dd($allBustypes);
						return view('Superadmin.drivers.index', compact('allDrivers'));
			}
}
