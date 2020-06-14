<?php

/**
 * Фасад — это структурный паттерн, 
 * который предоставляет простой (но урезанный) интерфейс 
 * к сложной системе объектов, библиотеке или фреймворку.
 */
class Bank
{
    public function OpenTransaction() {}
    public function CloseTransaction() {}
    public function transferMoney($amount) {}
}

class Client
{
    public function OpenTransaction() {}
    public function CloseTransaction() {}
    public function transferMoney($amount) {}
}

class Log
{
    public function logTransaction() {}
}

class TransactionFacade
{
    protected $Bank = null;
    protected $Clint = null;
    protected $Log = null;

    public function __consruction() 
    {
        $this->Bank = new Bank();
        $this->Clinet = new Client();
        $this->Log = new Log();
    }

    public function transfer($amount)
    {
        self::OpenTransaction();
        self::TransferMoney($amount);
        self::CloseTransaction();
    }

    private function OpenTransaction()
    {
        $this->Bank->OpenTransaction();
        $this->Client->OpenTransaction();
        $this->Log->logTransaction('Transaction open');
    }

    private function TransferMoney($amount)
    {
        $this->Bank->transferMoney($amount);
        $this->Log->logTransaction('Transfer money from bank');
        $this->Client->transferMoney($amount);
        $this->Log->logTransaction('Transfer money to client');
    }

    private function CloseTransaction()
    {
        $this->Bank->CloseTransaction();
        $this->Client->CloseTransaction();
        $this->Log->logTransaction('Transaction close');
    }
}

// Client code
$Transfer = new TransactionFacade();
$Transfer->transfer(1000);
