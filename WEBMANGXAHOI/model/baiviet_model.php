<?php
include_once("model/db.php");
class baiviet_model extends Db
{
    public function dangbai($username,$anh,$tg,$noidung)
    {
        $sql="INSERT INTO baiviet(username, anhBV,thoigianBV,noidungBV) 
        VALUES ('$username','$anh','$tg','$noidung')   ";
        $kq=$this->query($sql);
        return $this->getNumRow($kq);
    }
    public function thongtinBV()
    {
        $kq=$this->query("SELECT * FROM `baiviet` ORDER by idbaiviet DESC ");
        return $kq;
    }
}