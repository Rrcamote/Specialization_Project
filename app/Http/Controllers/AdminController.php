<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Massage;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('is-admin', auth()->user())){
            $massage = Massage::all();
            return view('admin.home')->with('massages', $massage);
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'rate' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);
    
        //Handle File Upload
        if($request->hasFile('image')){
            //Get the filename with extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //Upload the image
            $path = $request->file('image')->storeAs('public/img', $fileNameToStore);
        }else{
           $fileNameToStore = 'noImage.png';
        }
        
        $massage = new Massage;
        $massage->name = $request->input('name');
        $massage->rate = $request->input('rate');
        $massage->image = $fileNameToStore;
        $massage->save();

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Massage $massage)
    {
        if(Gate::allows('is-admin', auth()->user())){
            return view('admin.edit')->with('massage', $massage);
        }else{
            return redirect('/user');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
