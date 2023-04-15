<div class="container-fluid">
    <div class='row'>
        <div class="col-3">
            <nav >
                <div><a href="<?='admin?maDM=all&tenDM=all&page='?>">Tất cả sản phẩm</a></div>
                <?php foreach ($allDanhMuc as $DanhMuc):?>
                <div><a href="<?='admin?maDM='.$DanhMuc->id.'&tenDM='.$DanhMuc->tenDM."&page="?>"><?=htmlspecialchars($DanhMuc->tenDM)?></a></div>
                <?php endforeach?>
                </nav>
            </div>
        <div class='col-9'>
            <h1 class='text-center'>Bảng Sản Phẩm</h1>
            <div>
                <a href="" class="btn btn-primary">Thêm sản phẩm</a>
                <table>
                    <?php foreach($allSanPham as $SanPham):?>
                        <tr>
                            <td>
                                <img src="<?=htmlspecialchars($SanPham->img)?>" style='width: 4rem;' alt="">
                            </td>
                            <td>
                                <div class='p-3'><?=htmlspecialchars($SanPham->id)?></div>
                            </td>
                            <td>
                                <div class='p-3'><?=htmlspecialchars($SanPham->tenSP)?></div>
                            </td>
                            <td>
                                <div class='p-3'><?=htmlspecialchars($SanPham->mota)?></div>
                            </td>
                            <td>
                                <div class='p-3'><?=htmlspecialchars($SanPham->img)?></div>
                            </td>
                            <td>
                                <div class='p-3'><?=htmlspecialchars($SanPham->giatien)?></div>
                            </td>
                            <td>
                                <div class='p-3'><?=htmlspecialchars($SanPham->iddm)?></div>
                            </td>
                            <td>
                                <div class='p-3'><?=htmlspecialchars($SanPham->soluongSP)?></div>
                            </td>
                            <td>
                                <button class="btn btn-primary mr-1">Sửa</button>
                            </td>
                            <td>
                                <a class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach?>
                </table>
                <div class='col-12 row justify-content-center'>
                <?php for($i=1;$i<=$soTrang;$i++):?>
                    <a href="<?='admin?maDM='.$maDM.'&tenDM='.$tenDM."&page=".$i?>" class='p-2'><?=htmlspecialchars($i)?></a>
                    <?php endfor?>
                </div>
            </div>
        </div>
    </div>
</div>