<html>

<head>
    <title>Tampil Data</title>
</head>
<table border="1">
    <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th colspan="3">action</th>
    </tr>

    <?php
    include "koneksi.php";
    $query = "SELECT * FROM tb_siswa";
    $hasil = mysqli_query($koneksi, $query);
    $no = 1;
    $jum = mysqli_num_rows($hasil);
    ?>
    <tr>
        <td colspan="6">Banyak Data : <?php echo $jum; ?></td>
    </tr>
    <?php
    while ($data = mysqli_fetch_array($hasil)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nis']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><a href="detail.php?nis=<?php echo $data['nis']; ?>">Detail</a></td>
            <td><a href="form_update.php?nis=<?php echo $data['nis']; ?>">Update</a></td>
            <td><a href="delete.php?nis=<?php echo $data['nis']; ?>"
                    onclick="return confirm('Yakin ingin menghapus data?')">Delete</a></td>
        </tr>
        <?php
    }
    ?>
</table>
<p><a href='insert.php'>Daftar</a></p>

</html>