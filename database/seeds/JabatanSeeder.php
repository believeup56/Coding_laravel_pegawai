<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatan')->insert(array(
            ['nama_jabatan' => 'Direktur'],
            ['nama_jabatan' => 'Manager'],
            ['nama_jabatan' => 'Sekertaris']
        ));
    }
}
