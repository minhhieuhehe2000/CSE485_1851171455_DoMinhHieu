<?php
function select_danhsachgiaovien($option){
    global $db;
    $query = "SELECT * FROM danhsachgiaovien ";
    $data = $db->query($query) or die('Loi truy van');
    return $data;
}
 
function add_danhsachgiaovien($MaGV,$TenGV,$Gioitinh, $Ngaysinh,$Diachi, $Email, $DayMon,$Sodienthoai){
  global $db;
  $sql = "INSERT INTO admin(MaGV, TenGV, Gioitinh, Ngaysinh, Diachi, Email,  DayMon, Sodienthoai)
                            VALUES('','$MaGV','$TenGV','$Gioitinh', '$Ngaysinh','$Diachi', '$Email', '$DayMon','$Sodienthoai')";
  $db->exec($sql) or die('Loi truy van');
  echo 'Da them thanh cong';
}
 

