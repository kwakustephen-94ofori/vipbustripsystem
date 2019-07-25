<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use DB;
use Session;
use App\User;
use App\Destinationpoint;

class DestinationpointController extends Controller
{
    public function createDestinationPoints(){

				     return view('Superadmin.destinationpoints.create');
			}

			public function postCreateDestinationPoints(Request $request){

						$this->validate($request, array(

							'destinationpoint'=>'required',

						));


						$destinationpoint = new Destinationpoint;
						$destinationpoint->name = $request["destinationpoint"];
						$destinationpoint->save();

						Session::flash('new-destinationpoint-success','Destination Point Added successfully!');
						return redirect()->route('all-destinationpoints');



			}


			public function allDestinationPoints(){

						$allDestinationpoints = DB::table('destinationpoints')
						->where('deleted_at', NULL)
						->paginate(10);

						//dd($allBustypes);
						return view('Superadmin.destinationpoints.index', compact('allDestinationpoints'));
			}
}
