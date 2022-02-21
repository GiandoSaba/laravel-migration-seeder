<?php

use App\Trains;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $trains = [
            [
                'agency' => 'Frecciarossa',
                'departure_station' => 'Bari Centrale',
                'arrival_station' => 'Roma Termini',
                'departure_time' => '08:30',
                'arrival_time' => '15:40',
                'train_code' => 'FR2343',
                'train_carriage' => 5,
                'in_time' => true,
                'deleted' => false,
            ],
            [
                'agency' => 'Italo',
                'departure_station' => 'Milano',
                'arrival_station' => 'Lecce',
                'departure_time' => '08:30',
                'arrival_time' => '18:20',
                'train_code' => 'IT4575',
                'train_carriage' => 8,
                'in_time' => true,
                'deleted' => false,
            ],
            [
                'agency' => 'Frecciarossa',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Bologna',
                'departure_time' => '15:30',
                'arrival_time' => '16:50',
                'train_code' => 'FR2528',
                'train_carriage' => 6,
                'in_time' => false,
                'deleted' => false,
            ],
            [
                'agency' => 'Italo',
                'departure_station' => 'Firenze',
                'arrival_station' => 'Napoli',
                'departure_time' => '16:30',
                'arrival_time' => '18:50',
                'train_code' => 'IT4456',
                'train_carriage' => 4,
                'in_time' => true,
                'deleted' => true,
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Trains();
            $newTrain->agency = $train['agency'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->train_carriage = $train['train_carriage'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->deleted = $train['deleted'];
            $newTrain->save();
        }
    }
}
