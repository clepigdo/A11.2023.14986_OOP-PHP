<?php
class Mahasiswa
{
    //list of properties
    public $nim;
    public $nama;
    public $programstudi;

    //methods
    function setData($nim, $nama, $programstudi)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->programstudi = $programstudi;
    }
    function getData()
    {
        return [
            'NIM :' => $this->nim,
            'Nama :' => $this->nama,
            'Program Studi :' => $this->programstudi
        ];
    }

    //ini adalah fungsi untuk menampilkan output tanpa array
    function tampilantanpaArray()
    {
        echo "NIM :" . $this->nim;
        echo "NAMA :" . $this->nama;
        echo "Program Studi :" . $this->programstudi;

    }
}


