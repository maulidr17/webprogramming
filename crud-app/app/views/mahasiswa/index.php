<div class="container mt-4">

    <div class="row">
        <div class="col-6">
            <h3 style="margin-left: 40%">Daftar Mahasiswa</h3>
            <div class="row">
                <div class="col">
                    <?php Flasher::flash() ?>
                </div>
            </div>
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#insertModal">
                Insert Data Mahasiswa
            </button>
            <table class="table table-hover table-bordered mt-3">
                <thead class="thead-dark">
                    <tr align="center">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                        <tr align="center">
                            <th scope="row"><?= $mhs['id']; ?></th>
                            <td><?= $mhs['nama']; ?></td>
                            <td><?= $mhs['npm']; ?></td>
                            <td><?= $mhs['jenis_kelamin']; ?></td>
                            <td><?= $mhs['email']; ?></td>
                            <td><?= $mhs['jurusan']; ?></td>
                            <td><?= $mhs['alamat']; ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success tampilModalUbah" data-toggle="modal" data-target="#insertModal" data-id="<?= $mhs['id']; ?>">update</a>
                                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger" onclick="return confirm('Anda yakin ingin menghapus data mahasiswa ini?');">delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

        </div>
    </div>

</div>

<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertModalLabel">Insert Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="number" class="form-control" id="npm" name="npm">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Select Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Select Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option>Teknik Informatika</option>
                            <option>Sistem Informasi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Data</button>
                </form>
            </div>
        </div>
    </div>
</div>