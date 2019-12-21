<?php
function terlambat($tgl_dateline,$tgl_kembali){
    $tgl_dateline_pecah = explode("_",$tgl_dateline);
    $tgl_dateline_pecah= $tgl_dateline[2]."_".tgl_dateline[1],."_".$tgl_dateline[0];

    $tgl_kembali = explode("_",$tgl_kembali);

    $tgl_kembali_pecah = $tgl_kembali_pecah[2]."_".$tgl_kembali_pecah[1]."_".$tgl_kembali_pecah[0];

    $selisih = strtotime($tgl_kembali_pecah)-strtotime($tgl_dateline_pecah); 
    $selisih = $selisih/86400;

    if($selisih>=1){
        $hasi_tgl = floor($selisih);
    }
    else{
        $hasi_tgl = 0;
    }
    return $hasi_tgl;
}
?>