<section class="section  bg-light>
      <div class="clearfix mb-10 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-left heading-wrap">
              <h2>Products</h2>
              <span class="back-text">Our Products</span>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="row">
        <?php foreach ($result as $data):?>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="blog d-block">
              <a class="bg-image d-block" href="/product/<?= $data['id']; ?>" style="background-image: url('<?= $data['image'];?>');"></a>
              <div class="text">
                <h3 class="text-center"><a href="/product/<?= $data['id']; ?>"><?= $data['nama']; ?></a></h3>
                <p class="sched-time">
                  <span><span class="fa fa-calendar"></span>RAM : <?=$data['ram']; ?> ROM : <?=$data['rom']; ?></span> <br>
                </p>
                <p>IDR : <?=$data['harga']; ?></p>
                <br>
                <p><a href="/product/<?= $data['id']; ?>" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>

    </section> <!-- .section -->
