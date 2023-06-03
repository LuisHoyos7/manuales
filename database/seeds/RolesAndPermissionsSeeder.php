<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // array de permisos 
        $permission_array = [];
        array_push($permission_array, Permission::create(['name' => 'users_edit']));
        array_push($permission_array, Permission::create(['name' => 'users_show']));
        array_push($permission_array, Permission::create(['name' => 'users_delete']));
        array_push($permission_array, Permission::create(['name' => 'users_create']));

        //permisos rolo asesor
        $permission_asesor =          Permission::create(['name' => 'cotizar']);
        array_push($permission_array, $permission_asesor);

        // role super-admin
        $roleSuperAdmin = Role::create(['name' => 'administrador']);
        //asignacion de permisos añ rol super-admin
        $roleSuperAdmin->syncPermissions($permission_array);
        //rol asesor 
        $roleAsesor = Role::create(['name' => 'avanzado']);
        $roleBasico = Role::create(['name' => 'basico']);
        //asignacion de permisos al rol asesor 
        $roleAsesor->givePermissionTo($permission_asesor);

        //creacion de usuario super admin
        $superAdminUser =  User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'state' => 'Activo'
        ]);
        //asignacion de rol a usuario admin
        $superAdminUser->assignRole('administrador');
    }
}
