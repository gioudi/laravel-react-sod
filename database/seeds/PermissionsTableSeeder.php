<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'          => 'Navegar usuarios',

        ]);

        Permission::create([
            'name'          => 'Creación de usuarios',

        ]);

        Permission::create([
            'name'          => 'Ver detalle de usuario',

        ]);

        Permission::create([
            'name'          => 'Edición de usuarios',

        ]);

        Permission::create([
            'name'          => 'Eliminar usuario',

        ]);

        Permission::create([
            'name'          => 'Navegar roles',

        ]);

        Permission::create([
            'name'          => 'Ver detalle de un rol',

        ]);

        Permission::create([
            'name'          => 'Creación de roles',

        ]);

        Permission::create([
            'name'          => 'Edición de roles',

        ]);

        Permission::create([
            'name'          => 'Eliminar roles',

        ]);

        Permission::create([
            'name' => 'Navegar categorías',

        ]);
        Permission::create([
            'name' => 'Ver detalle de categoría',

        ]);
        Permission::create([
            'name' => 'Edición de categorías',

        ]);
        Permission::create([
            'name' => 'Creación de categorías',

        ]);
        Permission::create([
            'name' => 'Eliminar categorías',

        ]);

        Permission::create([
            'name' => 'Navegar por clientes',

        ]);
        Permission::create([
            'name' => 'Ver detalle de cliente',

        ]);
        Permission::create([
            'name' => 'Edición de clientes',

        ]);
        Permission::create([
            'name' => 'Creación de clientes',

        ]);
        Permission::create([
            'name' => 'Eliminar clientes',

        ]);



        Permission::create([
            'name' => 'Navegar por productos',

        ]);
        Permission::create([
            'name' => 'Ver detalle de producto',

        ]);
        Permission::create([
            'name' => 'Edición de productos',

        ]);
        Permission::create([
            'name' => 'Creación de productos',

        ]);
        Permission::create([
            'name' => 'Eliminar productos',

        ]);



        Permission::create([
            'name' => 'Navegar por proveedores',

        ]);
        Permission::create([
            'name' => 'Ver detalle de proveedor',

        ]);
        Permission::create([
            'name' => 'Edición de proveedores',

        ]);
        Permission::create([
            'name' => 'Creación de proveedores',

        ]);
        Permission::create([
            'name' => 'Eliminar proveedores',

        ]);


        Permission::create([
            'name' => 'Navegar por compras',

        ]);
        Permission::create([
            'name' => 'Ver detalle de compra',

        ]);
        Permission::create([
            'name' => 'Creación de compras',

        ]);


        Permission::create([
            'name' => 'Navegar por ventas',

        ]);
        Permission::create([
            'name' => 'Ver detalle de venta',

        ]);
        Permission::create([
            'name' => 'Creación de ventas',

        ]);


        Permission::create([
            'name' => 'Descargar PDF reporte de compras',

        ]);


        Permission::create([
            'name' => 'Descargar PDF reporte de ventas',

        ]);

        Permission::create([
            'name' => 'Imprimir boleta de venta',

        ]);



        Permission::create([
            'name' => 'Ver datos de la empresa',

        ]);
        Permission::create([
            'name' => 'Edición de empresa',

        ]);

        Permission::create([
            'name' => 'er datos de la impresora',

        ]);
        Permission::create([
            'name' => 'Edición de impresora',

        ]);

        Permission::create([
            'name' => 'Subir archivo de compra',

        ]);

        Permission::create([
            'name' => 'Cambiar estado de producto',

        ]);

        Permission::create([
            'name' => 'Cambiar estado de compra',

        ]);

        Permission::create([
            'name' => 'Cambiar estado de venta',

        ]);


        Permission::create([
            'name' => 'Reporte por día',

        ]);
        Permission::create([
            'name' => 'Reporte por fechas',

        ]);
    }
}
