<?php
session_start();
include_once("model/db.php");

class Trangchu
{
    
public function Index()
{
            if(isset($_SESSION['us']))
	        {
                //---------header----------
                        include('view/header.php');
               	//---------newfeed-------------
						include_once "model/baiviet_model.php";
						$bvmodel = new baiviet_model();
						$bd=$bvmodel->thongtinBV();
						foreach($bd as $v)
						{ 
							if($v['anhBV']=='')
							{

									?>
									<div class="baidang1">
								<div style="font-weight: bold; font-size:20px" >
								<?php
								echo $v['username']."<br>";?></div>
								<div style="margin-top: 5px;margin-bottom:5px">
								<?php
								echo $v['noidungBV']."<br>";
								?> </div>					
								<button style="margin-top: 5px; font-size:20px"> 👍🏻</button> 
								<button style="margin-top: 5px; margin-left:10px;font-size:20px;"> Bình luận</button> 
								</div>
								<?php
							} 
							else
							{
									?>
								<div class="baidang">
								<div style="font-weight: bold; font-size:20px" >
								<?php
                                echo $v['username']."<br>";?></div>
								<div style="margin-top: 5px;margin-bottom:5px">
								<?php
								echo $v['noidungBV']."<br>";
								?> </div>
								<img  style="height: 200px; width: 300px"
								src="hinh/anhBV/<?php echo $v['anhBV'];?>" alt=""/><br> 						
								<button style="margin-top: 5px; font-size:20px"> 👍🏻</button> 
								<button style="margin-top: 5px; margin-left:10px;font-size:20px;"> Bình luận</button> 
								</div>
								<?php
							}
							

						}

            }
            else
            {
                header("location: /WEBMANGXAHOI/index.php?ctrl=login&func=Index");
            }
 }
  
}