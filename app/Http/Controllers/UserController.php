<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Massage;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        if(Gate::allows('is-admin', auth()->user())){
            $massage = Massage::all();
            return redirect('/admin');
        }else{
            $massages = Massage::paginate(2);
            return view('user.home')->with('massages', $massages);
        }
        
    }

    public function create(Massage $massage){
        return view('user.book')->with('massage', $massage);
    }

    public function schedules(){
        $schedules = Schedules::where('user_id', auth()->user()->id)->with('massage','user')->get();
        // return view('user.schedules')->with('schedules', $schedules);
        return $schedules;
    }

}
