<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Trang chủ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/trangchu.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<nav id="fixNav">
  <ul>
    <li><a href="#">🏠 Trang chủ</a></li>
    <li><form action="" method="POST"> <input type="text" name="tentim" placeholder="Tìm kiếm">
    
                            <button type="submit" name="btntim"> 
                                🔍
                            </button>
                        
        </form></li>
    <li><a href="#">👨‍👩‍👧‍👦 Nhóm</a></li>
    <li><a href="#">🎏 Trang</a></li>
    <li><a href="#">💬 CHAT</a></li>
    <li><a href=""> 
        <?php 
            if(isset($_SESSION['us']))
                echo $_SESSION['us'];
         ?>🔻
         </a>
        <ul >
          <li><a href="#">Trang Cá Nhân</a></li>
          <li><a href="#">Chỉnh Sửa Thông Tin</a></li>
          <li><a href="/mxh/index.php?ctrl=login&func=logout" method="POST">ĐĂNG XUẤT</a></li>
         </ul>
        </a>
    </li>
  </ul>
</nav>
<TABLE >
<<tr>
    <td height="20px"></td>
</tr> 
</TABLE>
 
   

</body>
</html>