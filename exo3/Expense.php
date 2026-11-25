<?php

class Expense
{
    private float $amount;

    private string $type;

    private string $description;

    private \DateTime $happenedAt;

    private User $le_payeur;

    /**
     * @var array<User>
     */
    private array $participants;

    /**
     * @param array <string, User> $participants
     */
    public function __construct(float $amount, string $type, string $description, DateTime $happenedAt, User $le_payeur, array $participants)
    {
        $this->amount = $amount;
        $this->type = $type;
        $this->description = $description;
        $this->happenedAt = $happenedAt;
        $this->le_payeur = $le_payeur;
        $this->participants = $participants;
    }

        public function getAmount(): float
    {
        return $this->amount;
    }

        public function getType(): string
    {
        return $this->type;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getHappenedAt(): \DateTime
    {
        return $this->happenedAt;
    }

    public function getPayer(): User
    {
        return $this->le_payeur;
    }

    /**
     * @return array<string, User> $participants
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }

    public function getUnitaryShared(): float
    {
        $nombreParticipants = count($this->participants);
        return $this->amount / $nombreParticipants;
    }

    public function getUserShare(User $user): float
    {
        $share = 0;

        // pour le payeur
        if ($user === $this->le_payeur) {
            $share += $this->amount;
        }

        // pour les participants
        if (in_array($user, $this->participants, true)) {
            $share -= $this->getUnitaryShared();
        }

        return $share;
    }
}