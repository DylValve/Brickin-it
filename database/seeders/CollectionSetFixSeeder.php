<?php

namespace Database\Seeders;

use App\Models\CollectionSetFix;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSetFixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collection_set_fixes')->insert([
            'set_id' => 1,
            'collection_id' => 2,
        ]);
    }
}
