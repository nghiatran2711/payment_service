<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=DB::table('users')->get();
        if(!empty($users)){
            $date = date('Y-m-d H:i:s');
            foreach($users as $user){
                $dataInsert = [
                    'card_number' =>mt_rand(1000000000000000,9999999999999999),
                    'expire_date' =>'09/21',
                    'ccv' => mt_rand(100,999),
                    'card_type' =>'visa',
                    'amount' => 1000000,
                    'status' => 1,
                    'user_id'=>$user->id,
                    'created_at'=>$date,
                    'updated_at'=>$date
                ];
                DB::table('cards')->insert($dataInsert);
            }
        }
    }
}
