<?php

namespace App\Http\Controllers;
use App\Models\vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class voteController extends Controller
{

    public function __construct()
    {

    }

    public function vote(){
        $test = vote::all()->where('user_id',Auth::user()->id);
        return view('vote',['test'=>$test]);
    }
    public function quick(){
        $satu = vote::all()->where('vote_kandidat' , '1');
        $dua = vote::all()->where('vote_kandidat' , '2');

        return view('quick',['satu'=> $satu],['dua'=>$dua]);
    }

    public function votes($id,$ids){
        $vote = new vote();
        $vote->user_id = $ids;
        $vote->vote_kandidat = $id;
        $vote->save();
        return redirect('/quick');
    }
}
