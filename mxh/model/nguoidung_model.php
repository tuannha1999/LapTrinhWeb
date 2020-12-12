<?php
include "model/Db.php";
class nguoidung_model extends Db
{
    public function login($tentk,$mk)
    {
        $sql="select count(*) as dem from nguoidung where tentk='$tentk' and mk='$mk'";
		$kq=$this->query($sql);
	    return $kq[0]['dem'];

    }
    public function KTTT($tentk)
	{
		$kq=$this->query("select count(*) as dem from nguoidung where tentk=?",[$tentk]);
		return $kq[0]['dem'];
	}
    public function DK($tentk,$mk,$ten,$ns,$gt,$sdt,$dc,$avatar)
    {
        $sql="INSERT INTO nguoidung(tentk, mk, hoten, ngaysinh, gioitinh, sdt, diachi, avatar) 
        VALUES ('$tentk',md5('$mk'),'$ten','$ns','$gt','$sdt','$dc','$avatar')";
        $this->query($sql);
	    $kq=$this->query("select count(*) as kt from nguoidung where tentk='$tentk'");
		return $kq[0]['kt'];
    }
}