<div class="row ">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Order Status <?= $validation->getError('bukti_pembayaran'); ?></h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th> Order No </th>
                <th> Product Cost </th>
                <th> Product Name </th>
                <th> Payment Mode </th>
                <th> Address </th>
                <th> Payment Status </th>
                <th> Upload Foto</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($result as $data) : ?>
                <tr>
                  <td> <?= $data['id']; ?> </td>
                  <td> <?= $data['total_harga']; ?> </td>
                  <td> <?= $data['nama_product']; ?> </td>
                  <td> <?= $data['metode_pembayaran']; ?> </td>
                  <td> <?= $data['alamat']; ?> </td>
                  <td>
                    <div class="badge badge-outline-success"><?= $data['status_pembayaran']; ?></div>
                  </td>
                  <td>
                    <img src="/img/bukti_pembayaran/<?= $data['bukti_pembayaran'];?>" alt="JPG">
                    <form action="userpanel/upload/<?= $data['id']; ?>" method="POST" enctype="multipart/form-data">
                      <?= csrf_field(); ?>
                      <div class="">
                        <div class="custom-file badge badge-outline-success">
                          <input type="file" class="custom-file-input form-control" id="bukti_pembayaran" name="bukti_pembayaran" placeholder="Choose File">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>
            <tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>