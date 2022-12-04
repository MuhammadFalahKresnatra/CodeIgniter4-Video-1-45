<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>


<?php

if (isset($_GET['page_page'])) {
    $page = $_GET['page_page'];
    $jumlah = 3;
    $no = ($jumlah * $page) - $jumlah + 1;
} else {
    $no = 1;
}

?>

<div class="row">

    <div class="col-4">
        <a class="btn btn-primary" href="<?= base_url('/admin/menu/create') ?>" role="button"> TAMBAH DATA </a>
    </div>

    <div class="col">
        <h2> <?= $judul; ?> </h2>
    </div>

</div>

<div class="row mt-2">
    <div class="col-6">
        <form action="<?= base_url('/admin/menu/read') ?>" method="get">

            <?= view_cell('App\Controllers\Admin\Menu::option') ?>

        </form>

    </div>

</div>


<div class="row mt-2">

    <div class="col">
        <table class="table">

            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Foto</th>
                <th>Harga</th>
                <th>Aksi</th>

            </tr>
            <?php $no ?>
            <?php foreach ($menu as $key => $value) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['menu'] ?></td>
                    <td><img style="width: 80px;" src="<?= base_url('/upload/' . $value['gambar'] . '') ?>"> </td>
                    <td><?= number_format($value['harga'])  ?></td>
                    <td>
                        <a href="<?= base_url() ?>/admin/menu/delete/<?= $value['idmenu'] ?>"><img src="<?= base_url('/icon/can.svg') ?>"></a>
                        <a href="<?= base_url() ?>/admin/menu/find/<?= $value['idmenu'] ?>"><img src="<?= base_url('/icon/pen.svg') ?>"></a>
                    </td>

                </tr>
            <?php endforeach; ?>

        </table>

        <?= $pager->links('page', 'bootstrap') ?>

    </div>

</div>

<?= $this->endSection() ?>