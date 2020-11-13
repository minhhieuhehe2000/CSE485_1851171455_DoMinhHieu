<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<html>
<head>
<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getUsers.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>
<h1> Danh Sách Sinh Viên </h1>
<form>
<select name="users" onchange="showUser(this.value)">
  <option value=""> -- Chọn tên sinh viên -- </option>
  <option value="1"> Mark Dooley </option>
  <option value="2"> Lewis Kirkbride </option>
  <option value="3"> Jack Lee </option>
  <option value="4"> Mary Jefferson </option>
  </select>
</form>
<br>
<div id="txtHint"><b>Bạn cần chọn tên 1 sinh viên</b></div>


</body>
</html>
</body>
</html>