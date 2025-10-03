<div class="container mt-5">
    <div class="row">
        <div class="col-8">
            <h3 class="mb-3">Daftar Siswa</h3>
            <table class="table table-striped table-bordered table-hover shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($data['siswa'] as $siswa): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $siswa['nis'] ?></td>
                        <td><?= $siswa['nama'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
