<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <title>Data Ekstrakurikuler Siswa</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 32px 20px;
        }

        .wrap {
            max-width: 980px;
            margin: 0 auto;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }

        .page-header h2 {
            font-size: 18px;
            color: #10b981;
        }

        .button {
            display: inline-block;
            padding: 6px 14px;
            font-size: 13px;
            font-weight: 500;
            border: 1px solid transparent;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .button-primary {
            background: #10b981;
            color: #fff;
        }

        .button-primary:hover {
            background: #059669;
        }

        .button-warning {
            background: #f59e0b;
            color: #fff;
        }

        .button-warning:hover {
            background: #d97706;
        }

        .button-danger {
            background: #ef4444;
            color: #fff;
        }

        .button-danger:hover {
            background: #dc2626;
        }

        .button-secondary {
            background: #e5e7eb;
            color: #374151;
            border: 1px solid #d1d5db;
        }

        .button-secondary:hover {
            background: #d1d5db;
        }

        .alert {
            padding: 10px 14px;
            border-radius: 4px;
            font-size: 13px;
            margin-bottom: 14px;
        }

        .alert-success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }

        .alert-danger {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        .card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }

        thead th {
            background: #10b981;
            color: #fff;
            padding: 10px;
            text-align: left;
            font-weight: 600;
        }

        tbody td {
            padding: 9px 10px;
            border-bottom: 1px solid #f3f4f6;
            vertical-align: middle;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .badge {
            display: inline-block;
            padding: 2px 7px;
            border-radius: 99px;
            font-size: 11px;
            font-weight: 500;
            margin: 1px 2px;
        }

        .badge-hobi {
            background: #dbeafe;
            color: #1e40af;
        }

        .badge-ekskul {
            background: #ede9fe;
            color: #6d28d9;
        }

        .aksi-group {
            display: flex;
            gap: 5px;
        }

        .empty {
            text-align: center;
            color: #9ca3af;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <div class="page-header">
            <h2>Data Pendaftaran Ekstrakurikuler</h2>
            <a href="tambah.php" class="button button-primary">+ Tambah Siswa</a>
        </div>

        <?php if (isset($_GET["msg"])): ?>
            <div class="alert alert-success"><?= htmlspecialchars($_GET["msg"]) ?></div>
        <?php endif; ?>

        <div class="card">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Tgl Lahir</th>
                        <th>Kota</th>
                        <th>JK</th>
                        <th>Hobi</th>
                        <th>Ekskul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "koneksi.php";
                    $result = mysqli_query($conn, "SELECT * FROM tb_siswa ORDER BY nama ASC");
                    $no = 1;
                    if (mysqli_num_rows($result) === 0):
                        ?>
                        <tr>
                            <td colspan="10" class="empty">Belum ada data.</td>
                        </tr>
                    <?php else:
                        while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= htmlspecialchars($row["nis"]) ?></td>
                                <td><?= htmlspecialchars($row["nama"]) ?></td>
                                <td><?= htmlspecialchars($row["kelas"]) ?></td>
                                <td><?= $row["ttl"] ? date("d/m/Y", strtotime($row["ttl"])) : "-" ?></td>
                                <td><?= htmlspecialchars($row["kota"]) ?></td>
                                <td><?= $row["jk"] === "L" ? "Laki-Laki" : "Perempuan" ?></td>
                                <td>
                                    <?php foreach (explode(",", $row["hobi"]) as $h): ?>
                                        <span class="badge badge-hobi"><?= htmlspecialchars(trim($h)) ?></span>
                                    <?php endforeach; ?>
                                </td>
                                <td>
                                    <?php foreach (explode(",", $row["ekskul"]) as $e): ?>
                                        <span class="badge badge-ekskul"><?= htmlspecialchars(trim($e)) ?></span>
                                    <?php endforeach; ?>
                                </td>
                                <td>
                                    <div class="aksi-group">
                                        <a href="edit.php?nis=<?= urlencode($row["nis"]) ?>"
                                            class="button button-warning">Edit</a>
                                        <a href="hapus.php?nis=<?= urlencode($row["nis"]) ?>" class="button button-danger"
                                            onclick="return confirm('Hapus data <?= htmlspecialchars($row["nama"]) ?>?')">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endwhile; endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>