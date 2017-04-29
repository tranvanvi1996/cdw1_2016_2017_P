
<?php


function ThongTinChiTiet() {
    $qr = "SELECT * FROM news
            ORDER BY new_id ";

    return (mysql_query($qr));
}

function QuangCao() {
    $qr = "SELECT * FROM qc
            ORDER BY qc_id ASC  ";

    return (mysql_query($qr));
}
function tintuc() {
    $qr = "SELECT * FROM tintuc";
    return (mysql_query($qr));
}

function ChiTietTheLoai($new_id){
	 $qr="
		SELECT * FROM news
		WHERE new_id = '$new_id' ";
	$row =  mysql_query($qr);
	return mysql_fetch_array($row);
}
function ChiTietTT($tintuc_id)
{
    $qr="
		SELECT * FROM tintuc
		WHERE tintuc_id = '$tintuc_id' ";
	$row =  mysql_query($qr);
	return mysql_fetch_array($row);
}
function login(){
    $qr = "SELECT * FROM checklogin";
    return (mysql_query($qr));
}

?>