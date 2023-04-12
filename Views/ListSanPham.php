<div class='row'> 
    <div class='col-2'>
        <nav>
            <?php foreach ($allDanhMuc as $DanhMuc):?>
                <form action="" method=''>
                    <div><?=htmlspecialchars($DanhMuc->tenDM)?></div>
                </form>
                <?php endforeach?>
            </nav>
            <script>console.log('<?=$allDanhMuc[1]->tenDM?>')</script>
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
    </div>
</div>