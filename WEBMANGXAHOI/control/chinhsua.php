<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Trang chủ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/header.css" rel="stylesheet" type="text/css"/>
</head>
<?php 
session_start();
class Chinhsua
{
   
    public function Index()
	{
	
		if(isset($_SESSION['us']))
		{
		  
			include('view/header.php');
                //----------chỉnh sửa-----------
				include_once "model/nguoidung_model.php";		
				$usermodel = new nguoidung_model();
				$kqs=$usermodel->thongtin($_SESSION['us']);
				include_once "view/chinhsua.php";
						
				if(isset($_POST['btnsua']))
				{
					foreach($kqs as $v)
					{
					$hinh= $_FILES['hinh']['error']==0?$_FILES['hinh']['name']:$v['avatar'];
				// echo $hinh;
					$cs=$usermodel->chinhsua($_SESSION['us'],$_POST['tensua'],$_POST['ns'],$_POST['gt'],$_POST['sdt'],'',$hinh);
					if($cs>0)
					{
						move_uploaded_file($_FILES['hinh']['tmp_name'], 'hinh/'.$hinh);
						header("location: /WEBMANGXAHOI/index.php?ctrl=chinhsua&func=Index");
						print_r( 'Sửa Thành công');
					}
					
					}
						
                }	
						
				}
				else
				{
					header("location: /WEBMANGXAHOI/index.php?ctrl=login&func=Index");
				}
	}
}