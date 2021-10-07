<table class="table table-striped">
    <thead>
        <tr>
            <td>
                No
            </td>
            <td>
                Nama
            </td>
            <td>
                Username
            </td>
            <td>
                Password
            </td>
            <td>aksi</td>
        </tr>
    </thead>
    <tbody>
        <?php include "koneksi.php";
        $data = $con->query("SELECT * FROM tb_user");
        foreach ($data as $i => $nilai) {
        ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $nilai['nama'] ?></td>
                <td><?= $nilai['username'] ?></td>
                <td><?= $nilai['password'] ?></td>
                <td>
                    <button type="button" class=" btn btn-warning">Edit</button>
                    <button type="button" class=" btn btn-danger">Hapus</button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>