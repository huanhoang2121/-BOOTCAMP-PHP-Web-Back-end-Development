<?php
require ('../database/DB.php');
$db = new Database();

$id = intval($_GET['id']);
if($db->delete('students', $id)){
    echo 'Xóa thành công';
	header('Location: ./displaystudent.php');
}else {
    echo "Lỗi: " .$db->error();
} 
?>