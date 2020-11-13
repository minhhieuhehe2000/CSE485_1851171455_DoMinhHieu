<?php
function select_fruit($option){
    global $db;
    $query = "SELECT * FROM fruit";
    $data = $db->query($query) or die('Loi truy van');
    return $data;
}
 
function add_danhsachgiaovien($Maqua,$Tenqua,$Giatien){
  global $db;
  $sql = "INSERT INTO admin(MaGV, Tenqua, Giatien)
                            VALUES('','$Maqua','$Tenqua','$Giatien')";
  $db->exec($sql) or die('Loi truy van');
  echo 'Da them thanh cong';
}
 

