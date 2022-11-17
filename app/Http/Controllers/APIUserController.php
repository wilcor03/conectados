<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\TestApi;
//paginate helper functions
use App\Helpers\CollectionHelper;

class APIUserController extends Controller
{
    private TestApi $ApiService;

    public function __construct(TestApi $service){
        $this->ApiService = $service;
    }   

    public function index()
    {        
        return CollectionHelper::paginate($this->ApiService->getClients(), 15);
    }

    public function userTransactions($userId)
    {   
        
        return $this->ApiService->getTransactionsByClientId($userId)->values()->all();
        
    }

    public function userAndTransactions($userId)
    {
        return response()->json($this->ApiService->getClientById($userId));
    }
}
