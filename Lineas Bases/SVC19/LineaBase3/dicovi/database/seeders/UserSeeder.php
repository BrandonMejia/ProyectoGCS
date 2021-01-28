<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user01 = new User();
        $user01->name = "Juan";
        $user01->apellidoP = "Sanchez";
        $user01->apellidoM = "Ramirez";
        $user01->dni = '123456789';
        $user01->password = bcrypt('123456789');
        $user01->categoria = "comun";
        $user01->centro_id = null;
        $user01->save();

        $user02 = new User();
        $user02->name = "Pedro";
        $user02->apellidoP = "Jimenez";
        $user02->apellidoM = "Suarez";
        $user02->dni = '12345679';
        $user02->password = bcrypt(12345679);
        $user02->categoria = "comun";
        $user02->centro_id = null;
        $user02->save();

        $user03 = new User();
        $user03->name = "Renzo";
        $user03->apellidoP = "Sanchez";
        $user03->apellidoM = "Hidalgo";
        $user03->dni = '12345680';
        $user03->password = bcrypt('12345680');
        $user03->categoria = "comun";
        $user03->centro_id = 8;
        $user03->save();

        $user04 = new User();
        $user04->name = "Pablo";
        $user04->apellidoP = "Miranda";
        $user04->apellidoM = "Gonzalez";
        $user04->dni = '12345681';
        $user04->password = bcrypt('12345681');
        $user04->categoria = "comun";
        $user04->centro_id = 10;
        $user04->save();

        $user04 = new User();
        $user04->name = "Pablo";
        $user04->apellidoP = "Miranda";
        $user04->apellidoM = "Gonzalez";
        $user04->dni = '12345678';
        $user04->password = bcrypt('12345678');
        $user04->categoria = "comun";
        $user04->centro_id = 10;
        $user04->save();

    }
}
