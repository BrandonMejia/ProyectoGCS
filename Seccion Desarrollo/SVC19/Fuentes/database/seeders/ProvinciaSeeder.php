<?php

namespace Database\Seeders;
use App\Models\Provincia;
use Illuminate\Database\Seeder;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provincia01 = new Provincia();
        $provincia01->nombre = "Lima";
        $provincia01->departamento_id = 15;
        $provincia01->save();

        $provincia02 = new Provincia();
        $provincia02->nombre = "Barranca";
        $provincia02->departamento_id = 15;
        $provincia02->save();

        $provincia03 = new Provincia();
        $provincia03->nombre = "Cajatambo";
        $provincia03->departamento_id = 15;
        $provincia03->save();

        $provincia04 = new Provincia();
        $provincia04->nombre = "Canta";
        $provincia04->departamento_id = 15;
        $provincia04->save();

        $provincia05 = new Provincia();
        $provincia05->nombre = "Cañete";
        $provincia05->departamento_id = 15;
        $provincia05->save();

        $provincia06 = new Provincia();
        $provincia06->nombre = "Huaral";
        $provincia06->departamento_id = 15;
        $provincia06->save();

        $provincia07 = new Provincia();
        $provincia07->nombre = "Huarochiri";
        $provincia07->departamento_id = 15;
        $provincia07->save();

        $provincia08 = new Provincia();
        $provincia08->nombre = "Huaura";
        $provincia08->departamento_id = 15;
        $provincia08->save();

        $provincia09 = new Provincia();
        $provincia09->nombre = "Oyon";
        $provincia09->departamento_id = 15;
        $provincia09->save();

        $provincia10 = new Provincia();
        $provincia10->nombre = "Yauyos";
        $provincia10->departamento_id = 15;
        $provincia10->save();

        $provincia11 = new Provincia();
        $provincia11->nombre = "Chachapoyas";
        $provincia11->departamento_id = 1;
        $provincia11->save();

        $provincia12 = new Provincia();
        $provincia12->nombre = "Huaraz";
        $provincia12->departamento_id = 2;
        $provincia12->save();

        $provincia13 = new Provincia();
        $provincia13->nombre = "Abancay";
        $provincia13->departamento_id = 3;
        $provincia13->save();

        $provincia14 = new Provincia();
        $provincia14->nombre = "Arequipa";
        $provincia14->departamento_id = 4;
        $provincia14->save();

        $provincia15 = new Provincia();
        $provincia15->nombre = "Huamanga";
        $provincia15->departamento_id = 5;
        $provincia15->save();

        $provincia16 = new Provincia();
        $provincia16->nombre = "Cajamarca";
        $provincia16->departamento_id = 6;
        $provincia16->save();

        $provincia17 = new Provincia();
        $provincia17->nombre = "Callao";
        $provincia17->departamento_id = 7;
        $provincia17->save();

        $provincia18 = new Provincia();
        $provincia18->nombre = "Cusco";
        $provincia18->departamento_id = 8;
        $provincia18->save();

        $provincia19 = new Provincia();
        $provincia19->nombre = "Huancavelica";
        $provincia19->departamento_id = 9;
        $provincia19->save();

        $provincia20 = new Provincia();
        $provincia20->nombre = "Huanuco";
        $provincia20->departamento_id = 10;
        $provincia20->save();

        $provincia21 = new Provincia();
        $provincia21->nombre = "Ica";
        $provincia21->departamento_id = 11;
        $provincia21->save();

        $provincia22 = new Provincia();
        $provincia22->nombre = "Huancayo";
        $provincia22->departamento_id = 12;
        $provincia22->save();

        $provincia23 = new Provincia();
        $provincia23->nombre = "Trujillo";
        $provincia23->departamento_id = 13;
        $provincia23->save();

        $provincia24 = new Provincia();
        $provincia24->nombre = "Chiclayo";
        $provincia24->departamento_id = 14;
        $provincia24->save();

        $provincia25 = new Provincia();
        $provincia25->nombre = "Maynas";
        $provincia25->departamento_id = 16;
        $provincia25->save();

        $provincia26 = new Provincia();
        $provincia26->nombre = "Tambopata";
        $provincia26->departamento_id = 17;
        $provincia26->save();

        $provincia27 = new Provincia();
        $provincia27->nombre = "Mariscal Nieto";
        $provincia27->departamento_id = 18;
        $provincia27->save();

        $provincia28 = new Provincia();
        $provincia28->nombre = "Pasco";
        $provincia28->departamento_id = 19;
        $provincia28->save();

        $provincia29 = new Provincia();
        $provincia29->nombre = "Piura";
        $provincia29->departamento_id = 20;
        $provincia29->save();

        $provincia30 = new Provincia();
        $provincia30->nombre = "Puno";
        $provincia30->departamento_id = 21;
        $provincia30->save();

        $provincia31 = new Provincia();
        $provincia31->nombre = "Moyobamba";
        $provincia31->departamento_id = 22;
        $provincia31->save();

        $provincia32 = new Provincia();
        $provincia32->nombre = "Tacna";
        $provincia32->departamento_id = 23;
        $provincia32->save();

        $provincia33 = new Provincia();
        $provincia33->nombre = "Tumbes";
        $provincia33->departamento_id = 24;
        $provincia33->save();

        $provincia34 = new Provincia();
        $provincia34->nombre = "Portillo";
        $provincia34->departamento_id = 25;
        $provincia34->save();
    }
}

