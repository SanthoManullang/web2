<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $data_register = \App\Register::all();
        return view('register.index', ['data_register' => $data_register]);
    }

    public function create(Request $request)
    {
        \App\Register::create($request->all());
        return redirect('/register')->with('sukses', 'Data Berhasil Masuk');
    }

    public function edit($id)
    {
        $register = \App\Register::find($id);
        return view('register/edit', ['register' => $register]);
    }

    public function update(Request $request, $id)
    {
        $register = \App\Register::find($id);
        $register->update($request->all());
        return redirect('/register')->with('sukses', 'Data Berhasil Di Update');
    }

    public function delete($id)
    {
        $register = \App\Register::find($id);
        $register->delete($register);
        return redirect('/register')->with('sukses', 'Data Berhasil Di Hapus');
    }
}