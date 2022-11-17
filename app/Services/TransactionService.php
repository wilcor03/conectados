<?php
namespace App\Services;

//use App\Services\ConectUser;

use App\Contracts\TestApi;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class TransactionService implements TestApi{       

    public function getClients()
    {    
        $url = config('services.test-api.base_url').config('services.test-api.token');    
        $response = Http::get($url);        

        $collect = collect($response->json())
                    ->map(function($item){
                        $item['created_at'] = Carbon::parse($item['created_at'])->format('Y-m-d H:i:s');
                        return $item;
                    })
                    ->sortByDesc('created_at');

        return $collect;
    }

    public function getTransactionsByClientId($clientId)
    { 
        $url = config('services.test-api.base_url').config('services.test-api.token').'/transaction/'.$clientId;        
        $response = Http::get($url);

        $collect = collect($response->json())
                    ->map(function($item){
                        $item['created_at'] = Carbon::parse($item['created_at'])->format('Y-m-d H:i:s');
                        return $item;
                    })
                    ->sortByDesc('created_at');

        return $collect;
    }


    public function getClientById($clientId){
        $clients = Self::getClients();
        $user = $clients->where('user_id', $clientId)->first();
        $user['Transactions'] = Self::getTransactionsByClientId($clientId);
        return $user;
    }    
}