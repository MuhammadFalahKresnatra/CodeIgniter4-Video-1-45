<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col">
        <?= view_cell('App\Controllers\Admin\Menu::option') ?>
    </div>
</div>

<div class="row mt-3">



    <h1> UPLOAD IMAGE </h1>

    <form action="<?= base_url('/admin/menu/insert') ?>" method="post" enctype="multipart/form-data">
        Gambar : <input type="file" name="gambar" required>

        <br><br>
        <input type="submit" name="simpan" value="SIMPAN">

    </form>

</div>

<?= $this->endSection() ?>