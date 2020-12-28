<link rel="stylesheet" href="/css/part_pages/formOrder.css">
<section class="order-form my-4 mx-4">
  <div class="container pt-4">

    <div class="row">
      <div class="col-12">
        <h1>Isi alamat pada Order Form</h1>
        <span>Isilah dengan alamat yang jelas</span>
        <hr class="mt-1">
      </div>
      <div class="col-12">
        <input type="hidden" value="<?=$result['nama'];?>" name="nama_product">
        <input type="hidden" value="<?=user_id(); ?>" name="id_users">
        <input type="hidden" value="<?=$result['harga']+15000;?>" name="total_harga">
        <input type="hidden" value="pending" name="status_pembayaran">
        <div class="col-12">
            <label class="order-form-label"> Total Pembayaran : <?= $result['harga']+15000; ?></label>
          </div>
        <div class="row mt-3 mx-4">
          <div class="col-12">
            <label class="order-form-label">Pilih Metode Pembayaran </label>
          </div>
          <div class="form-check form-check-inline pl-0" style="margin-left: 20px;;">
            <input type="radio" class="form-check-input" id="COD" name="radio" value="COD" checked>
            <label class="form-check-label small text-uppercase card-link-secondary" for="small">COD</label>
          </div>
          <div class="form-check form-check-inline pl-0">
            <input type="radio" class="form-check-input" id="Transfer" name="radio" value="Transfer">
            <label class="form-check-label small text-uppercase card-link-secondary" for="medium">Transfer</label>
          </div>
          <div class="col-12">
            <label class="order-form-label">Alamat Tujuan</label>
          </div>
          <div class="col-12">
            <input class="order-form-input" placeholder="Alamat Jln" required name="alamat1" id="alamat1">
          </div>
          <div class="col-12 mt-2">
            <input class="order-form-input" placeholder="Alamat Rumah" required name="alamat2" id="alamat2">
          </div>
          <div class="col-12 col-sm-6 mt-2 pr-sm-0">
            <input class="order-form-input" placeholder="Kota" required name="alamat3" id="alamat3">
          </div>
          <div class="col-12 col-sm-6 mt-2 pl-sm-2">
            <input class="order-form-input" placeholder="Postal / Zip Code" type="number" required name="alamat4" id="alamat4">
          </div>
          <div class="col-12 col-sm-6 mt-2 pr-sm-0">
            <input class="order-form-input" placeholder="Provinsi" required name="alamat5" id="alamat5">
          </div>
        </div>
        <div class="row mt-3 mx-4">
          <div class="col-12">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="validation" id="validation" value="1">
              <label for="validation" class="form-check-label">I know what I need to know</label>
            </div>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-8"></div>
          <div class="col-1">
            <button type="submit" id="btnSubmit" class="btn btn-dark d-block mx-auto btn-submit">Submit</button>
          </div>
          <div class="col-1">
            <button type="button" id="btnSubmit" class="btn btn-warning d-block mx-auto btn-submit" onclick="closeForm();">Cancel</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>