<?php

class Grade {
    private ?int $id;
    private ?int $value;
    private ?string $name;
    private ?DateTime $date;

    public function __construct(?int $id = null, ?int $value = null, ?string $name = null, ?DateTime $date = null) {
        $this->id = $id;
        $this->value = $value;
        $this->name = $name;
        $this->date = $date;
    }


    public function getId(): ?int {
        return $this->id;
    }

    public function getValue(): ?int {
        return $this->value;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function getDate(): ?DateTime {
        return $this->date;
    }

    
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setValue(int $value): void {
        $this->value = $value;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setDate(DateTime $date): void {
        $this->date = $date;
    }

    public function getStudents(): ?array {
        
        return null;
    }
}

