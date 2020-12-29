<?=$this->extend('layout/template_admin');?>
<?=$this->section('content');?>
<div class="container">
    <form action="" id="form">
        <div class="form-group">
            <label for="nama">Nama Product</label>
            <input type="text" class="form-control" name="nama"      placeholder="Name"      required>
        </div>
        <div class="form-group">
            <label for="image">SiteStrip image</label>
            <input type="text" class="form-control" name="image"     placeholder="linkImage" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga"  placeholder="harga" required>
        </div>
        <div class="form-group">
            <label for="ram">RAM</label>
            <input type="text" class="form-control" name="ram"       placeholder="ram"       required>
        </div>
        <div class="form-group">
            <label for="rom">ROM</label>
            <input type="text" class="form-control" name="rom" placeholder="rom"       required>
        </div>
        <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
            <textarea type="text" class="form-control" name="deskripsi" placeholder="deskripsi" required></textarea>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
    <a href="/adminpanel"><button class="btn btn-success" style="margin-top: -64px;margin-left:100px;">Cancel</button></a>
</div> 
    
<script type="text/javascript" src="/js/adminadd.js"></script>
<?=$this->endSection();?>