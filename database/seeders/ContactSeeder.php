<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Contact::class, 35)->create(); //35は、ダミーデータの数
        \App\Models\Contact::factory()->count(35)->create(); 
    }
}
