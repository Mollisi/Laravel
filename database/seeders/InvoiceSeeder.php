<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\invoice;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();
        try {
            $users =  User::whereIn('email', ['s@nwk.co.za'])->get();

            foreach($users as $user){
                invoice::factory()->count(10)->create(['user_id'=> $user->id]);
               
            }
            
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            dd('exception reached');
           
        }
    }
}
