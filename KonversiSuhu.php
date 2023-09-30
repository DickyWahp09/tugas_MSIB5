<?php
class KonversiSuhu {
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan) {
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function konversi() {
        switch ($this->satuanSuhuAwal) {
            case "Celcius":
                if ($this->satuanSuhuTujuan == "Fahrenheit") {
                    return ($this->besaranSuhu * 9/5) + 32;
                } elseif ($this->satuanSuhuTujuan == "Rheamur") {
                    return $this->besaranSuhu * 4/5;
                }
                break;
            case "Fahrenheit":
                if ($this->satuanSuhuTujuan == "Celcius") {
                    return ($this->besaranSuhu - 32) * 5/9;
                }
                break;
            case "Rheamur":
                if ($this->satuanSuhuTujuan == "Celcius") {
                    return $this->besaranSuhu * 5/4;
                }
                break;
        }
        return $this->besaranSuhu;
    }

    public function cetakHasil() {
        echo "<tr>
            <td>{$this->satuanSuhuAwal}</td>
            <td>{$this->besaranSuhu}</td>
            <td>{$this->satuanSuhuTujuan}</td>
            <td>{$this->konversi()}</td>
        </tr>";
    }
}
?>
