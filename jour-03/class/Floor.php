<?php

class Floor {
    private ?int $id;
    private ?string $name;
    private ?int $level;

    public function __construct(?int $id = null, ?string $name = null, ?int $level = null) {
        $this->id = $id;
        $this->name = $name;
        $this->level = $level;
    }


    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function getLevel(): ?int {
        return $this->level;
    }


    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setLevel(int $level): void {
        $this->level = $level;
    }

    public function getRooms(): ?array {
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM room WHERE floor_id = ?");
        $query->execute([$this->id]);
        $rooms = $query->fetchAll(PDO::FETCH_CLASS, 'Room');
        return $rooms;
    }
        
}
