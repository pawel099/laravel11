<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'ASUS ROG Strix G17',
            'description' => 'Wskocz bezpośrednio do akcji z TUF Gaming A15. Dzięki fabrycznie zainstalowanemu systemowi Windows 11, maksymalnie procesorowi AMD Ryzen™ 9 7940HS i nawet 32 GB niesamowicie szybkiej pamięci RAM DDR5 4800 MHz, urządzenie bez trudu obsługuje strumieniowanie treści i pracę wielozadaniową. Ciesz się maksymalną wydajnością gamingową, korzystając z karty graficznej NVIDIA® GeForce RTX™ 4070 w wersji laptopowej z dedykowanym rozwiązaniem MUX Switch z technologią 
             Advanced Optimus. Kiedy Twoja biblioteka gier się zapełni, wolne gniazdo na dysk SSD M.2 NVMe pozwoli Ci bardzo łatwo zwiększyć dostępną przestrzeń dyskową.',
            'amount' => 1,
            'thumbnail'=>"null",
            'price' => 123,
            'user_id' => null,
        ]);


         
         











    }
}
