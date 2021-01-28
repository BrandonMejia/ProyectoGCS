<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Centro;
class CentroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $centro01 = new Centro();
        $centro01->nombre = "Arzobispo Loayza";
        $centro01->url = "https://goo.gl/maps/TqreNA5uWsyzBJ3K6";
        $centro01->capacidad = 70;
        $centro01->distrito_id = 1;
        $centro01->save();

        $centro02 = new Centro();
        $centro02->nombre = "Hospital Barranca Cajatambo";
        $centro02->url = "https://goo.gl/maps/4EVa6LaQKJayCmqq7";
        $centro02->capacidad = 40;
        $centro02->distrito_id = 33;
        $centro02->save();

        $centro03 = new Centro();
        $centro03->nombre = "Centro de Salud CAJATAMBO";
        $centro03->url = "https://goo.gl/maps/uDNnmdeHSuqa39tf8";
        $centro03->capacidad = 30;
        $centro03->distrito_id = 34;
        $centro03->save();

        $centro04 = new Centro();
        $centro04->nombre = "Centro de Salud Base Canta";
        $centro04->url = "https://goo.gl/maps/VozpG9g9fY5akRun7";
        $centro04->capacidad = 30;
        $centro04->distrito_id = 35;
        $centro04->save();

        $centro05 = new Centro();
        $centro05->nombre = "Centro de Salud - San Vicente (SIS)";
        $centro05->url = "https://goo.gl/maps/uDNnmdeHSuqa39tf8";
        $centro05->capacidad = 30;
        $centro05->distrito_id = 36;
        $centro05->save();

        $centro06 = new Centro();
        $centro06->nombre = "Hospital San Juan Bautista";
        $centro06->url = "https://goo.gl/maps/cTfewjntDTcq9tsPA";
        $centro06->capacidad = 50;
        $centro06->distrito_id = 37;
        $centro06->save();

        $centro07 = new Centro();
        $centro07->nombre = "Hospital de Emergencias San Juan De Matucana";
        $centro07->url = "https://goo.gl/maps/udvN1tuiShESHfcD8";
        $centro07->capacidad = 30;
        $centro07->distrito_id = 38;
        $centro07->save();

        $centro08 = new Centro();
        $centro08->nombre = "Hospital Regional de Huacho";
        $centro08->url = "https://goo.gl/maps/AoyErRgMZf8MVruM9";
        $centro08->capacidad = 50;
        $centro08->distrito_id = 39;
        $centro08->save();

        $centro09 = new Centro();
        $centro09->nombre = "POSTA MEDICA DE OYON";
        $centro09->url = "https://goo.gl/maps/wmuBpn7VL17ahYKM7";
        $centro09->capacidad = 30;
        $centro09->distrito_id = 40;
        $centro09->save();

        $centro10 = new Centro();
        $centro10->nombre = "Centro de Salud Yauyos";
        $centro10->url = "https://goo.gl/maps/kJhQAsUet5hjgMX59";
        $centro10->capacidad = 30;
        $centro10->distrito_id = 41;
        $centro10->save();

        $centro11 = new Centro();
        $centro11->nombre = "EsSalud Chachapoyas";
        $centro11->url = "https://goo.gl/maps/uxvMUpUPBmc17gvK8";
        $centro11->capacidad = 70;
        $centro11->distrito_id = 42;
        $centro11->save();

        $centro12 = new Centro();
        $centro12->nombre = "Clínica San Pablo - Huaraz";
        $centro12->url = "https://goo.gl/maps/a6FSkmWZGAbeMaaG7";
        $centro12->capacidad = 40;
        $centro12->distrito_id = 43;
        $centro12->save();

        $centro13 = new Centro();
        $centro13->nombre = "Hospital II De Abancay ESSALUD";
        $centro13->url = "https://goo.gl/maps/EZTd6ivbN7Kamqpx8";
        $centro13->capacidad = 30;
        $centro13->distrito_id = 44;
        $centro13->save();

        $centro14 = new Centro();
        $centro14->nombre = "Hospital Goyeneche";
        $centro14->url = "https://goo.gl/maps/Rn6Gyqfk9RD8xymr5";
        $centro14->capacidad = 30;
        $centro14->distrito_id = 45;
        $centro14->save();

        $centro15 = new Centro();
        $centro15->nombre = "ESSALUD";
        $centro15->url = "https://goo.gl/maps/1BfnMRsn3A3nQUsU7";
        $centro15->capacidad = 30;
        $centro15->distrito_id = 46;
        $centro15->save();

        $centro16 = new Centro();
        $centro16->nombre = "EsSalud";
        $centro16->url = "https://goo.gl/maps/8EFHch2y3DNN2KSu9";
        $centro16->capacidad = 50;
        $centro16->distrito_id = 47;
        $centro16->save();

        $centro17 = new Centro();
        $centro17->nombre = "Policlinico Essalud";
        $centro17->url = "https://goo.gl/maps/bqyp9bJ1TzUQAvKU7";
        $centro17->capacidad = 30;
        $centro17->distrito_id = 48;
        $centro17->save();

        $centro18 = new Centro();
        $centro18->nombre = "Hospital Hna. Josefina Serrano";
        $centro18->url = "https://goo.gl/maps/w8LDWHbvkj1vrTqw7";
        $centro18->capacidad = 50;
        $centro18->distrito_id = 49;

        $centro19 = new Centro();
        $centro19->nombre = "Centro de Salud San Cristobal";
        $centro19->url = "https://goo.gl/maps/Nidmm14bFLyGwsTu6";
        $centro19->capacidad = 30;
        $centro19->distrito_id = 50;
        $centro19->save();

        $centro20 = new Centro();
        $centro20->nombre = "Hospital Hermilio Valdizan";
        $centro20->url = "https://goo.gl/maps/jUE7fSgzkRCfBZ8s6";
        $centro20->capacidad = 30;
        $centro20->distrito_id = 51;
        $centro20->save();

        $centro21 = new Centro();
        $centro21->nombre = "Hospital Regional de Ica";
        $centro21->url = "https://goo.gl/maps/SeJ3BSTZZ5ni1FYG9";
        $centro21->capacidad = 70;
        $centro21->distrito_id = 52;
        $centro21->save();

        $centro22 = new Centro();
        $centro22->nombre = "Hospital Daniel Alcides Carrión";
        $centro22->url = "https://goo.gl/maps/f57WyhGhn6qDAvUw7";
        $centro22->capacidad = 40;
        $centro22->distrito_id = 53;
        $centro22->save();

        $centro23 = new Centro();
        $centro23->nombre = "Hospital Regional Docente de Trujillo";
        $centro23->url = "https://goo.gl/maps/yPBYDbdJ9moJfg817";
        $centro23->capacidad = 30;
        $centro23->distrito_id = 54;
        $centro23->save();

        $centro24 = new Centro();
        $centro24->nombre = "Policlinico Chiclayo Oeste Essalud";
        $centro24->url = "https://goo.gl/maps/HuHczM4MSuAgNwvi7";
        $centro24->capacidad = 30;
        $centro24->distrito_id = 55;
        $centro24->save();

        $centro25 = new Centro();
        $centro25->nombre = "EsSalud Policlínico Iquitos";
        $centro25->url = "https://goo.gl/maps/5PwtAntoW3ZwTjuu7";
        $centro25->capacidad = 30;
        $centro25->distrito_id = 56;
        $centro25->save();

        $centro26 = new Centro();
        $centro26->nombre = "Hospital Asistencial EsSALUD";
        $centro26->url = "https://goo.gl/maps/6ABNfiMEsuaf6Yoa6";
        $centro26->capacidad = 50;
        $centro26->distrito_id = 57;
        $centro26->save();

        $centro27 = new Centro();
        $centro27->nombre = "Hospital Regional de Moquegua";
        $centro27->url = "https://goo.gl/maps/PzYDARjMLXYVyUeg8";
        $centro27->capacidad = 30;
        $centro27->distrito_id = 58;
        $centro27->save();

        $centro28 = new Centro();
        $centro28->nombre = "puesto de salud DANIEL ALCIDES CARRION";
        $centro28->url = "https://goo.gl/maps/PbFe6RbJ6piY3cpN7";
        $centro28->capacidad = 50;
        $centro28->distrito_id = 59;
        $centro28->save();

        $centro29 = new Centro();
        $centro29->nombre = "Centro De Salud de Pachitea";
        $centro29->url = "https://goo.gl/maps/GEdUpxbapjbTrLE97";
        $centro29->capacidad = 30;
        $centro29->distrito_id = 60;
        $centro29->save();

        $centro30 = new Centro();
        $centro30->nombre = "Hosp Manuel Nuñez";
        $centro30->url = "https://goo.gl/maps/LerUUNF5STz1C5B36";
        $centro30->capacidad = 30;
        $centro30->distrito_id = 61;
        $centro30->save();

        $centro31 = new Centro();
        $centro31->nombre = "Hospital Regional Minsa II-II Moyobamba";
        $centro31->url = "https://goo.gl/maps/tRmZSqms2JdKC62q8";
        $centro31->capacidad = 30;
        $centro31->distrito_id = 62;
        $centro31->save();

        $centro32 = new Centro();
        $centro32->nombre = "Hospital Hipolito Unanue de Tacna";
        $centro32->url = "https://goo.gl/maps/USKM2yAYowgdvWzt9";
        $centro32->capacidad = 30;
        $centro32->distrito_id = 63;
        $centro32->save();

        $centro33 = new Centro();
        $centro33->nombre = "Essalud Tumbes";
        $centro33->url = "https://goo.gl/maps/5TV5qcpr5Fj5CBMN8";
        $centro33->capacidad = 30;
        $centro33->distrito_id = 64;
        $centro33->save();

        $centro34 = new Centro();
        $centro34->nombre = "Hospital Nacional Docente Madre Niño San Bartolomé";
        $centro34->url = "https://goo.gl/maps/Agnh66dp3ziNpPpB6";
        $centro34->capacidad = 50;
        $centro34->distrito_id = 1;
        $centro34->save();

        $centro35 = new Centro();
        $centro35->nombre = "Hospital Nacional Dos De Mayo";
        $centro35->url = "https://goo.gl/maps/acTK6omiHANHzb839";
        $centro35->capacidad = 50;
        $centro35->distrito_id = 1;
        $centro35->save();

        $centro36 = new Centro();
        $centro36->nombre = "Hospital EsSalud Grau";
        $centro36->url = "https://goo.gl/maps/uvdHNhpB1k2GgifM7";
        $centro36->capacidad = 50;
        $centro36->distrito_id = 1;
        $centro36->save();

        $centro37 = new Centro();
        $centro37->nombre = "Hospital II Ramón Castilla";
        $centro37->url = "https://goo.gl/maps/A1EE1yRjRFjR9Gqs8";
        $centro37->capacidad = 50;
        $centro37->distrito_id = 1;
        $centro37->save();

        $centro38 = new Centro();
        $centro38->nombre = "Hospital de la Solidaridad";
        $centro38->url = "https://goo.gl/maps/3mdaks7b3V1Kh87H9";
        $centro38->capacidad = 50;
        $centro38->distrito_id = 1;
        $centro38->save();

        $centro39 = new Centro();
        $centro39->nombre = "Hospital Eduardo Rebagliati";
        $centro39->url = "https://goo.gl/maps/zaXvdduw6NCx8kVP9";
        $centro39->capacidad = 50;
        $centro39->distrito_id = 1;
        $centro39->save();
        
        $centro40 = new Centro();
        $centro40->nombre = "ESSALUD - IPRESS RÍMAC";
        $centro40->url = "https://goo.gl/maps/m1GwP2DA1XXCED7o8";
        $centro40->capacidad = 50;
        $centro40->distrito_id = 1;
        $centro40->save();

        $centro41 = new Centro();
        $centro41->nombre = "Hospital PNP Augusto B. Leguía";
        $centro41->url = "https://goo.gl/maps/Hs6G5sLzAYUaPDYL7";
        $centro41->capacidad = 50;
        $centro41->distrito_id = 1;
        $centro41->save();

        $centro42 = new Centro();
        $centro42->nombre = "Hospital Mogrovejo";
        $centro42->url = "https://goo.gl/maps/XeqzVnTUv4s4ZZ9EA";
        $centro42->capacidad = 50;
        $centro42->distrito_id = 1;
        $centro42->save();



    }
}
