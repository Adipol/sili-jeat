<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Entity;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

//use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:Leer usuarios')->only('index');
        // $this->middleware('can:Crear usuarios')->only('create', 'store');
        $this->middleware('can:Editar usuarios')->only('edit', 'update');
        $this->middleware('can:Eliminar usuarios')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $entities = Entity::all()->pluck('name', 'id');

        return view('admin.users.create', compact('roles', 'entities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'entity' => 'required',
        ]);

        $user        = new User();
        $user->name  = $request->get('name');
        $user->email = $request->get('email');
        $password    = "123";

        if ($password) {
            $user->password = bcrypt($password);
        }

        $user->entity_id = $request->get('entity');
        $user->save();

        return redirect()->route('admin.users.index')->with('info', 'El usuario se creo satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        $entities = Entity::all();
        // Lista de zonas horarias disponibles
        $timezones = [
            'America/La_Paz' => 'America/La_Paz (Bolivia)',
            'America/Tegucigalpa' => 'America/Tegucigalpa (Honduras)',
            'America/El_Salvador' => 'America/El_Salvador (El Salvador)',
            'America/Managua' => 'America/Managua (Nicaragua)',
            'America/Asuncion' => 'America/Asuncion (Paraguay)',
            'America/Guatemala' => 'America/Guatemala (Guatemala)',
        ];

        return view('admin.users.edit', compact('user', 'roles', 'entities', 'timezones'));
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'entity_id' => 'required|exists:entities,id',
            'timezone' => 'nullable|string',
            'roles' => 'nullable|array',
            'roles.*' => 'exists:roles,id'
        ]);

        // Actualizar nombre y correo
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'entity_id' => $request->entity_id,
            'timezone' => $request->timezone
        ]);
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.edit', $user)->with('info', 'Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // Verificar que no sea el usuario autenticado
        if ($user->id == auth()->id()) {
            return redirect()->route('admin.users.index')
                ->with('error', 'No puedes eliminar tu propio usuario');
        }

        $user->delete();

        return redirect()->route('admin.users.index')
            ->with('info', 'El usuario se eliminó correctamente');
    }
}
