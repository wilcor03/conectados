<?php
namespace App\Contracts;

interface TestApi {
    public function getClients();
    public function getTransactionsByClientId($clientId);
    public function getClientById($clientId);
}