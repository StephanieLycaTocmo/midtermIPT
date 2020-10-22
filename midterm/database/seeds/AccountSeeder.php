<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 2,
                'acct_name' => 'kalayshuuu',
                'init_invest' => 50000,
                'start_date' => '2016-01-11',
                'remarks' => 'Through proper transaction'
            ],
            [
                'user_id' => 1,
                'acct_name' => 'carla',
                'init_invest' => 25000,
                'start_date' => '2016-10-02',
                'remarks' => 'Proper Transaction'
            ]
        ];
        foreach($data as $acc){
            \App\Account::create($acc);
        }
    }
}
