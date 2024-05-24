<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $registros=User::where('name', 'like', '%' . $texto . '%')->paginate(10);
        return view('user.index',compact('registros','texto'));
    }

    public function create()
    {
        $user= new User();
        return view('user.action',['user'=>new User()]);
    }

    public function store(UserRequest $request)
    {
        $registro = new User;
        $registro->name = $request->input('name');
        $registro->email = $request->input('email');
        $registro->password = Hash::make($request->input('password'));
        $registro->save();
        
        return response()->json([
            'status' => 'success',
            'message' => 'Usuario creado satisfactoriamente'
        ]);
    }

    public function show(User $user)
    {
        return "Mostrar";
    }

    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('user.action',compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $registro = User::findOrFail($id);
        $registro->name = $request->input('name');
        $registro->email = $request->input('email');
        // Verificar si el campo de contraseña está presente en la solicitud
        if ($request->has('password')) {
            $registro->password = Hash::make($request->input('password'));
        }
        $registro->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Actualización de datos satisfactoria'
        ]);
    }

    public function destroy($id)
    {
        $registro = User::findOrFail($id);
        $registro->delete();

        return response()->json([
            'status' => 'success',
            'message' => $registro->nombre . ' Eliminado'
        ]);
    }
}