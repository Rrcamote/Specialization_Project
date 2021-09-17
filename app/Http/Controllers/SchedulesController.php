<?php

namespace App\Http\Controllers;

use App\Models\Schedules;
use App\Models\Massage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('is-admin', auth()->user())){
            $schedules = Schedules::with('massage','user')->get();
            return view('admin.schedules')->with('schedules',$schedules);
        }else{
            return redirect('/user');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Massage $msgg)
    {
        $this->validate($request, [
            'hours' => 'required',
            'date' => 'required'
        ]);

        $total = $msgg->rate * $request->input('hours');
        
        $schedule = new Schedules;
        $schedule->hours = $request->input('hours');
        $schedule->total = $total;
        $schedule->massage_id = $msgg->id;
        $schedule->scheduled_date = $request->input('date');
        $schedule->user_id = auth()->user()->id;
        $schedule->save();

        return redirect('/user');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function show(Schedules $schedules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedules $schedules)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     *
     * @param  \App\Models\Schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function update(Schedules $schedule)
    {
        
        $schedule->update(['status' => 1]);
        return redirect('/admin/schedules');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedules $schedules)
    {
        //
    }

    public function userSchedules()
    {
        if(Gate::allows('is-admin', auth()->user())){
            return redirect('/admin');
        }else{
            $schedules = Schedules::where('user_id', auth()->user()->id)->with('massage','user')->get();
            return view('user.schedules')->with('schedules', $schedules);
        }
        
    }
}
