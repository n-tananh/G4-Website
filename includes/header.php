<?php session_start(); ?>
<?php include "includes/connect_db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tune Source</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" href="./assets/css/base.css">
	<link rel="stylesheet" href="./assets/css/main.css">
	<link rel="stylesheet" href="./assets/css/grid.css">
	<link rel="stylesheet" href="./assets/css/slider.css">
	<link rel="stylesheet" href="./assets/css/responsive.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/fonts/fontawesome-5.14.0/css/all.min.css">	
</head>
<body>
	<!-- Block Element Modifiers -->
	<div class="wrapper">
	<!-- start header -->
		<header class="header">
			<div class="grid wide">

				<!-- navbar -->
				<nav class="header__navbar hide-on-mobile-tablet">
					<!-- left -->
					<ul class="header__navbar-list">
						<li class="header__navbar-item header__navbar-item--has-header__qr header__navbar-item--separate">
								Vào cửa hàng trên ứng dụng 
							<div class="header__qr">
								<img class="header__qr-img" src="assets/img/QR-code.png" alt="QR-Code">
								<div class="header__qr-apps">
									<a class="header__qr-link" href="#">
										<img src="assets/img/CH-play.png" alt="CH-Play" class="header__qr-dowload-img">
									</a>
									<a class="header__qr-link" href="#">
										<img src="assets/img/appstore.png" alt="Appstore" class="header__qr-dowload-img">
									</a>
								</div>
							</div>
						</li>
						<li class="header__navbar-item">
							<span class="header__navbar-title--no-pointer">Kết nối</span>
							<a target="blank" href="https://facebook.com/tananh691" class="header__navbar-icon-link">
								<i class=" header__navbar-icon fab fa-facebook"></i>
							</a>
							<a target="blank" href="https://www.instagram.com/n_tananh/?hl=vi" class="header__navbar-icon-link">
								<i class=" header__navbar-icon fab fa-instagram"></i>
							</a>
						</li>
					</ul>
					<!-- right -->
					<ul class="header__navbar-list">
						<li class="header__navbar-item header__navbar-item--has-notify">
							<a href="#" class="header__navbar-item-link">
								<i class=" header__navbar-icon far fa-bell"></i>
								Thông báo
							</a>
							<div class="header__notify">
								<header class="header__notify-header">
									<h3>Thông báo mới nhận</h3>
								</header>
								<ul class="header__notify-list">
									<li class="header__notify-item header__notify-item--viewed">
										<a class="header__notify-link"href="#">
											<span>
												<img src="assets/img/notify.jpg" alt="Notify=ication" class="header__notify-img">
											</span>
											<div class="header__notify-info">
												<span class="header__notify-name">Lorem ipsum dolor sit amet, consectetur.</span>
												<span class="header__notify-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.nostrum voluptatem! Cumque!</span>
											</div>
										</a>
									</li>
									<li class="header__notify-item">
										<a class="header__notify-link"href="#">
											<span>
												<img src="assets/img/notify.jpg" alt="Notify=ication" class="header__notify-img">
											</span>
											<div class="header__notify-info">
												<span class="header__notify-name">Apple watch series 4</span>
												<span class="header__notify-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.nostrum voluptatem! Cumque!</span>
											</div>
										</a>
									</li>
									<li class="header__notify-item">
										<a class="header__notify-link"href="#">
											<span>
												<img src="assets/img/notify.jpg" alt="Notify=ication" class="header__notify-img">
											</span>
											<div class="header__notify-info">
												<span class="header__notify-name">Apple watch series 4</span>
												<span class="header__notify-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.nostrum voluptatem! Cumque!</span>
											</div>
										</a>
									</li>
									<li class="header__notify-item">
										<a class="header__notify-link"href="#">
											<span>
												<img src="assets/img/notify.jpg" alt="Notify=ication" class="header__notify-img">
											</span>
											<div class="header__notify-info">
												<span class="header__notify-name">Apple watch series 4 hí</span>
												<span class="header__notify-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.nostrum voluptatem! Cumque!</span>
											</div>
										</a>
									</li>
								</ul>
								<div class="header__notify-footer">
									<a href="" class="header__notify-footer-btn">Xem tất cả</a>
								</div>
							</div>
						</li>
						<li class="header__navbar-item">
							<a href="contact.php" class="header__navbar-item-link">
								<i class=" header__navbar-icon far fa-question-circle"></i>
								Trợ giúp
							</a>
						</li>
						<!-- login and register -->
						<?php
						 
						 $form = '
						            <label for="header__navbar--check-register" class="header__navbar-item header__navbar-item--strong header__navbar-item--separate">Đăng ký</label>
						            <input type="checkbox" id="header__navbar--check-register"  class="btn__register">

						            <label for="header__navbar--check-login" class="header__navbar-item header__navbar-item--strong">Đăng nhập</label>
						            <input type="checkbox" id="header__navbar--check-login" class="btn__login">
					            ';
						 if(isset($_SESSION['username']) && !empty($_SESSION['username']) ) {
						    ?>
						        <li class="header__navbar-item header__navbar-user">
						            <img src="https://avatar-redirect.appspot.com/google/109534453629819630715?size=400" alt="username avatar" class="header__navbar-user-img">
						            <span class="header__navbar-user-name"><?php echo $_SESSION['username']?></span>
						            <ul class="header__navbar-user-menu">
						                <li class="header__navbar-user-item">
						                    <a href=""> Tài khoản của tôi</a>
						                </li>
						                <li class="header__navbar-user-item">
						                    <a href=""> Địa chỉ của tôi</a>
						                </li>
						                <li class="header__navbar-user-item">
						                    <a href=""> Đơn mua</a>
						                </li>
						                <li class="header__navbar-user-item header__navbar-user-item--separate">
						                    <a href="includes/logout.php">Đăng xuất</a>
						                </li>
						            </ul>
						        </li>
						    <?php
						 }
						 else{
						    echo $form;
						}
						?>
						<?php include "modal.php" ?>
					</ul>
				</nav>



				<!-- header with search -->
				<div class="header-with-search">

					<!-- nav mobile -->
					<label class="nav__bar-btn" for="nav-mobile-input">
						<i class="fas fa-bars"></i>
					</label>

					<input type="checkbox" hidden name="" class="nav__input" id="nav-mobile-input">

					<label class="nav__bar-overlay" for="nav-mobile-input"></label>

					<div class="nav__mobile">
						<label for="nav-mobile-input" class="nav__mobile-close">
							<i class="fas fa-times"></i>
						</label>
						<ul class="nav__mobile-list">

							<li>
								<a  class="nav__mobile-link" href="index.php">TRANG CHỦ</a>
							</li>
							<li >
								<a  class="nav__mobile-link" href="introduction.php">GIỚI THIỆU</a>
							</li>
							<li >
									<a  class="nav__mobile-link" href="product.php">SẢN PHẨM</a>
							</li>
							<li >
								<a  class="nav__mobile-link" href="admin/index.php">ADMIN</a>
							</li>
							<li >
								<a  class="nav__mobile-link" href="contact.php">LIÊN HỆ</a>
							</li>
						</ul>
					</div>
					<!-- nav mobile -->
					
					<label class="header__mobile-search" for="mobilel-search-checkbox">
						<i class="header__mobile-search-icon  fas fa-search"></i>
					</label>

					<div class="header__logo hide-on-tablet">
						<a class="header__logo-link" href="index.php">
							<img class="header__logo-img" src="assets/img/logo.png" alt="Shop">
						</a>
					</div>
					<!-- search -->


					<input type="checkbox" hidden id="mobilel-search-checkbox" class="header__search-checkbox">
				
					<form action="result.php" class="header__search ">
						<div class="header__search-input-wrap">
							<input class="header__search-input" name="keyword" type="text" autocomplete="off" placeholder="Nhập từ khóa để tìm kiếm">
							<!-- search history -->
							<div class="header__search-history">
								<h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
								<ul class="header__search-history-list">
									<li class="header__search-history-item">
										<a href="#">Nhà</a>
									</li>
									
								</ul>
							</div>
						</div>
						<div class="header__search-select">
							<span class="header__search-select-label">Trong shop</span>
							<i class="header__search-select-icon fas fa-angle-down"></i>
							<ul class="header__search-option">
								<!-- header__search-option-item--active class này để chỉ thị active sẽ có dấy check -->
								<li class="header__search-option-item header__search-option-item--active">
									<span>Trong shop</span>
									<i class="fas fa-check"></i>
								</li>
								<li class="header__search-option-item">
									<span>Ngoài shop</span>
									<i class="fas fa-check"></i>
								</li>
							</ul>
						</div>
						<button class="header__search-btn" type="summit" name="search">
							<i class="header__search-btn-icon fas fa-search"></i>
						</button>
					</form>
					
					
					<!-- header cart -->
					<div class="header__cart">
						<div class="header__cart-wrap">
							<i class="header__cart-icon fas fa-shopping-cart"></i>
							<span class="header__cart-notify">3</span>
							<!--No cart :header__cart-list-no-cart -->
							<div class="header__cart-list  ">

								<img class="header__cart-list-no-cart-img" src="assets/img/no-cart.png" alt="no-cart">
								<span class="header__cart-list-no-cart-msg">
									Chưa có sản phẩm
								</span>

							<!-- Has cart -->
								<h4 class="header__cart-heading">Sản phẩm đã thêm vào giỏ hàng</h4>
								<ul class="header__cart-list-item">
									<!-- cart item -->
									<li class="header__cart-item">
										<img class="header__cart-img" src="admin/image_product/music_1.jpg" alt="Sản phẫm đã thêm">
										<div class="header__cart-item-infor">
											<div class="header__cart-item-head">
												<h5 class="header__cart-item-name">Apple watch series 4</h5>
												<div class="header__cart-item-price-wrap">
													<span class="header__cart-item-price">2.000$</span>
													<span class="header__cart-item-multiply">x</span>
													<span class="header__cart-item-qnt">2</span>
												</div>
											</div>
											<div class="header__cart-item-body">
												<span class="header__cart-item-description">
													Phân loại : Bạc
												</span>
												<span class="header__cart-item-remove">Xóa</span>
											</div>
										</div>
									</li>
								</ul>
								<a href="#" class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
							</div>	
						</div>
					</div>

				
				</div>

				<!-- header menu -->
				<div class="header__menu hide-on-mobile-tablet">
					<div class="header__menu-container">
						<ul class="header__menu-list">
							<li class="header__menu-item"><a href="index.php">TRANG CHỦ</a></li>
							<li class="header__menu-item"><a href="introduction.php">GIỚI THIỆU</a></li>
							<li class="header__menu-item"><a href="product.php">SẢN PHẨM</a></li>
							<li class="header__menu-item"><a href="admin/index.php">ADMIN</a></li>
							<li class="header__menu-item"><a href="contact.php">LIÊN HỆ</a></li>
						</ul>
					</div>
				</div>
			</div>

			<ul class="header__sort-bar">
				<li class="header__sort-item">
					<a href="#" class="header__sort-link" >Phổ biến</a>
				</li>
				<li class="header__sort-item">
					<a href="#" class="header__sort-link header__sort-link--active">Mới nhất</a>
				</li>
				<li class="header__sort-item">
					<a href="#" class="header__sort-link">Bán chạy</a>
				</li>		
				<li class="header__sort-item">
					<a href="#" class="header__sort-link">Giá</a>
				</li>
			</ul>
		</header>
	<!-- end-header -->
	</body>
</html>