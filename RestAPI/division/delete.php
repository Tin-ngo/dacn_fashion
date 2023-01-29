<?php 
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Mehtods: POST");
header("Access-Control-Allow-Headers:Access-Control-Allow-Mehtods,Content-Type,Access-Control-Allow-Mehtods,Authorization,X-Requested-With");

require_once "../model/division.php";
$division_obj = new Division();

$id = isset($_GET['id']) ? $_GET['id'] : null;
if(isset($id)){
	$result = $division_obj->delete($id);
	if($result){
		$division_obj->deliver_response(200, "Đã xóa thành công", null);
	}else{
		$division_obj->deliver_response(200, "Không xóa được dữ liệu", null);
	}
}else{
	$division_obj->deliver_response(400, "Không hợp lệ - thiếu giá trị id để xóa", null);
}

//http://localhost:8080/WORK_SPACE/dacn1_fashion/RestAPI/order/delete.php?id= id record cần xóa
?>