<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $invoices = [
            [
                'description' => 'Pro Package',
                'qty' => '10',
                'price' => '1000000',
                'amount' => '2000000'
            ],
            [
                'description' => 'Pro Gaming',
                'qty' => '10',
                'price' => '1000000',
                'amount' => '2000000'
            ],
            [
                'description' => 'Pro Package',
                'qty' => '10',
                'price' => '1000000',
                'amount' => '2000000'
            ],

        ];
        foreach($invoices as $invoice){
            Invoice::insert([
                'uuid' => uuid_create(),
                'description' => $invoice['description'],
                'qty' => $invoice['qty'],
                'price' => $invoice['price'],
                'amount' => $invoice['amount']
            ]);
        }
    }
}
