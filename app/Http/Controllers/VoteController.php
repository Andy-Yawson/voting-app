<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Student;
use App\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    function verify(Request $request){
        $check = Student::where('index_no',$request->index)->first();
        if ($check){
            if ($check->status == 1){
                return redirect()->back()->with('error','You have already voted!');
            }else{
                session()->put('index',$check->index_no);
                return redirect()->route('web.president');
            }
        }else{
            return redirect()->back()->with('error','Index number '.$request->index .' does not exist!.');
        }
    }

    function votePresident($id,$vote){
        session()->put("president",["candidate"=>$id,'vote'=>$vote]);
        return redirect()->route('web.treasurer');
    }

    function voteTreasurer(Request $request){
        session()->put("treasurer",$request->candidate_id);
        return redirect()->route('web.secretary');
    }

    function voteSecretary(Request $request){
        session()->put("secretary",$request->candidate_id);
        return redirect()->route('web.organizing');
    }

    function voteOrganizer($id,$vote){
        session()->put("organizer",["candidate"=>$id,'vote'=>$vote]);
        return redirect()->route('web.sports');
    }

    function voteSport(Request $request){
        session()->put("sport",$request->candidate_id);
        return redirect()->route('app.vote.confirm');
    }

    function voteConfirm(){
        $president = Candidate::where('id',session('president')["candidate"])->first();
        $treasurer = Candidate::where('id',session('treasurer'))->first();
        $secretary = Candidate::where('id',session('secretary'))->first();
        $organizer = Candidate::where('id',session('organizer')["candidate"])->first();
        $sport = Candidate::where('id',session('sport'))->first();
        return view('confirm',compact('president','treasurer','secretary','organizer','sport'));
    }

    public function yesConfirm(){
        Vote::create([
           'candidate_id' => session('president')["candidate"],
           'vote' => session('president')["vote"]
        ]);
        Vote::create([
            'candidate_id' => session('treasurer'),
            'vote' => 1
        ]);
        Vote::create([
            'candidate_id' => session('secretary'),
            'vote' => 1
        ]);
        Vote::create([
            'candidate_id' =>session('organizer')["candidate"],
            'vote' => session('president')["vote"]
        ]);
        Vote::create([
           'candidate_id' => session('sport'),
           'vote' => 1
       ]);
        Student::where('index_no',session()->get('index'))
            ->update(['status'=> 1]);
        session()->flush();

        return redirect()->route('web.home')
            ->with('success','Thank you for voting');
    }

    public function noConfirm(){
        return redirect()->route('web.president');
    }
}
