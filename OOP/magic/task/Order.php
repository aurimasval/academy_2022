<?php

class Order
{
    public const STATE_NEW = "new";
    public const STATE_IN_PROGRESS = "in_progress";
    public const STATE_PENDING = "pending";

    private string $customerEmail;
    private float $amount;
    private string $state;

    public function __construct(string $customerEmail, float $amount, string $state)
    {
        $this->customerEmail = $customerEmail;
        $this->amount = $amount;
        $this->state = $state;
    }

    public function __clone(): void
    {
        $this->state = self::STATE_NEW;
    }

    public function __toString(): string
    {
        return "Atliktas užsakymas " . $this->amount . " kliento " .  $this->customerEmail . " Jo būsena " . $this->state;
    }

    public function __serialize(): array
    {
        return ['customerEmail' => $this->customerEmail, 'amount' => $this->amount];
    }
}