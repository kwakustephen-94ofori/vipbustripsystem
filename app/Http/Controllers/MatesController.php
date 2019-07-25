<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use DB;
use Session;
use App\User;
use App\Mate;

class MatesController extends Controller
{
    
    public function createMates(){

    		        return view('Superadmin.mates.create');
			}

			public function postCreateMates(Request $request){

						$this->validate($request, array(

							'firstname'=>'required',
							'othernames'=>'required',
							'staff_number'=>'required',
							'driver_contact'=>'required',
							'emergency_contact'=>'required',

						));


						$driver = new Mate;
						$driver->first_name = $request["firstname"];
						$driver->other_name = $request["othernames"];
						$driver->staff_number = $request["staff_number"];
						$driver->age = $request["age"];
     					$driver->contact = $request["driver_contact"];
     					$driver->emergency_contact = $request["emergency_contact"];
						$driver->save();

						Session::flash('new-mate-success','Mates Information Added successfully!');
						return redirect()->route('all-mates');



			}


			public function allMates(){

						$allMates = DB::table('mates')
						->where('mates.deleted_at', NULL)
						->select('mates.*')
						->paginate(10);

						//dd($allBustypes);
						return view('Superadmin.mates.index', compact('allMates'));
			}
}
