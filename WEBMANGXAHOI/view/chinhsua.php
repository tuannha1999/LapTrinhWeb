<!DOCTYPE html>
<html lang="en">
<head>
    <title> Chỉnh sửa thông tin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/header.css" rel="stylesheet" type="text/css"/>
</head>
<body>



 
<!-- <div class="tableleft"> </div>

<div class="tableright"> </div> -->

<div class="infor">
<?php
foreach($kqs as $v)?>
<form style="text-align:center;" ation="" method="POST" enctype="multipart/form-data" >
           <h2> Chỉnh Sửa Thông Tin<br></h2>
                 <img style="height: 168px; width: 168px;clip-path: circle(80px at 50% 50%);" 
                src="hinh/<?php echo $v['avatar'];?>" alt=""/><br>
             
                <!-- <input type="file" name="hinh" id="hinh" class="inputfile" ><br>
                <label for="hinh">Đổi avatar</label><br> -->
               
      Đổi AVATAR: <input type="file" name="hinh"  ><br>
      Họ tên: <input type="text" name="tensua" value="<?php echo $v['hoten'];?>"><br>
                Số Điện thoại: <input type="text" name="sdt" value="<?php echo $v['sdt'];?>"><br>
                Ngày Sinh: <input type="date" name="ns" value="<?php echo $v['ngaysinh'];?>"><br>

        Giới tính:
        <input type="radio" name="gt" <?php if($v['gioitinh']==1) echo'checked';?> value="1" >Nam
		<input type="radio" name="gt"<?php if($v['gioitinh']==0) echo'checked'; ?> value="0">Nữ<br>
        <input type="submit" name="btnsua" value="Cập nhật thông tin">
</form>
</div>
</body>
</html>
