<?php

trait TimeTrait {
    private Datetime $createAt;

    public function setCreatedAt(DateTime $created): void
    {
        $this->createAt = $created;
    }

    public function getCreatedAt(): DateTime
    {
        return  $this->createAt;
    }
}
