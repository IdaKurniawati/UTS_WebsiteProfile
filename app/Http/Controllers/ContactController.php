<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function add(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'pesan'=>'required'
        ]);

        $query = DB::table('contacts')->insert([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'pesan'=>$request->input('pesan')
        ]);

        if($query){
            return back()->with('success', 'Pesan terkirim!');
        }else{
            return back()->with('fail', 'Pesan tidak terkirim!');
        }
    }
}
