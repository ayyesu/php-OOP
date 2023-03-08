<?php

class BankAccount {
  protected $accountNumber;
  protected $accountHolderName;
  protected $balance;

  public function __construct($accountNumber, $accountHolderName, $balance) {
    $this->accountNumber = $accountNumber;
    $this->accountHolderName = $accountHolderName;
    $this->balance = $balance;
  }

  public function deposit($amount) {
    $this->balance += $amount;
  }

  public function withdraw($amount) {
    if ($this->balance >= $amount) {
      $this->balance -= $amount;
    } else {
      echo "Insufficient funds";
    }
  }

  public function getBalance() {
    return $this->balance;
  }
}

class SavingsAccount extends BankAccount {
  protected $interestRate;

  public function setInterestRate($interestRate) {
    $this->interestRate = $interestRate;
  }

  public function getInterestRate() {
    return $this->interestRate;
  }

  public function addInterest() {
    $interestEarned = $this->balance * $this->interestRate;
    $this->balance += $interestEarned;
  }
}

class CheckingAccount extends BankAccount {
  protected $transactionFee;

  public function setTransactionFee($transactionFee) {
    $this->transactionFee = $transactionFee;
  }

  public function getTransactionFee() {
    return $this->transactionFee;
  }

  public function withdraw($amount) {
    $totalWithdrawalAmount = $amount + $this->transactionFee;

    if ($this->balance >= $totalWithdrawalAmount) {
      $this->balance -= $totalWithdrawalAmount;
    } else {
      echo "Insufficient funds";
    }
  }
}

// Example usage of BankAccount
$bankAccount = new BankAccount("1234", "Daniel Kissiedu", 1000.00);
echo "Bank Account balance: $" . $bankAccount->getBalance() . "\n";

$bankAccount->deposit(500.00);
echo "Bank Account balance after deposit: $" . $bankAccount->getBalance() . "\n";

$bankAccount->withdraw(200.00);
echo "Bank Account balance after withdrawal: $" . $bankAccount->getBalance() . "\n";

// Example usage of SavingsAccount
$savingsAccount = new SavingsAccount("5678", "Benjamin Ahimah", 5000.00);
$savingsAccount->setInterestRate(0.02);
echo "Savings Account balance: $" . $savingsAccount->getBalance() . "\n";

$savingsAccount->addInterest();
echo "Savings Account balance after earning interest: $" . $savingsAccount->getBalance() . "\n";

// Example usage of CheckingAccount
$checkingAccount = new CheckingAccount("9101", "Rita Yawson", 3000.00);
$checkingAccount->setTransactionFee(1.50);
echo "Checking Account balance: $" . $checkingAccount->getBalance() . "\n";

$checkingAccount->withdraw(500.00);
echo "Checking Account balance after withdrawal: $" . $checkingAccount->getBalance() . "\n";
echo "Transaction fee: $" . $checkingAccount->getTransactionFee() . "\n";

?>
