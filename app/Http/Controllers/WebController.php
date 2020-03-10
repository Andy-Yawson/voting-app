<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;

class WebController extends Controller
{
    function welcome(){
        return view('welcome');
    }

    function president(){
        if (!session()->has('index')){
            return redirect()->route('web.home')->with('error','Verify your index before voting!');
        }
        $president = Candidate::where('role_id',1)->get();
        return view('president',compact('president'));
    }

    function treasurer(){
        if (!session()->has('index')){
            return redirect()->route('web.home')->with('error','Verify your index before voting!');
        }
        $treasurers = Candidate::where('role_id',2)->get();
        return view('treasurer',compact('treasurers'));
    }

    function secretary(){
        if (!session()->has('index')){
            return redirect()->route('web.home')->with('error','Verify your index before voting!');
        }
        $secretary = Candidate::where('role_id',3)->get();
        return view('secretary',compact('secretary'));
    }

    function sports(){
        if (!session()->has('index')){
            return redirect()->route('web.home')->with('error','Verify your index before voting!');
        }
        $sports = Candidate::where('role_id',5)->get();
        return view('sports',compact('sports'));
    }

    function organizing(){
        if (!session()->has('index')){
            return redirect()->route('web.home')->with('error','Verify your index before voting!');
        }
        $organizers = Candidate::where('role_id',4)->get();
        return view('organizing',compact('organizers'));
    }
}
