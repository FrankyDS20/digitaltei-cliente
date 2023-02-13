<?php

namespace Database\Seeders;

use App\Models\Access_detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Access_detailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //!permiso de accesos
        //?id=1 
        $access_detail_1 = new Access_detail;
        $access_detail_1->name = 'Todos los permisos';
        $access_detail_1->reference = 'all';
        $access_detail_1->type = 'administrative';
        $access_detail_1->save();
        //?id=2 
        $access_detail_2 = new Access_detail;
        $access_detail_2->name = 'Agregar Registros';
        $access_detail_2->reference = 'creates';
        $access_detail_2->type = 'administrative';
        $access_detail_2->save();
        //?id=3 
        $access_detail_3 = new Access_detail;
        $access_detail_3->name = 'Editar Registros';
        $access_detail_3->reference = 'updates';
        $access_detail_3->type = 'administrative';
        $access_detail_3->save();
        //?id=4 
        $access_detail_4 = new Access_detail;
        $access_detail_4->name = 'Eliminar Registros';
        $access_detail_4->reference = 'deletes';
        $access_detail_4->type = 'administrative';
        $access_detail_4->save();
        //?id=5 
        $access_detail_5 = new Access_detail;
        $access_detail_5->name = 'Gestion de Empleados';
        $access_detail_5->reference = 'employee_management';
        $access_detail_5->type = 'administrative';
        $access_detail_5->save();
        //?id=6
        $access_detail_6 = new Access_detail;
        $access_detail_6->name = 'Venta Productos';
        $access_detail_6->reference = 'sale_products';
        $access_detail_6->type = 'sale';
        $access_detail_6->save();
        //?id=7
        $access_detail_7 = new Access_detail;
        $access_detail_7->name = 'Gestion de Productos';
        $access_detail_7->reference = 'product_management';
        $access_detail_7->type = 'administrative';
        $access_detail_7->save();
        //?id=8
        $access_detail_8 = new Access_detail;
        $access_detail_8->name = 'Gestion de Usuarios';
        $access_detail_8->reference = 'user_management';
        $access_detail_8->type = 'administrative';
        $access_detail_8->save();
    }
}
