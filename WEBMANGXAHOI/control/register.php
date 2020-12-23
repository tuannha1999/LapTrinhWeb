<head>
        <title>Đăng ký tài khoản mới</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/register.css" rel="stylesheet" type="text/css"/>
    </head>
<?php
class Register
{
	public function Index()
	{
		include_once "model/nguoidung_model.php";
		include_once "view/register.php";
			$username = isset($_POST['tentk'])? $_POST['tentk']: '' ;
			$password = isset($_POST['mk'])? $_POST['mk']: '' ;
			$ten=isset($_POST['tennd'])? $_POST['tennd']: '' ;
			$ns=isset($_POST['ns'])? $_POST['ns']: '' ;
			$dt=isset($_POST['sdt'])? $_POST['sdt']: '' ;
			$gt= isset($_POST['gt'])? $_POST['gt']: '' ;
			$dc='' ;
			$hinh='avatarmacdinh.jpg';
            if (isset($_POST['btnDK']) ) 
            {
				if($username==''||$password==''||$ten==''||$ns==''||$dt==''||$gt=='')
				{
				?>
					<div class="DK">VUI LÒNG NHẬP ĐẦY ĐỦ THÔNG TIN ĐĂNG KÝ.</div> 
					
				<?php
				}
				else
				{
				    if(preg_match("/^(?=.*[a-zA-Z])(?=.*[0-9]).{8,}$/",$password) && preg_match("/^0+\d{9}$/",$dt))
					{
    						$usermodel = new nguoidung_model();
    						$ktnd=$usermodel->KTTT($username);
    					if($ktnd==0)
    					{
    						$user = $usermodel->DK($username,$password,$ten,$ns,$gt,$dt,$dc,$hinh);
    						if ($user==1)
    						{	
    							?>
    					<div class="DK">Đăng Ký Tài Khoản Thành Công 
    						<a href="/WEBMANGXAHOI/index.php?ctrl=login&func=index" method="POST">Đăng Nhập Ngay?</a>  </div>
    						  <?php
    						} 
    						else 
    						{
    							?>
    					<div class="DK">ĐĂNG KÝ KHÔNG THÀNH CÔNG.</div> 
    					
    							<?php
    							
    						}
    					}
    					else { ?>
    						<div class="DK">TÀI KHOẢN ĐÃ TỒN TẠI.</div> 
    						
    								<?php }
    					}
					else 
					{ ?>
						<div class="DK">PASSWORD(ít nhất 8 kí tự bao gồm chữ cái và số) HOẶC SĐT KHÔNG HỢP LỆ!!</div> 
						
					<?php }
				}	
				 
            }
	}
}