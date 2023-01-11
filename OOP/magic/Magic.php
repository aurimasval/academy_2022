<?php

class Magic {

    private string $name;

    private ?string $description = "";
    //kvieciamas objekto sukūrimo metu
    public function __construct(string $name) {
        $this->name = $name;
    }

    public function __invoke()
    {
        echo "VYKDAU KAIP FUNKCIJĄ";
    }

    public function __sleep(): array {
        return [
            'description'
        ];
    }
    public function __toString(): string
    {
        return "Užsetintas pavadinmas: " . $this->name;
    }

    //vykdo klonavimo metu
    public function __clone()
    {
        $this->name = $this->name . ' (Clone)';
    }
}
