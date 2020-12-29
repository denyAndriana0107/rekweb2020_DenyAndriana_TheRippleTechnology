<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
<h2>Edit Product</h2>
<div class="container">
    <form action="https://phoneapideny.herokuapp.com/Phone/<?= $result['id']; ?>" id="searchForm">
        <div class="form-group">
            <label for="nama">Nama Product</label>
            <input type="text" class="form-control" name="nama" placeholder="Name" value="<?= $result['nama']; ?>" required>
        </div>
        <div class="form-group">
            <label for="image">SiteStrip image</label>
            <input type="text" class="form-control" name="image" value="<?= $result['image']; ?>" placeholder="linkImage" required>
        </div>
        <div class="form-group">
            <label for="image">Harga</label>
            <input type="text" class="form-control" name="harga" value="<?= $result['harga']; ?>" placeholder="harga" required>
        </div>
        <div class="form-group">
            <label for="ram">RAM</label>
            <input type="text" class="form-control" name="ram" value="<?= $result['ram']; ?>" placeholder="ram" required>
        </div>
        <div class="form-group">
            <label for="rom">ROM</label>
            <input type="text" class="form-control" name="rom" value="<?= $result['rom']; ?>" placeholder="rom" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea type="text" class="form-control" name="deskripsi" placeholder="deskripsi" required><?= $result['deskripsi']; ?></textarea>
        </div>
        <input type="submit" value="SUBMIT" class="btn btn-primary">
    </form>
    <a href="/adminpanel"><button class="btn btn-success" style="margin-top: -64px;margin-left:100px;">Cancel</button></a>
</div>
<script type="text/javascript" src="/js/adminedit.js"></script>
<?= $this->endSection(); ?>