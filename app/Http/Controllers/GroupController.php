<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Leader;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validated = $request->validate([
                'line' => 'required|unique:leaders',
                'email' => 'required|unique:leaders',
                
            ],[
                'line.required' => 'line is required',
                'email.required' => 'email is required',
       
            ]);
       

        
        

        Group::create([
        
            'name'=>$request->groupName,
            'password' =>  bcrypt($request->pass)
          
        ]);

   
            $extension_cv = $request -> file('leaderCv')->getClientOriginalExtension();
            $extension_flazz= $request -> file('leaderFlazz')->getClientOriginalExtension();
            $extension_ktp = $request -> file('leaderKtp')->getClientOriginalExtension();
            $filename_cv = $request -> leaderName.'_'."cv".'.'.$extension_cv;
            $filename_flazz = $request -> leaderName.'_'."flazz".'.'.$extension_flazz;
            $filename_ktp = $request -> leaderName.'_'."ktp".'.'.$extension_ktp;
    
            $request->file('leaderCv')->storeAs('/public/Product/', $filename_cv);
            $request->file('leaderFlazz')->storeAs('/public/Product/', $filename_flazz);
            $request->file('leaderKtp')->storeAs('/public/Product/', $filename_ktp);

            Leader::create([
    
                'name'=>$request->leaderName,
                'email'=>$request->email,
                'whatsapp'=>$request->leaderWa,
                'line'=>$request->line,
                'github'=>$request->leaderGit,
                'birth_place'=>$request->leaderPlace,
                'birth_date'=> $request->leaderDate,
                'cv'=>$filename_cv,
                'flazz'=>$filename_flazz,
                'ktp'=>$filename_ktp,
                
            ]);
            return redirect('/');
      
        

        $url = action([LeaderController::class, 'store']);
        return redirect()->action([LeaderController::class, 'store']);
        //
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
    public function edit($id)
    {
        //
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
