<?php
include "model/Db.php";
class Search_model extends Db
{
    public function search($tentk)
    {
        $kq=$this->query("select * from nguoidung where hoten like '%$tentk%' ");
        return $kq;
    }
        
}