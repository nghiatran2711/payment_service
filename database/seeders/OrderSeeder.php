<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users=DB::table('users')->get();
        if(!empty($users)){
            $date = date('Y-m-d H:i:s');
            foreach($users as $user){
                $dataInsert = [
                    'name' =>Str::random(15),
                    'date_order' =>$date,
                    'amount' => 200000,
                    'status' => 1,
                    'user_id'=>$user->id,
                    'created_at'=>$date,
                    'updated_at'=>$date
                ];
                DB::table('orders')->insert($dataInsert);
            }
        }
    }
}
