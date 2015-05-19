<?php
echo $todo_list['aktivitas'].'</br>';
echo '<b> Deadline : '.$todo_list['tanggal'].'</b><br>';
$st = $todo_list['status'];
if($st == 1){
	echo 'Status : Kelar</br>';	
}else {
	echo 'Status : Belum Kelar</br>';
}
echo $todo_list['deskripsi'];

?>