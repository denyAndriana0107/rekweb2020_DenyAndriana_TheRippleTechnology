<!-- <h3><a href="/adminpanel/add">Add Produc</a></h3> -->
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">product</th>
            <th scope="col">RAM</th>
            <th scope="col">ROM</th>
            <th scope="col">Harga</th>
            <th scope="col">action edit</th>
            <th scope="col">action delete</th>
        </tr>
    </thead>
    <?php $i = 1; ?>
    <?php foreach ($result as $data) : ?>
        <tr>
            <th scope="row">
                <p id="deleteCau"><?= $i; ?></p>
            </th>
            <td><?= $data['nama']; ?></td>
            <td><?= $data['ram']; ?></td>
            <td><?= $data['rom']; ?></td>
            <td><?= $data['harga']; ?></td>
            <td>
                <a href="/adminpanel/edit/<?= $data['id']; ?>"><button class="btn btn-warning">Edit</button></a>
            </td>
            <td>
                <button class="btn btn-danger" onclick="confirmDialog()"><a href="/adminpanel/delete/<?= $data['id']; ?>">Delete</button>
            </td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
</table>

<h2>order</h2>
<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Order Status</h4>
                <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">NO</th>
                            <th scope="col">product</th>
                            <th scope="col">id_order</th>
                            <th scope="col">alamat</th>
                            <th scope="col">total_harga</th>
                            <th scope="col">Status Order</th>
                            <th scope="col">confirm Order</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <?php foreach ($order as $data) : ?>
                        <tr>
                            <td>
                                <p id="deleteCau"><?= $i; ?></p>
                            </td>
                            <td><?= $data['nama_product']; ?></td>
                            <td>Id order : <?= $data['id']; ?></td>
                            <td>Alamat<?= $data['alamat']; ?></td>
                            <td><?= $data['total_harga']; ?></td>
                            <td>
                                <div class="col-2">
                                    <?= $data['status_pembayaran']; ?>
                                </div>
                                <!-- <img src="/img/bukti_pembayaran/<?= $data['bukti_pembayaran']; ?>" style="width: 400px; height:auto;" alt="Jpg"> -->
                            </td>
                            <td>
                                <form action="adminpanel/confirmOrder/<?= $data['id']; ?>" method="POST">
                                    <input type="radio" name="radios" id="radios" checked value="Dikirim">Diterima
                                    <input type="radio" name="radios" id="radios" value="Ditolak">Ditolak
                                    <button type="submit" class="btn btn-warning">confirm</button>
                                </form>
                            </td>
                        </tr> <?php $i++; ?> <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>