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
class Dangbai
{
    function Index()
	{
	
		    if(isset($_SESSION['us']))
		    {
						include('view/header.php');
                        //-------dang bai-----------
                        include_once "model/baiviet_model.php";
                        include_once "view/dangbai.php";
                        
                        if(isset($_POST['btndangbai']))
                        {
                            $today = date("Y/m/d");
                            $hinh=$_FILES['hinhBV']['error']==0?$_FILES['hinhBV']['name']:'';
                            $nd=$_POST['noidung'];
                            $tg='';
                            $bvmodel = new baiviet_model();
                            $bd=$bvmodel->dangbai($_SESSION['us'],$hinh,$today,$nd);
                            if($bd>0)
                            {
                                move_uploaded_file($_FILES['hinhBV']['tmp_name'], 'hinh/anhBV/'.$hinh);
                                header("location: /WEBMANGXAHOI/index.php?ctrl=trangchu&func=Index");
                            }
                            else
                                echo "Không thành côg";

                        }

            }
        else
        {
            header("location: /WEBMANGXAHOI/index.php?ctrl=login&func=Index");
        }
    }
}