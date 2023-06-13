<?php
class Kibiras3 {
    protected $akmenuKiekis = 0;

    public function prideti1Akmeni(): void {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis): void {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu(): int {
        return $this->akmenuKiekis;
    }
}

class KibirasNePo1 extends Kibiras3 {
    public function prideti1Akmeni(): void {
        $atsitiktinisKiekis = rand(2, 5);
        $this->akmenuKiekis += $atsitiktinisKiekis;
    }
}

$kibiras = new KibirasNePo1();
$kibiras->prideti1Akmeni();
echo "Pridėta akmenų: " . $kibiras->kiekPririnktaAkmenu();

// prideta 3 akmenis
