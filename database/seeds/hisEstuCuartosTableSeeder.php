<?php

use App\EntidadHisEstuCuarto;
use Illuminate\Database\Seeder;

class hisEstuCuartosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(EntidadHisEstuCuarto::class,900)->create();
    }
}
