    <button onclick="history.back()" class="btn"><< Trở về</button>
    <form action="">
        <div class="row">
            <img src="<?=htmlspecialchars($chiTietSanPham->img)?>" class="card-img col-4" />
            <div class="card-body col-8">
                <h4 class="card-title"><?=htmlspecialchars($chiTietSanPham->tenSP)?></h4>
                <p class="card-text">
                    <?=htmlspecialchars($chiTietSanPham->mota)?>
                </p>
                <p>
                    Tồn kho: <?=htmlspecialchars($chiTietSanPham->soluongSP)?>
                </p>
                <p class='card-coim'><?=htmlspecialchars($chiTietSanPham->giatien)?></p>
                <input type="number" name="quantity" min="1" max="<?=htmlspecialchars($chiTietSanPham->soluongSP)?>" value='1'>
                <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
            </div>
        </div>
    </form>