<div class="panel panel-default">
                        <div class="panel-heading">
                        Tambah Transaksi
                        </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                    <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" />
                                        </div>
                                        
                                    <div class="form-group">
                                            <label>Nim</label>
                                            <input class="form-control" name="nim" />
                                        </div>
                                      <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" />
                                        </div>
                                       
                                    <div class="form-group">
                                            <label>Tanggal Pinjam</label>
                                            <input class="form-control" type="date" name="tgl_pinjam"  />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input class="form-control" type="date" name="tgl_kembali"  />
                                        </div>

                                        <div class="form-group">
                                            <label>Terlambat</label>
                                            <input class="form-control" name="terlambat"  />
                                        </div>

                                    <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="prodi">
                                            <option value=""></option>
                                            <option value="">Sistem Informasi</option>
                                            </select>
                                        </div>   


                                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary"
                            </div>
                            </div>   

                            </form>         
</div>            
</div>                       
</div>                      
<?php
$judul = $_POST['judul'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$terlambat = $_POST['terlambat'];
$status = $_POST['status'];

$simpan = $_POST['simpan'];

if ($simpan) {
    $sql=$koneksi->query ("insert into tb_transaksi(nim,nama,tempat_lahir,tgl_lahir,jk,prodi)
    values('$nim','$nama','$tempat_lahir','$tgl_lahir','$jk','$prodi')");

    if ($sql) {
        ?>
            <script type="text/javascript">
            alert ("Data Berhasil Disimpan");
            window,location.href="?page=transaksi";
            </script>
            <?
            
        <?php
    }
}
?>