<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
Use Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->input()){
            $data = array(
                'name' => $request->input('fname'),
                'email' => $request->input('email'),
                'address' => $request->input('address')
                );
            user::insert($data);
            return Redirect::to('/user/show'); 
        }
      return view('addview');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = user::all();
        return view('listview',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user , Request $request)
    {
        if($request->input()){
            $id = $request->input('id');
            $data = array(
                'name' => $request->input('fname'),
                'email' => $request->input('email'),
                'address' => $request->input('address')
                );
          // print_r($request->input());
            user::where('id',$id)->update($data);
            return Redirect::to('/user/show'); 
        }
        
        return view('editview',compact('user'));
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
        user::where('id',$id)->delete();
            return Redirect::to('/user/show');
    }
}
