<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash()?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal"
                data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <form action="<?=BASEURL;?>/mahasiswa/cari" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa..."
                        name="keyword" id="keyword">
                    <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php
                foreach($data['mhs'] as $mhs) : ?>
                <li class="list-group-item align-items-center">
                    <?=$mhs['nama']; ?>
                    <a href="<?=BASEURL;?>/mahasiswa/hapus/<?= $mhs['id'];?>"
                        class="badge text-bg-danger float-end ms-2" style="text-decoration:none;"
                        onclick="return confirm ('yakin untuk menghapus?')">Hapus</a>
                    <a href="<?=BASEURL;?>/mahasiswa/edit/<?= $mhs['id'];?>"
                        class="badge text-bg-warning float-end tampilModalEdit" data-bs-toggle="modal"
                        data-bs-target="#formModal" style="text-decoration:none;" data-id="<?=$mhs['id'];?>">Edit</a>
                    <a href="<?=BASEURL;?>/mahasiswa/detail/<?= $mhs['id'];?>"
                        class="badge text-bg-primary float-end me-2" style="text-decoration:none;">Detail</a>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?=BASEURL;?>/mahasiswa/tambah" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim" aria-describedby="emailHelp"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="emai;" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select" id="jurusan" name="jurusan" aria-label="Default select example"
                            required>
                            <option selected>Pilih Jurusan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>