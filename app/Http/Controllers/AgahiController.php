<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agahi;
class AgahiController extends Controller
{
    //
    public function add(){
        return view('agahi.add');
    }
    public function newAgahi(Request $request){
        $agahi = new Agahi;
        $agahi->title = $request->title;
        $agahi->description = $request->description;

        $agahi->save();
        return redirect()->route('add');


    }
}
