<?=$this->extend('layout/template_admin');?>
<?=$this->section('content');?>
<h3><a href="/adminpanel/add">Add Produc</a></h3>
    <table>
        <thead>
            <th>NO</th>
            <th>product</th>
            <th>RAM</th>
            <th>ROM</th>
            <th>action edit</th>
            <th>action delete</th>
        </thead>
        <?php $i=1;?>
        <?php foreach ($result as $data):?>
        <tr>
            <td><p id="deleteCau"><?= $i;?></p></td>
            <td><?= $data['nama']; ?></td>
            <td>ram</td>
            <td>rom</td>
            <td>
                <button class="btn btn-warning"><a href="/adminpanel/edit/<?=$data['id'];?>">Edit</button>
            </td>
            <td>
                <button class="btn btn-danger" onclick="confirmDialog()"><a href="/adminpanel/delete/<?=$data['id'];?>">Delete</button>
            </td>
        </tr>
        <?php $i++;?>
        <?php endforeach; ?>
    </table>

    <script>
        function confirmDialog(){
            var di =  confirm("Do you want to continue delete?");
            if(di==true){
                return true;
            }else{
                window.close();
            }
        }
    </script>
<?=$this->endSection(); ?>