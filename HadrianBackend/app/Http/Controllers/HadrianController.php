<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hadrian;
class HadrianController extends Controller
{
    public function index(){
        return Hadrian::all();
    }


    public function store(Request $request)
    {
        return Hadrian::create([
            'name' => $request->name,
            ' email' => $request->email,
            'password' => $request->password
        ]);
    }

    public function show($id)
    {
        return Hadrian::findOrFail($id);
    }

    public function destroy($id)
    {
       return Hadrian::find($id)->delete();
    }

    public function update(Request $request, $id)
    {
        Hadrian::find($id)->update([
            'name' => $request->name,
            ' email' => $request->email,
            'password' => $request->password
        ]);
    }
}
