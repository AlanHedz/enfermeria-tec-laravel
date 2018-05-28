<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Navegar Usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name' => 'Crear Usuario',
            'slug' => 'users.create',
            'description' => 'Creacion de usuario del sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de usuario',
            'slug' => 'users.show',
            'description' => 'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name' => 'Edicion de usuarios',
            'slug' => 'users.edit',
            'description' => 'Editar cualquier usuario del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar usuario',
            'slug' => 'users.destroy',
            'description' => 'Eliminar cualquier usuario del sistema',
        ]);
        //Roles
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description' => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de rol',
            'slug' => 'roles.show',
            'description' => 'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
            'name' => 'Creacion de roles',
            'slug' => 'roles.create',
            'description' => 'Creacion de cada rol del sistema',
        ]);
        Permission::create([
            'name' => 'Edicion de roles',
            'slug' => 'roles.edit',
            'description' => 'Editar cualquier rol del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar rol',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar cualquier rol del sistema',
        ]);
        // Alumnos
        Permission::create([
            'name' => 'Navegar Alumnos',
            'slug' => 'students.index',
            'description' => 'Lista y navega todos los alumnos del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de alumnos',
            'slug' => 'students.show',
            'description' => 'Ver en detalle cada alumno del sistema',
        ]);
        Permission::create([
            'name' => 'Creacion de alumno',
            'slug' => 'students.create',
            'description' => 'Creacion de cada alumno del sistema',
        ]);
        Permission::create([
            'name' => 'Edicion de alumnos',
            'slug' => 'students.edit',
            'description' => 'Editar cualquier alumno del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar alumno',
            'slug' => 'students.destroy',
            'description' => 'Eliminar cualquier alumno del sistema',
        ]);
        // Empleados
        Permission::create([
            'name' => 'Navegar Empleados',
            'slug' => 'employes.index',
            'description' => 'Lista y navega todos los empleados del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de Empleado',
            'slug' => 'employes.show',
            'description' => 'Ver en detalle cada empleado del sistema',
        ]);
        Permission::create([
            'name' => 'Creacion de Empleado',
            'slug' => 'employes.create',
            'description' => 'Creacion de cada empleado del sistema',
        ]);
        Permission::create([
            'name' => 'Edicion de Empleado',
            'slug' => 'employes.edit',
            'description' => 'Editar cualquier empleado del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar Empleado',
            'slug' => 'employes.destroy',
            'description' => 'Eliminar cualquier empleado del sistema',
        ]);
        // Servicios
        Permission::create([
            'name' => 'Navegar Servicios',
            'slug' => 'services.index',
            'description' => 'Lista y navega todos los servicios del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar Servicio',
            'slug' => 'services.destroy',
            'description' => 'Eliminar cualquier servicio del sistema',
        ]);
    }
}

