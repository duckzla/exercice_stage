<?php
require_once 'Expense.php';
class DrinkExpense extends Expense
{

    /**
     * @param array <string, User> $participants
     */
    public function __construct(float $amount, string $description, \DateTime $happenedAt, User $le_payeur, array $participants)
    {
        parent::__construct($amount, 'Drink', $description, $happenedAt, $le_payeur, $participants);
    }
}