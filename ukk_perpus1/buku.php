<h1 class="mt-4">Nama Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <a href="?page=tambah_buku" class="btn btn-primary">+ Tambah Buku</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                <th>No</th>
                <th>Nama Buku</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
                <?php
                $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM buku LEFT JOIN kategoribuku on buku.buku_id = kategoribuku.kategori_id");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['nama_kategori']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['penulis']; ?></td>
                    <td><?php echo $data['penerbit']; ?></td>
                    <td><?php echo $data['tahun_terbit']; ?></td>
                    <td><?php echo $data['deskripsi']; ?></td>
                    <td>
                        <a href="?page=ubah_buku&&id=<?php echo $data['buku_id'] ?>" class="btn btn-info">Edit</a>
                        <a onclick="return confirm('Yakin di Hapus nih? ');" href="?page=hapus_buku&&id=<?php echo $data['buku_id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
        </div>
    </div>