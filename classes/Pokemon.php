<?php

class Pokemon {
    protected $name;
    protected $type;
    protected $level;
    protected $hp;
    protected $specialMove;

    protected $attack;
    protected $defense;
    protected $speed;

    public function __construct($name, $type, $level, $hp, $specialMove,
                                $attack = 10, $defense = 10, $speed = 10)
    {
        $this->name = $name;
        $this->type = $type;
        $this->level = $level;
        $this->hp = $hp;
        $this->specialMove = $specialMove;

        $this->attack = $attack;
        $this->defense = $defense;
        $this->speed = $speed;
    }

    public function getName() { return $this->name; }
    public function getType() { return $this->type; }
    public function getLevel() { return $this->level; }
    public function getHP() { return $this->hp; }
    public function getSpecialMove() { return $this->specialMove; }

    public function getAttack() { return $this->attack; }
    public function getDefense() { return $this->defense; }
    public function getSpeed() { return $this->speed; }

    public function specialMoveDescription() {
        return "{$this->name} uses {$this->specialMove}!";
    }

    public function train($jenis, $intensitas) {
        $before = [
            "level" => $this->level,
            "hp" => $this->hp,
            "attack" => $this->attack,
            "defense" => $this->defense,
            "speed" => $this->speed
        ];

        $this->level += 1;
        $this->hp += 2 * $intensitas;

        if ($jenis === "Attack") {
            $this->attack += $intensitas;
        } elseif ($jenis === "Defense") {
            $this->defense += $intensitas;
        } elseif ($jenis === "Speed") {
            $this->speed += $intensitas;
        }

        return [
            "jenis" => $jenis,
            "intensitas" => $intensitas,
            "before" => $before,
            "after" => [
                "level" => $this->level,
                "hp" => $this->hp,
                "attack" => $this->attack,
                "defense" => $this->defense,
                "speed" => $this->speed
            ],
            "special" => $this->specialMoveDescription(),
            "time" => date("Y-m-d H:i:s")
        ];
    }
}
