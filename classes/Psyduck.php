<?php
require_once __DIR__ . "/Pokemon.php";

class Psyduck extends Pokemon {

    public function __construct() {
        parent::__construct(
            "Psyduck",
            "Water",
            5,
            50,
            "Water Pulse",
            12, 10, 8
        );
    }

    public function specialMoveDescription() {
        return "Psyduck uses Water Pulse! This may confuse the opponent!";
    }

    public function train($jenis, $intensitas) {
        $result = parent::train($jenis, $intensitas);

        if ($jenis === "Defense") {
            $bonus = intval($intensitas * 0.5);
            $result["after"]["hp"] += $bonus;
            $this->hp = $result["after"]["hp"];
            $result["note"] = "Bonus HP untuk Pokémon tipe Water!";
        }

        return $result;
    }
}
