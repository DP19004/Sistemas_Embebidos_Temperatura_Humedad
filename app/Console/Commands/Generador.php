<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Humedad;
use App\Models\Temperatura;
use App\Models\Cultivo;

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
    protected $description = 'genera una temperatura y humedad aleatoria';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        $hum = 0;
        $temp = rand(-30,70);
        
        if($temp <= 0)
        {
            $hum = rand(5,20);
        }
        else{
            if($temp>0 && $temp <=25){
                $hum = rand(15, 80);
            }
            else{
                $hum = rand(15, 50);
            }
        }
        
        $humedades = new Humedad();
        $humedades->valor = $hum;
        $humedades->save();
        

        $temperaturas = new Temperatura();
        $temperaturas->valor = $temp;
        $temperaturas->save(); 
        return Command::SUCCESS;
        
    }
}
