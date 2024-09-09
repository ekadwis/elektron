<?= $this->extend('layout/template'); ?>

<?= $this->section('content') ?>

<form action="<?= base_url(); ?>edit-barang" method="POST" class="w-75" enctype="multipart/form-data">

    <?= csrf_field(); ?>

    <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" aria-describedby="emailHelp" name="nama_barang" value="<?= $result['nama_barang']?>" required>
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp" name="deskripsi" value="<?= $result['deskripsi']?>" required>
    </div>
    <div class="mb-3">
        <label for="kategori" class="form-label">Kategori</label>
        <input type="text" class="form-control" id="kategori" aria-describedby="emailHelp" name="kategori" value="<?= $result['kategori']?>" required>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" aria-describedby="emailHelp" name="harga" value="<?= $result['harga']?>" required>
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok</label>
        <input type="number" class="form-control" id="stok" aria-describedby="emailHelp" name="stok" value="<?= $result['stok']?>" required>
    </div>
    <div class="mb-3">
        <label for="merek" class="form-label">Merek</label>
        <input type="text" class="form-control" id="merek" aria-describedby="emailHelp" name="merek" value="<?= $result['merek']?>" required>
    </div>
    <input type="hidden" class="form-control" id="image" aria-describedby="emailHelp" name="image" value="<?= $result['image']?>" required>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Edit</button>
    </div>
</form>


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