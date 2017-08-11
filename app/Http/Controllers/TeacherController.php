<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('teacher.index',['teachers'=>Teacher::with('user')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('teacher.create');
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
        $t=Teacher::create([
            'firstname'=>$request['nombre'],
            'secondname'=>$request['segundonombre'],
            'lastname'=>$request['apellidos'],
            'birhtdate'=>$request['fechanacimiento'],
            'photo'=>$request['foto']
                           ]);
        
        User::create([
            'email'=>$request['usuario'],
            'teacher_id'=>$t->id,
            'usertype'=>$request['tipousuario'],
            'password'=>bcrypt($request['contrasena'])
        ]);
        return redirect('/teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
        $u=User::find($teacher->id);
        return view('teacher.edit',['t'=>$teacher,'u'=>$u]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $t=Teacher::findOrFail($teacher->id);
        $t->firstname=$request['name'];
        $t->secondname=$request['segundonombre'];
        $t->lastname=$request['apellidos'];
        $t->photo=$request['foto'];
        $t->user[0]->email=$request['usuario'];
        
        $t->save();
        
        return redirect('/teacher');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
        $t=Teacher::findOrFail($teacher->id);
        $t->delete();
        return redirect('/teacher');
        
    }
}
