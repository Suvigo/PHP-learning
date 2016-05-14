<?php
    header("Content-type: text/html; charset= utf-8");
    include("conn/conn.php");
    if(isset($_POST['registe_submit']) && $_POST['registe_submit'] == "确认注册"){
      $sql = "insert into register_info(name,stuid,sex,age,class,phone,nickname,qq) values('".$_POST['stu_name']."',
            '".$_POST['stu_id']."','".$_POST['stu_sex']."','".$_POST['stu_age']."','".$_POST['stu_cla']."',
            '".$_POST['stu_tel']."','".$_POST['stu_nick']."','".$_POST['stu_qq']."')";

      $insert = mysqli_query($conn,$sql);
      if($insert){
        echo "<script>alert('注册成功!');window.location.href='registe.php'</script>;";
      }
      else{
        echo "<script>alert('注册失败!');window.location.href='registe.php'</script>;";
      }
    }
?>
