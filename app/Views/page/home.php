<?=$this->extend('layout/template');?>
<?=$this->section('content');?>  
<div class="container">
    <div class="row">
    <?php foreach ($result as $data):?>
        <div class="col-md-4">
        <p><?=$data['nama'];?></p>
        <!-- <p>Storage Capacity : <?=$data['rom'];?></p>
        <p>RAM : <?=$data['ram'];?></p>
        <p><?=$data['deskripsi'];?></p> -->
        <a href="/product/<?=$data['id'];?>">
            <img src="<?=$data['image'];?>" alt="JPG"><br>
        </a>
        <hr>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<img src="" alt="">
<svg-icon><src href="sprite.svg#si-glyph-airplane-2" /></svg-icon>
<?=$this->endSection();?>


