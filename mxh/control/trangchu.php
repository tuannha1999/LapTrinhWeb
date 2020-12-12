<head>
<link rel="stylesheet" href="css/trangchu.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
</head>
<?php 
session_start();
class Trangchu
{
	
	public function Index()
	
	{
		if(isset($_SESSION['us']))
		{	
					include_once "model/search_model.php";
					include_once "view/trangchu.php";
					$tk=isset($_POST['tentim'])?$_POST['tentim']:'';
					if(isset($_POST['btntim']))
					{
							if($tk=='')
								{	
									?>
										<div class="search">
											NHẬP THÔNG TIN CẦN TÌM !!
										</div>
										<?php
								}
							else 
							{
								$usermodel = new Search_model();
								$kq=$usermodel->search($tk);
								if(count($kq)==0)
								{	
									?>
										<div class="search">
											KHÔNG TÌM THẤY!!
										</div>
										<?php
								}		
								else    
								{
									foreach($kq as $v)
									{ ?>
									
										<div class="search">
											<?php 
											echo $v['hoten'].'<br>';
											?>
										</div>
										<?php
									}
								}
							}
					}	 			
						
		}
		else
		{
			header("location: /mxh/index.php?ctrl=login&fnc=Index");
		}
		
	}
}