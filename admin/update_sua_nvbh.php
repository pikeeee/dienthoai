<?php
    session_start();
 include('../include/connect.php');
 include('function/function.php');


		$tennd=$_POST['tennd'];
		$user=$_POST['user'];
		$email=$_POST['email'];
	   $dienthoai=$_POST['dienthoai'];
		$id = $_SESSION['idnd'];
		$gioitinh = $_POST['gioitinh'];
	$sql_update=("
		UPDATE nguoidung SET
							tennd='$tennd',
							username='$user',
							email='$email',
							dienthoai='$dienthoai',
                            gioitinh='$gioitinh'
							where idnd=$id
	");
	$update=mysql_query($sql_update);
	if($update)
	{
		redirect("staff.php", "Bạn đã sửa thành công người dùng.", 2 );
	}
	else {
	redirect ("staff.php?staff=suand&idnd=$id", "Sửa thất bại", 2);
	}
	
?>