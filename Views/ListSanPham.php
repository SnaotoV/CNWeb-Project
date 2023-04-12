<div class='row'> 
    <div class='col-2'>
        <nav>
            <div><a href="<?='ListSanPham?maDM=all&tenDM=all&page='?>">Tất cả sản phẩm</a></div>
            <?php foreach ($allDanhMuc as $DanhMuc):?>
                    <div><a href="<?='ListSanPham?maDM='.$DanhMuc->id.'&tenDM='.$DanhMuc->tenDM."&page="?>"><?=htmlspecialchars($DanhMuc->tenDM)?></a></div>
                <?php endforeach?>
            </nav>
            <script>console.log('<?=$soTrang?>')</script>
    </div>
    <div class="col-10 row">
        <?php foreach($allSanPham as $SanPham):?>
            <div class="card" style="width: 23rem;">
                <img src="<?=htmlspecialchars($SanPham->img)?>" class="card-img-top" />
                <div class="card-body">
                    <h4 class="card-title"><?=htmlspecialchars($SanPham->tenSP)?></h4>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div> 
        <?php endforeach?>
        <div class='col-12 offset-5'>
            <?php for($i=1;$i<=$soTrang;$i++):?>
                <a href="<?='ListSanPham?maDM='.$maDM.'&tenDM='.$tenDM."&page=".$i?>"><?=htmlspecialchars($i)?></a>
                <?php endfor?>
        </div>
    </div>
</div>