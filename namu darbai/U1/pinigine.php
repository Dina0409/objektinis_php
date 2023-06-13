<?php
class Pinigine {
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function ideti($kiekis): void {
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
        } else {
            $this->popieriniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti(): void {
        echo "Popieriniai pinigai: {$this->popieriniaiPinigai}" . PHP_EOL;
        echo "Metaliniai pinigai: {$this->metaliniaiPinigai}" . PHP_EOL;
        echo "Suma: " . ($this->popieriniaiPinigai + $this->metaliniaiPinigai) . PHP_EOL;
    }
}

$pinigine = new Pinigine();
$pinigine->ideti(1); // prideda prie metaliniaiPinigai
$pinigine->ideti(5); // prideda prie popieriniaiPinigai
$pinigine->ideti(2); // prideda prie metaliniaiPinigai
$pinigine->skaiciuoti();