<head>
<link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
</head>
<?php
session_start();
class Login
{
	public function Index()
	{
			include_once "model/nguoidung_model.php";	
			require_once('view/login.php');	
			$username = isset($_POST['tentk'])? $_POST['tentk']: '' ;
			$password = isset($_POST['mk'])?md5($_POST['mk']): '' ;
			if (isset($_POST['btnDN']) ) 
				{
					if($username==='' ||  $password==='' )
						{
							?> <div class="DN">VUI LÒNG NHẬP ĐẦY ĐỦ USERNAME VÀ PASSWORD!!</div>  <?php
						}
					else
					{
						$usermodel = new nguoidung_model();
						$kttt=$usermodel ->KTTT($username);
						if($kttt>0)
							{

								$user = $usermodel->login($username , $password );
								if ($user>0) 
								{
									$_SESSION['us']=$_POST['tentk'];
								
									?>
									<SCRIPT>
										location.href="/WEBMANGXAHOI/index.php?ctrl=trangchu&func=index";
									</SCRIPT>
									<?php
									
								}

								else 
								{
									?> <div class="DN">SAI TÊN ĐĂNG NHẬP HOẶC MẬT KHẨU!!</div>  <?php
								}
							
							}
						else 
							{
							?> <div class="DN">TÀI KHOẢN KHÔNG TỒN TẠI!!</div>  <?php
							}
					
					}
				}
	}
	public function logout()
	{
		if(isset($_SESSION['us']))
		{
			session_unset();
			header("location: /WEBMANGXAHOI/index.php?ctrl=login&fnc=Index");
		
		}
	}
}