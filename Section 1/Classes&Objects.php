<?php

class BankAccount{
public $accountNumber;
public $balance;

public function deposit($amount){
    if($amount > 0 ){
        $this->balance += $amount;
    }
}

public function withdraw($amount){
    
    if ($amount <= $this->balance) {
        $this->balance -= $amount;
        return true;
    }
    return false;
}

}


$account = new BankAccount();

// $account->accountNumber = 1; 
   $account->balance = 100; 
   $account->deposit(30);
   $account->withdraw(60);
   $balance = $account->balance;
echo($balance);





?>