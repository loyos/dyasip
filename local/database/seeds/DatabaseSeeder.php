<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Pedidos;
use Faker\Factory as Faker;
use App\User;
use App\Productos;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

//		 $this->call('UserTableSeeder');

        $this->call('UsersTableSeeder');
        $this->call('ProductosTableSeeder');
//        $this->call('PedidosTableSeeder');

	}

}

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        DB::table('users')->delete();

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make("123123"),
            'rol' => 'admin'
        ]);

        for( $i = 0; $i< 10; $i++ )
        {

            User::create([
                'name' => $faker->unique()->name(),
//                'id' => $faker->unique()->randomNumber($nbDigits = 1),
                'email' => $faker->unique()->email(),
                'password' => Hash::make("123123"),
                'rol' => 'sucursal'
            ]);
            //        $table->string('number')->unique();
        }
    }

}

class PedidosTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        DB::table('pedidos')->delete();

        for( $i = 0; $i< 10; $i++ )
        {

            Pedidos::create([
//                'user_id' => $faker->unique()->randomNumber($nbDigits = 1),
                  'user_id' => 1,
//                'product_id' => $faker->word(),
//                'cantidad' => $faker->randomNumber($nbDigits = 2),


            ]);
            //        $table->string('number')->unique();
        }
    }

}

class ProductosTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        DB::table('productos')->delete();

        for( $i = 0; $i< 10; $i++ )
        {

            Productos::create([
                'nombre' => $faker->unique()->name(),
                'descripcion' => $faker->unique()->word(),
                'disponibles' =>  $faker->randomNumber($nbDigits = 2),
                'precio' =>  $faker->randomFloat($nbDigits = 4),

            ]);
            //        $table->string('number')->unique();
        }
    }

}
