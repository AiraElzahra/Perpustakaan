<a href= "?page=transaksi&aksi=tambah" class ="btn btn-primary" style="margin-bottom: 5px;">Tambah Transaksi</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Transaksi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No </th>
                                            <th>Judul</th>
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Terlambat</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $no_urut = 0;
                                            $sql = $koneksi->query("select* from tb_transaksi where $status='pinjam'");
                                            while($data=$sql->fetch_assoc()){
                                            $no_urut++;
                                    ?>
                                    <tr> 
                                    <td><?php echo $no_urut; ?></td>
                                    <td><?php echo $data['judul']; ?></td>
                                    <td><?php echo $data['nim']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['tgl_pinjam']; ?></td>
                                    <td><?php echo $data['tgl_kembali']; ?></td>
                                    <td><?php echo $data['status']; ?></td>
                                    <td> <a href="?page=transaksi&aksi=ubah&id=<?php echo $data['nim']; ?>" class="btn btn-info">Ubah</a> 
                                        <a onclick="return confirm( 'Anda Yakin Akan Menghapus data ini .....???')"
                                         href="?page=transaksi&aksi=hapus&id=<?php echo $data['nim']; ?> " class="btn btn-danger">Hapus</a>
                                    </td>
                                    </tr>
                                    
                                        <?php } ?>
                                    </tbody>