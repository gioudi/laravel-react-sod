<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role1 = Role::create(['name' => 'admin']);
        $role1->givePermissionTo(
            'Navegar usuarios'

        );

        $role1->givePermissionTo(
            'Creación de usuarios'

        );

        $role1->givePermissionTo(
            'Ver detalle de usuario'

        );

        $role1->givePermissionTo(
            'Edición de usuarios'

        );

        $role1->givePermissionTo(
            'Eliminar usuario'

        );

        $role1->givePermissionTo(
            'Navegar roles'

        );

        $role1->givePermissionTo(
            'Ver detalle de un rol'

        );

        $role1->givePermissionTo(
            'Creación de roles'

        );

        $role1->givePermissionTo(
            'Edición de roles'

        );

        $role1->givePermissionTo(
            'Eliminar roles'

        );

        $role1->givePermissionTo(
            'Navegar categorías'

        );
        $role1->givePermissionTo(
            'Ver detalle de categoría'

        );
        $role1->givePermissionTo(
            'Edición de categorías'

        );
        $role1->givePermissionTo(
            'Creación de categorías'

        );
        $role1->givePermissionTo(
            'Eliminar categorías'

        );

        $role1->givePermissionTo(
            'Navegar por clientes'

        );
        $role1->givePermissionTo(
            'Ver detalle de cliente'

        );
        $role1->givePermissionTo(
            'Edición de clientes'

        );
        $role1->givePermissionTo(
            'Creación de clientes'

        );
        $role1->givePermissionTo(
            'Eliminar clientes'

        );



        $role1->givePermissionTo(
            'Navegar por productos'

        );
        $role1->givePermissionTo(
            'Ver detalle de producto'

        );
        $role1->givePermissionTo(
            'Edición de productos'

        );
        $role1->givePermissionTo(
            'Creación de productos'

        );
        $role1->givePermissionTo(
            'Eliminar productos'

        );



        $role1->givePermissionTo(
            'Navegar por proveedores'

        );
        $role1->givePermissionTo(
            'Ver detalle de proveedor'

        );
        $role1->givePermissionTo(
            'Edición de proveedores'

        );
        $role1->givePermissionTo(
            'Creación de proveedores'

        );
        $role1->givePermissionTo(
            'Eliminar proveedores'

        );


        $role1->givePermissionTo(
            'Navegar por compras'

        );
        $role1->givePermissionTo(
            'Ver detalle de compra'

        );
        $role1->givePermissionTo(
            'Creación de compras'

        );


        $role1->givePermissionTo(
            'Navegar por ventas'

        );
        $role1->givePermissionTo(
            'Ver detalle de venta'

        );
        $role1->givePermissionTo(
            'Creación de ventas'

        );


        $role1->givePermissionTo(
            'Descargar PDF reporte de compras'

        );


        $role1->givePermissionTo(
            'Descargar PDF reporte de ventas'

        );

        $role1->givePermissionTo(
            'Imprimir boleta de venta'

        );



        $role1->givePermissionTo(
            'Ver datos de la empresa'

        );
        $role1->givePermissionTo(
            'Edición de empresa'

        );

        $role1->givePermissionTo(
            'er datos de la impresora'

        );
        $role1->givePermissionTo(
            'Edición de impresora'

        );

        $role1->givePermissionTo(
            'Subir archivo de compra'

        );

        $role1->givePermissionTo(
            'Cambiar estado de producto'

        );

        $role1->givePermissionTo(
            'Cambiar estado de compra'

        );

        $role1->givePermissionTo(
            'Cambiar estado de venta'

        );


        $role1->givePermissionTo(
            'Reporte por día'

        );
        $role1->givePermissionTo(
            'Reporte por fechas'

        );


        $role2 = Role::create(['name' => 'Super-Admin']);


        $user = User::create([
            'name'=>'Example',
            'email'=>'example@gmail.com',
            'password'=>  bcrypt(12345),
        ]);

        $user->assignRole($role1);

        $user = User::create([
            'name'=>'Sadmin',
            'email'=>'sadmin@gmail.com',
            'password'=>  bcrypt(12345)
        ]);

        $user->assignRole($role2);

     
    }
}
