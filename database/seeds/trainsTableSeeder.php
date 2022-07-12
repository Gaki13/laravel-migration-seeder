<?php

use Illuminate\Database\Seeder;

use App\Train;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTrain = new Train();

        $newTrain->save();
    }
}
