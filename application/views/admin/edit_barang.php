<div class="container-fluid">
    <h3>Edit Data Barang</h3>

    <?php foreach ($barang as $brg) : ?>

        <form action="<?= base_url() . 'admin/data_barang/update'; ?>" method="POST">

            <div class="form-group">
                <label for="stok"></label>
                <input type="hidden" name="id_brg" id="id_brg" class="form-control" value="<?= $brg->id_brg; ?>">
            </div>
            <div class="form-group">
                <label for="nama_brg">Nama Barang</label>
                <input type="text" name="nama_brg" id="nama_brg" class="form-control" value="<?= $brg->nama_brg; ?>">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" class="form-control" value="<?= $brg->keterangan; ?>">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" value="<?= $brg->kategori; ?>">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control" value="<?= $brg->harga; ?>">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" name="stok" id="stok" class="form-control" value="<?= $brg->stok; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
    <?php endforeach; ?>
</div>