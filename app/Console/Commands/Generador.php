<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class Generador extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generador:tempH';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'genera una temeperatura y humedad aleatoria';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        /*
        $hum = 0;
        $temp = rand(-30.00,70.00);
        if($temp <=0)
        {
            $hum= rand(0.05,0.2);
        }
        */
        return Command::SUCCESS;
    }
}
