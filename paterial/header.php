<?php
require_once '../connectData.php';
?>
<div class='container-fluid'>
    <div class="navbar-nav nav navbar-expand-md nav-css row">
        <div class=' nav-css col-6 row'>
            <a href="home" class="nav-link col-auto a-css p-2">Trang chủ</a>
            <a href="ListSanPham" class="nav-link col-auto a-css p-2">Sản Phẩm</a>
            <a href="GioHang" class="nav-link col-auto a-css p-2">Giỏ Hàng</a>
            <a href="faq" class="nav-link col-auto a-css p-2">FAQ</a>
            <a href="contact" class="nav-link col-auto a-css p-2">Liên hệ</a>
        </div>
        <div class='  nav-css col-6 row justify-content-end'>
            <?php if(empty($_SESSION['id'])):?>
				<a href="<?=BASE_URL_PATH.'login'?>" class="nav-link col-auto a-css p-2">Đăng nhập</a>
				<a href="<?=BASE_URL_PATH.'register'?>" class="nav-link col-auto a-css p-2  ">Đăng ký</a>
				<?php elseif($_SESSION['user_type']==='Admin') :?>
					<a href="<?=BASE_URL_PATH.'admin'?>" class="nav-link col-auto a-css p-2"><?=htmlspecialchars($_SESSION['hoten'])?></a>
					<a href="<?=BASE_URL_PATH.'logout'?>" class="nav-link col-auto a-css p-2  ">Đăng xuất</a>
					<?php else :?>
						<a href="<?=BASE_URL_PATH.'Home'?>" class="nav-link col-auto a-css p-2 "><?=htmlspecialchars($_SESSION['hoten'])?></a>
						<a href="<?=BASE_URL_PATH.'logout'?>" class="nav-link col-auto a-css p-2  ">Đăng xuất</a>
                        <?php endif?>
                    </div>
        </div>
    </div>