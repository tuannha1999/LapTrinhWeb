<head>
        <title>Đăng ký tài khoản mới</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/header.css" rel="stylesheet" type="text/css"/>
    </head>
<?php
session_start();
class Timkiem
{
    public function Index()
	{
	
		if(isset($_SESSION['us']))
		{
		  
					include_once "model/nguoidung_model.php";		
					include_once "view/header.php";
					$tk=isset($_POST['tentim'])?$_POST['tentim']:'';
					if(isset($_POST['btntim']))
					{
							if($tk=='')
								{	
									?>
										
											 <div style=" margin-top: 50px; color:red;   margin-left: 400px; font-size: 20px;"> 
											NHẬP THÔNG TIN CẦN TÌM !!
											
										</div>
										<?php
								}
							else 
							{
								$usermodel = new nguoidung_model();
								$kq=$usermodel->search($tk);
								if(count($kq)==0)
								{	
									?>
										
										<div  style=" margin-top: 50px; color:red;   margin-left: 400px; font-size: 20px;" > 
											KHÔNG TÌM THẤY!!
											</div>
										
										<?php
								}		
								else    
								{
									?>
								
                                    <div style=" margin-top: 50px;  ">
									<?php
									foreach($kq as $v)
									{ 
										?>
                                        
										<div class="search">
										<img class="avatar" src="hinh/<?php echo $v['avatar'];?>" alt=""/> <?php echo $v['hoten'].'<br/>';
										?>
                                        </div>
										</div>
										<?php	
									}
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