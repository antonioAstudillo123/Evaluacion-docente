<?php

namespace App\Http\Controllers\Permisos;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class Configuracion extends Controller
{
    //Creamos un perfil dentro del sistema
    public function createRole($role){
        return Role::create(['name' => $role]);
    }

    //Creamos un permiso dentro del sistema
    public function createPermiso($permiso){
        return Permission::create(['name' => $permiso ]);
    }

    //Le asignamos a un usuario un role
    public function assignRoleUser($user , $role)
    {
        $user = User::find($user);
        return $user->assignRole($role);

    }
}
