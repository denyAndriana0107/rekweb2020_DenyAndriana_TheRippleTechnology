<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <!--Section: Block Content-->
  <section class="mb-5" style="margin-top: 50px;">

    <div class="row">
      <div class="col-md-6 mb-4 mb-md-0">

        <div id="mdb-lightbox-ui"></div>

        <div class="mdb-lightbox">

          <div class="row product-gallery mx-1">

            <div class="col-12 mb-0 text-center" style="border-style:solid; border-color:#f1f1f1; height:400px;">
              <figure class="view overlay rounded z-depth-1 main-img">
                <img src="<?= $result['image']; ?>" style="margin-top: 10%;" class="img-fluid z-depth-1 ">
              </figure>
            </div>

          </div>

        </div>

      </div>
      <div class="col-md-6">

        <h5><strong><?= $result['nama']; ?></strong></h5>
        <p><span class="mr-1"><strong>IDR : <?= $result['harga']; ?></strong></span></p>
        <p class="pt-1"><?= $result['deskripsi']; ?></p>
        <div class="table-responsive">
          <table class="table table-sm table-borderless mb-0">
            <tbody>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>RAM </strong></th>
                <td><?= $result['ram']; ?></td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Storage </strong></th>
                <td><?= $result['rom']; ?></td>
              </tr>
              <tr>
                <th class="pl-0 w-25" scope="row"><strong>Delivery</strong></th>
                <td>JNE Regular, IDR : 15000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <hr>
        <div class="table-responsive mb-2">
          <table class="table table-sm table-borderless">
            <tbody>
              <tr>
                <td class="pl-0 pb-0 w-25">Quantity</td>
                <td class="pb-0">Metode Pembayaran Tersedia</td>
              </tr>
              <tr>
                <td class="pl-0">
                  <div class="def-number-input number-input safari_only mb-0">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                  </div>
                </td>
                <td>
                  <div class="mt-1">
                    <div class="form-check form-check-inline pl-0">
                      <!-- <input type="radio" class="form-check-input" id="COD" name="materialExampleRadios"
                    checked> -->
                      <label class="form-check-label small text-uppercase card-link-secondary" for="small">1. COD</label>
                    </div>
                    <div class="form-check form-check-inline pl-0">
                      <!-- <input type="radio" class="form-check-input" id="Transfer" name="materialExampleRadios"> -->
                      <label class="form-check-label small text-uppercase card-link-secondary" for="medium">2. Transfer</label>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <button type="button" class="btn btn-primary btn-md mr-1 mb-2" onclick="openForm();">Buy now</button>
      </div>
    </div>

  </section>
  <!--Section: Block Content-->

  <!-- Section Form POST Order -->
  <div>
    <form action="/order" method="POST" class="form-popup" style=" display: none;
  position:absolute;
  bottom: 10px;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
  background-color: white" id="orderForm">

      <?= $this->include('page/part_pages/formOrder') ?>
    </form>
  </div>
</div>
<!-- Section End Form POST Order -->
<script>
  function openForm() {
    <?php
    if (logged_in()) : ?>
      document.getElementById("orderForm").style.display = "block";
    <?php else : ?>
      window.location.replace('/login');
    <?php endif; ?>
  }

  function closeForm() {
    document.getElementById("orderForm").style.display = "none";
  }
</script>
<?= $this->endSection(); ?>