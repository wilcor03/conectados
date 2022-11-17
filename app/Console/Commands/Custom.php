<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ConectadoswebService;

class Custom extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:custom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {              
      $serv = new  ConectadoswebService();
        dd($serv->getTransactionsByClientId(1));

      //dd($serv->getClientById(62709));
      
    }
}
