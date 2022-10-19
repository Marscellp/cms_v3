<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $pageTitle, $componentName;       
    public $selected_id;   

    public function index()
    {
        //
        $data = User::orderBy('id', 'asc')->get();
        return view('pages.user.user', [
            'data' => $data, 
            'selected_id' => $this->selected_id,
            'pageTitle' => $this->pageTitle,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.user.createuser'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user_add = User::create([
            'name'      =>$request->get('name'),
            'apellido'     =>$request->get('apellido'),
            'cedula'        =>$request->get('cedula'),
            'password'  =>bcrypt($request->get('cedula')),
            'edad'     =>$request->get('edad'),
            'especialidad'      =>$request->get('especialidad'),
            'semestre'    =>$request->get('semestre'),
            'uc'    =>$request->get('uc'),
            'email'    =>$request->get('email'),
            'type'    =>$request->get('type'),
        ]);
        if($user_add){
            Alert::success('Success', 'Usuario creado');
        }else{
            Alert::error('Failed', 'Registration failed');
        }
        return redirect()->route('users.index');
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
    public function edit(User $user)
    {
        //
        return view("pages.user.updateuser", [
            "user" => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $user->fill($request->input())->saveOrFail();
        if($user){
            Alert::success('Success', 'Usuario modificado');
        }else{
            Alert::error('Failed', 'Registration failed');
        }
        return redirect()->route("users.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        if($user){
            Alert::success('Success', 'Usuario eliminado correctamente');
        }else{
            Alert::error('Failed', 'Registration failed');
        }
        return redirect()->route("users.index");
    }
}
