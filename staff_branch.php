<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ロクマル農園</title>
</head>
<body>

  <?php
  session_start();
  session_regenerate_id(true);
  if(isset($_SESSION['login'])==false){
    print'ログインされていません<br/>';
    print'<a href="../staff_login/staff_login.html">ログイン画面へ</a>';
    exit();
  }
  
  if(isset($_POST['disp'])==true){

  if(isset($_POST['staffcode'])==false){
    header('Location:staff_ng.php');
    exit();
  }

    header('Location:staff_disp.php?staffcode='.$_POST['staffcode']);
    exit();
  }

  if(isset($_POST['add'])==true){

    header('Location:staff_add.php');
    exit();
  }

if(isset($_POST['edit'])==true){

if(isset($_POST['staffcode'])==false){
  header('Location:staff_ng.php');
  exit();
}

  header('Location:staff_edit.php?staffcode='.$_POST['staffcode']);
  exit();
}


if(isset($_POST['delete'])==true){

  if(isset($_POST['staffcode'])==false){
    header('Location:staff_ng.php');
    exit();
  }

  header('Location:staff_delete.php?staffcode='.$_POST['staffcode']);
  exit();
}
   ?>

</body>
</html>
