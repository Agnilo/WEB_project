<?php

use Illuminate\Database\Seeder;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'Persų ilgaplaukė katė'],
            ['id' => 2, 'name' => 'Bengalijos katė'],
            ['id' => 3, 'name' => 'Siamo katė'],
            ['id' => 4, 'name' => 'Sfinksas'],
            ['id' => 5, 'name' => 'Britų trumpaplaukė katė'],
            ['id' => 6, 'name' => 'Skudurinukė'],
            ['id' => 7, 'name' => 'Škotų nulėpausė katė'],
            ['id' => 8, 'name' => 'Rusų melsvoji katė'],
            ['id' => 9, 'name' => 'Sibiro katė'],
            ['id' => 10, 'name' => 'Turkijos Angora'],
            ['id' => 11, 'name' => 'Singapūro katė']
        ];
        foreach ($items as $item) {
            DB::table('breeds')->insert($item);
        }
    }
}
