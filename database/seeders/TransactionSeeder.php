<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();
        try {
            transaction::factory()->count(10)->create();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            dd('exception reached', $e->getMessage());
           
        }
    }
}
