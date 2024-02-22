<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM kategoribuku where kategori_id=$id");
?>
<script>
    alert("Hapus Kategori Berhasil");
    location.href = "index.php?page=kategori";
</script>