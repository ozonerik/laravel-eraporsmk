<?php
function hak_akses($hakakses,$ids){
	$hakaksesids = explode(',',$hakakses);
	if (in_array($ids, $hakaksesids)) {
		$hasil=TRUE;
	}else{
		$hasil=FALSE;
	}
	return $hasil;
}
?>