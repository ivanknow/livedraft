<?php
$param = $_POST;
if($param['opt'] == "W"){
file_put_contents("../talks/".$param['writer'].".txt",$param['points'],FILE_APPEND);
}else{
echo file_get_contents("../talks/".$param['reader'].".txt");
}
?>