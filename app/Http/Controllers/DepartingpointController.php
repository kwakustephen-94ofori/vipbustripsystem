<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use DB;
use Session;
use App\User;
use App\Departingpoint;

class DepartingpointController extends Controller
{
    public function createDepartingPoints(){

				     return view('Superadmin.departingpoints.create');
			}

			public function postCreateDepartingPoints(Request $request){

						$this->validate($request, array(

							'departingpoint'=>'required',

						));


						$departingpoint = new Departingpoint;
						$departingpoint->name = $request["departingpoint"];
						$departingpoint->save();

						Session::flash('new-departingpoint-success','Departing Point Added successfully!');
						return redirect()->route('all-departingpoints');



			}


			public function allDepartingPoints(){

						$allDepartingPoints = DB::table('departingpoints')
						->where('deleted_at', NULL)
						->paginate(10);

						//dd($allBustypes);
						return view('Superadmin.departingpoints.index', compact('allDepartingPoints'));
			}
}
