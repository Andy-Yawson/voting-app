<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Vote;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    function monitor(){
        return view('admin.monitor');
    }

    function presidentData(){
        $president = Candidate::where('role_id',1)->first();
        $yesVotes = $president->votes->where('vote',1)->count();
        $noVotes = $president->votes->where('vote',0)->count();
        return response([
            'name' => $president->name,
            'yesVotes' => $yesVotes,
            'noVotes' => $noVotes
        ]);
    }

    function treasurerData(){
        $treasurers = Candidate::where('role_id',2)->get();
        $data = array();
        foreach ($treasurers as $treasurer){
            $data[] = array(
                'name' => $treasurer->name,
                'votes' => $treasurer->votes->count()
            );
        }
        return response($data);
    }

    function secretaryData(){
        $secretary = Candidate::where('role_id',3)->get();
        $data = array();
        foreach ($secretary as $sec){
            $data[] = array(
                'name' => $sec->name,
                'votes' => $sec->votes->count()
            );
        }
        return response($data);
    }

    function organizerData(){
        $organizer = Candidate::where('role_id',4)->first();
        $yesVotes = $organizer->votes->where('vote',1)->count();
        $noVotes = $organizer->votes->where('vote',0)->count();
        return response([
            'name' => $organizer->name,
            'yesVotes' => $yesVotes,
            'noVotes' => $noVotes
        ]);
    }

    function sportsData(){
        $sports = Candidate::where('role_id',5)->get();
        $data = array();
        foreach ($sports as $sport){
            $data[] = array(
                'name' => $sport->name,
                'votes' => $sport->votes->count()
            );
        }
        return response($data);
    }

    function election(){
        $president = Candidate::where('role_id',1)->first();
        $presYes = $president->votes->where('vote',1)->count();
        $presNo = $president->votes->where('vote',0)->count();

        $treasurers = Candidate::where('role_id',2)->get();
        $secretary = Candidate::where('role_id',3)->get();

        $organizer = Candidate::where('role_id',4)->first();
        $orgYes = $organizer->votes->where('vote',1)->count();
        $orgNo = $organizer->votes->where('vote',0)->count();

        $sports = Candidate::where('role_id',5)->get();

        return view('admin.result',compact('president','presYes','presNo','treasurers','secretary','organizer','orgYes','orgNo','sports'));
    }
}
