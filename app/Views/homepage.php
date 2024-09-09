<?= $this->extend('layout/template'); ?>

<?= $this->section('content') ?>
<?php if (session()->getFlashdata('msg-barang')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('msg-barang'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="row">
    <div class="col">
        <h2 class="my-5 fw-bold">Daftar barang</h2>
    </div>
    <div class="col mt-5">
        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Barang
        </button>
    </div>
</div>

<!-- Tambah Data Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masukan data Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url(); ?>tambahbarang" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" aria-describedby="emailHelp" name="nama_barang" placeholder="Masukan nama barang" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp" name="deskripsi" placeholder="Masukan Deskripsi" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="kategori" aria-describedby="emailHelp" name="kategori" placeholder="Masukan Kategori" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" aria-describedby="emailHelp" name="harga" placeholder="Masukan Harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" aria-describedby="emailHelp" name="stok" placeholder="Masukan Stok" required>
                    </div>
                    <div class="mb-3">
                        <label for="merek" class="form-label">Merek</label>
                        <input type="text" class="form-control" id="merek" aria-describedby="emailHelp" name="merek" placeholder="Masukan Merek" required>
                    </div>
                    <div class="mb-3">
                        <label for="Gambar Produk" class="form-label">Gambar Produk</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Table  -->
<table id="example" class="display" style="width:100%;">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Gambar</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Data -->
        <?php $i = 1; ?>
        <?php foreach ($barang as $brg) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $brg['nama_barang']; ?></td>
                <td>
                    <img src="/img/<?= $brg['image']; ?>" style="width:50px;height:50px;" class="img-fluid rounded" alt="Gambar Barang">
                </td>
                <td><?= $brg['harga']; ?></td>
                <td><?= $brg['stok']; ?></td>
                <td><?= $brg['status']; ?></td>
                <td>
                    <a href="edit/<?= $brg['id_barang']; ?>">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a href="delete/<?= $brg['id_barang']; ?>">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="scripts.js"></script>
<?= $this->endSection(); ?>