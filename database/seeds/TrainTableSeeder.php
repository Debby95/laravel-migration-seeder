<?php

use Illuminate\Database\Seeder;
use App\Controller;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $myTrain = [
            [
                "company" => "Nederlandse Spoorwegen",
                "departure_station" => "Rotterdam Centraal",
                "arrival_station" => "Amsterdam Centraal",
                "departure_time" => "21:30",
                "arrival_time" => "22:50",
                "train_code" => "909",
                "number_of_carriages" => "9",
                "in_time" => "true",
                "deleted" => "false",
            ],
            [
                "company" => "Trenitalia",
                "departure_station" => "Naples",
                "arrival_station" => "Rome",
                "departure_time" => "22:15",
                "arrival_time" => "00:30",
                "train_code" => "2253",
                "number_of_carriages" => "5",
                "in_time" => "false",
                "deleted" => "true",
            ],
            [
                "company" => "Italo",
                "departure_station" => "Venice",
                "arrival_station" => "Milan",
                "departure_time" => "09:20",
                "arrival_time" => "00:15",
                "train_code" => "7523",
                "number_of_carriages" => "6",
                "in_time" => "true",
                "deleted" => "false",
            ],
        ];

        foreach ($myTrain as $train) {
            $data = new Train();

            $data->company = $train["company"];
            $data->departure_station = $train["departure_station"];
            $data->arrival_station = $train["arrival_station"];
            $data->departure_time = $train["departure_time"];
            $data->arrival_time = $train["arrival_time"];
            $data->train_code = $train["train_code"];
            $data->number_of_carriages = $train["number_of_carriages"];
            $data->in_time = $train["in_time"];
            $data->deleted = $train["deleted"];

            $data->save();
        }
    }
}
