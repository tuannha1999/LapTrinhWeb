<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Trang chủ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/header.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<nav id="fixNav">
  <ul>
  
  <nav id="fixNav1">
    <li><a href="/WEBMANGXAHOI/index.php?ctrl=trangchu&func=Index">🏠 Trang chủ</a></li>
  </nav> 
  <nav id="fixNav2">
    <li><form action="index.php?ctrl=timkiem" method="POST"> <input type="text" name="tentim" placeholder="Tìm kiếm">
    
                            <button type="submit" name="btntim" ><!-- <a href=""></a>  -->
                                🔍  
                            </button>
                        
        </form></li>
  </nav>    
  <nav id="fixNav3">
    <li><a href="#">👨‍👩‍👧‍👦 Nhóm</a></li>
  </nav>
  <nav id="fixNav4">
    <li><a href="#">🎏 Trang</a></li>
  </nav>
  <nav id="fixNav5"> 
    <li><a href="#">💬 CHAT</a></li>
  </nav>
  <nav id="fixNav6">  
    <li><a href=""> 
        <?php 
            if(isset($_SESSION['us']))
                echo $_SESSION['us'];
         ?>🔻
         </a>
        <ul >
          <!-- <li><a href="#">Trang Cá Nhân</a></li> -->
          <li><a href="/WEBMANGXAHOI/index.php?ctrl=dangbai&func=index" method="POST">ĐĂNG BÀI</a></li>
          <li><a href="/WEBMANGXAHOI/index.php?ctrl=chinhsua&func=Index">Chỉnh Sửa Thông Tin</a></li>
          <li><a href="/WEBMANGXAHOI/index.php?ctrl=login&func=logout" method="POST">ĐĂNG XUẤT</a></li>
         </ul>
        </a>
    </li>
  </nav> 
  </ul>
</nav>

<!-- <div class="tableleft" ></div> -->

</body>
</html>
