<?php 
namespace MasinosApp;

    class Masina{
        public $Tpriemone;
        public $Ratai;
        public $Sedynes;
        public $Lempos;
        public $Padangos;

// metodas kuris privalomai kvieciamas kuriant objekta
    public function __construct($Tpriemone, $Ratai, $Sedynes, $Lempos, $Padangos)
    {
        $this->Tpriemone = $Tpriemone;
        $this->Ratai = $Ratai;
        $this->Sedynes = $Sedynes;
        $this->Lempos = $Lempos;
        $this->Padangos = $Padangos;
    }
        
    public function showProfile(){
    $data[] = $this->Tpriemone;
    $data[] = $this->Ratai;
    $data[] = $this->Sedynes;
    $data[] = $this->Lempos;
    $data[] = $this->Padangos;

    return $data;
    }
}