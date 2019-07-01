<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Models\Person;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\ShoppingCart;
use App\Models\inShoppingCart;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
    	DB::table('users')->delete();
    	DB::table('people')->delete();

        // -----------------------------------------------------------------------
    	$persona = Person::create([
    		'ci'			=>	'26039408',
    		'firstname'		=>	'Jhonny Jose',
    		'lastname'		=>	'Pérez Martinez',
    		'birthdate'		=>	'2019-02-27',
    		'phone'			=>	'04161428973',
    		'address'		=>	'villa de cura, las mercedes, callejon tucupido, casa #1.',
    		'created_at'	=>	now(),
    		'updated_at'	=>	now()
    	]);
        
        // -----------------------------------------------------------------------
        $usuario = User::create([
        	'name' 				=>	'admin',
        	'type'				=>	'administrador',
	        'email' 			=>	'admin@admin.com',
	        'email_verified_at' =>	now(),
	        'password' 			=>	bcrypt('admin'),
	        'remember_token' 	=>	Str::random(10),
	        'person_id'			=>	$persona->id,
	        'created_at'		=>	now(),
    		'updated_at'		=>	now()
        ]);

        // -----------------------------------------------------------------------
        $categorias = [
            'Cuadernos',
            'Lapices',
            'Morrales',
            'Temperas',
            'Pegamentos',
            'Borradores',
            'Sacapuntas'
        ];

        foreach($categorias as $categoria):
            Category::create([
                'name'          =>  $categoria,
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
            ]);
        endforeach;

        // -----------------------------------------------------------------------
        $productos = [
            'Lapiz',
            'Cuaderno',
            'Sacapunta',
            'Libreta',
            'Bolso'
        ];

        foreach ($productos as $producto):
            Product::create([
                'code'              =>  str_random(5),
                'name'              =>  $producto,
                'description'       =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'pricing'           =>  rand(100,1000),
                'user_id'           =>  '1',
                'category_id'       =>  rand(1,7)
            ]);
        endforeach;

        // -----------------------------------------------------------------------
    }
}
