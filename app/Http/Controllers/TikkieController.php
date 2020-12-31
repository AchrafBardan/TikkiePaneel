<?php

namespace App\Http\Controllers;

use App\Models\Tikkie;
use Illuminate\Http\Request;

class TikkieController extends Controller
{
    public function show(Request $req)
    {
        
        
        $tikkie = Tikkie::with(['user'])->where('token',$req->token);

        if($tikkie->count() != 1){
            return redirect()->back()->with(['status'=>'Tikkie bestaat niet','statuscolor'=>'red']);
        }

        return view('tikkiepage',[
            'tikkie' => $tikkie->first(),
        ]);
    }
}
