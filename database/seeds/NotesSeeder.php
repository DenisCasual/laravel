<?php

use Illuminate\Database\Seeder;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert($this->getData());
    }
    private function getData() {
        $faker = Faker\Factory::create('ru_RU');
        $data = [];
        for ($i=0; $i<=100; $i++) {
            $data[] = [
                'title' => $faker->sentence(rand(3,6)),
                'body' => $faker->realText(rand(200,500)),
            ];
        }
        return $data;
    }
}
