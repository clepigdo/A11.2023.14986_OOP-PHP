<?php
class MataKuliah
{
    private $kode;
    private $nama;

    function setData($kode, $nama)
    {
        $this->kode = $kode;
        $this->nama = $nama;
       
    }
    function getData()
    {
        return[$this->kode, $this->nama];
    }
}