<h1>User data</h1>
<?php var_dump(user()->username) ?>

<table>
    <thead>
        <th>No Order</th>
        <th>Nama Product</th>
        <th>Total Pembayaran</th>
        <th>Status Pembayaran</th>
        <th>Upload Bukti Pembayaran</th>
    </thead>
    <?php foreach ($result as $data) : ?>
        <tr>
            <td>
                <p><?= $data['id']; ?></p>
            </td>
            <td>
                <p><?= $data['nama_product']; ?></p>
            </td>
            <td>
                <p><?= $data['total_harga']; ?></p>
            </td>
            <td>
                <p><?= $data['status_pembayaran']; ?></p>
            </td>
            <td>
                <!-- <p><?= $data['bukti_pembayaran'] ?></p> -->
                <form action="userpanel/upload/<?=$data['id'];?>" method="POST">
                    <button type="submit">Upload</button>
                </form>

                <!-- <input type="file"> -->
            </td>
        </tr>
    <?php endforeach; ?>
</table>