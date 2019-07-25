<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use DB;
use Session;
use App\User;
use App\Bus;

class BusController extends Controller
{
    	
    	    public function createBuses(){

    		        $allBusTypes = DB::table('bustypes')
    		                       ->where('deleted_at', NULL)
    		                       ->select('bustypes.*')
    		                       ->get();


				     return view('Superadmin.Buses.create', compact('allBusTypes'));
			}

			public function postCreateBuses(Request $request){

						$this->validate($request, array(

							'busregistrationnumber'=>'required',
							'busseatcapacity'=>'required',

						));


						$bus = new Bus;
						$bus->bus_type_id = $request["bustypename"];
						$bus->busmodel = $request["busmodel"];
						$bus->registration_number = $request["busregistrationnumber"];
     					$bus->capacity = $request["busseatcapacity"];
						$bus->save();

						Session::flash('new-bus-success','Bus Added successfully!');
						return redirect()->route('all-buses');



			}


			public function allBuses(){

						$allBuses = DB::table('buses')
						->leftjoin('bustypes','bustypes.id', "=", 'buses.bus_type_id')
						->where('buses.deleted_at', NULL)
						->select('buses.*', 'bustypes.name')
						->paginate(10);

						//dd($allBustypes);
						return view('Superadmin.Buses.index', compact('allBuses'));
			}
}
