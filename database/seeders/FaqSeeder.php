<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // FAQ 1
        DB::table('faqs')->insert([
            'question' => 'How can you print a document from your laptop at HZ?',
            'answer' => 'First put money in you HZ student card (Close to the reception, ',
            'link' => 'https://print.hz.nl/login.cfm?dest=index.cfm&'
        ]);

        // FAQ 2
        DB::table('faqs')->insert([
            'question' => 'What are the instructions if you want to park your car at the HZ parking lot',
            'answer' => 'Free parking is possible on the car park of PZEM at the Poelendaelesingel 10 in Middelburg. This is a few minutes',
            'link' => ''
        ]);

        // FAQ 3
        DB::table('faqs')->insert([
            'question' => 'How can you scan a document and send it to your laptop at HZ?',
            'answer' => 'Make sure you have at least €0.07 credit in your student card (Scanning is free; nevertheless, you need to have credit)',
            'link' => ''
        ]);

        // FAQ 4
        DB::table('faqs')->insert([
            'question' => 'How can I buy something on the HZ web shop?',
            'answer' => 'Look for your target purchase, and press ORDER. If you are done, go to the shopping cart, which is found in the navegation bar.',
            'link' => 'https://webshop.hz.nl/WebshopApp/defaulten.aspx?menu=082076044027019251066025111065201099237062130097'
        ]);

        // FAQ 5
        DB::table('faqs')->insert([
            'question' => 'How can you book a project space in one of the wings?',
            'answer' => 'Select Selfservice Portal in the navegation bar (If it is not there, change the personal menu first)',
            'link' => 'https://portal.hz.nl/en/'
        ]);
    }
}
