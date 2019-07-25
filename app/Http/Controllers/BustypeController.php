<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use DB;
use Session;
use App\User;
use App\Bustype;

class BustypeController extends Controller
{
			public function createBusesTypes(){

				     return view('Superadmin.BusesTypes.create');
			}

			public function postCreateBusesTypes(Request $request){

						$this->validate($request, array(

							'bustypename'=>'required',

						));


						$bustype = new Bustype;
						$bustype->name = $request["bustypename"];
						$bustype->save();

						Session::flash('new-bustype-success','Bus Type Added successfully!');
						return redirect()->route('all-bustypes');



			}


			public function allBustypes(){

						$allBustypes = DB::table('bustypes')
						->where('deleted_at', NULL)
						->paginate(10);

						//dd($allBustypes);
						return view('Superadmin.Busestypes.index', compact('allBustypes'));
			}

}
