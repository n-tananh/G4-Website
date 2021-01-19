<!-- Modal layout login-->
<label for="header__navbar--check-login" class="modal modal__login">
	<div class="modal__overlay"></div>
	<div class="modal__body">
		<form action="" method="post">
		 <!-- login form -->
		 <div class="auth-form">
			<div class="auth-form__container">
				<div class="auth-form__header">
					<h3 class="auth-form__heading">Đăng nhập</h3>
					<label for="header__navbar--check-register" class="auth-form__switch-btn">Đăng ký</label>
				</div>
				<div class="auth-form__form">
					<div class="auth-form__group">
							<input name="username" autocomplete="off" class="auth-form__input" type="text" placeholder="Nhập email của bạn">
					</div>
					<div class="auth-form__group">
							<input  name="password" class="auth-form__input" type="password" autocomplete="off" placeholder="Nhập mật khẩu">
					</div>
				</div>
				<div class="auth-form__aside">
					<div class="auth-form__help">
						<a href="" class="auth-form__help-link auth-form__help-fogot">Quên mật khẩu</a>
						<span class="auth-form__help-separate"> </span>
						<a href="" class="auth-form__help-link">Cần trợ giúp?</a>
					</div>
				</div> 
				<div class="auth-form__controls">
					<label for="header__navbar--check-login"  class="btn btn--normal auth-form__controls-back">TRỞ LẠI</label>
		
					<!-- btn--disabled sau check nhập thông tin thì dùng class này để check -->
					<button name="login" class="btn btn--primary">ĐĂNG NHẬP</button> 
				</div>
			</div>
		
			<div class="auth-form__socials">
				<a href="#" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
					<i class="auth-form__socials-icon fab fa-facebook-square"></i>
					<span class="auth-form__socials-title">Facebook</span>
				</a>
				<a href="#" class="auth-form__socials--google btn btn--size-s btn--with-icon">
					<i class="auth-form__socials-icon fab fa-google"></i>
					<span class="auth-form__socials-title">Google</span>
				</a>
			</div>
			<?php
			 include ("includes/auth_login.php");
			?>
		 </div>
		</form>						
	</div>
</label>	
<!-- Modal layout register -->
<label for="header__navbar--check-register" class="modal modal__register">
	<div class="modal__overlay"></div>
	<div class="modal__body">
		<form action="" method="post" enctype="multipart/form-data">
		<!-- register form -->
		  <div class="auth-form">
		 	<div class="auth-form__container">
		 		<div class="auth-form__header">
		 			<h3 class="auth-form__heading">Đăng ký</h3>
		 			<span class="auth-form__switch-btn">Đăng nhập</span> <!-- Dùng js để tối ưu -->
		 		</div>
		 		<div class="auth-form__form">
		 			<div class="auth-form__group">
		 					<input name="username" class="auth-form__input" type="text" autocomplete="off"  placeholder="Nhập username của bạn">
		 			</div>
		 			<div class="auth-form__group">
		 					<input name="password" class="auth-form__input" type="password" autocomplete="off" placeholder="Nhập mật khẩu">
		 			</div>
		 			<div class="auth-form__group">
		 					<input name="confirm_password" class="auth-form__input" type="password" autocomplete="off" placeholder="Nhập lại mật khẩu">
		 			</div>
		 		</div>
		 		<div class="auth-form__aside">
		 				<p class="auth-form__policy-text">
		 					Bằng việc đăng ký, bạn đã đồng ý với TonyWatch về 
		 					<a href="#" class="auth-form__text-link">Điều khoản dịch vụ</a> &
		 					<a href="#" class="auth-form__text-link">Chính sách bảo mật</a>
		 				</p>
		 		</div> 
		 		<div class="auth-form__controls">
		 			<label for="header__navbar--check-register" class="btn btn--normal auth-form__controls-back">TRỞ LẠI</label>
		 
		 			<!-- btn--disabled sau check nhập thông tin thì dùng class này để check -->
		 			<button name="register" class="btn btn--primary" >ĐĂNG KÝ</button>
		 		</div>
		 	</div>
		 
		 	<div class="auth-form__socials">
		 		<a href="#" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
		 			<i class="auth-form__socials-icon fab fa-facebook-square"></i>
		 			<span class="auth-form__socials-title">Kết nối với Facebook</span>
		 		</a>
		 		<a href="#" class="auth-form__socials--google btn btn--size-s btn--with-icon">
		 			<i class="auth-form__socials-icon fab fa-google"></i>
		 			<span class="auth-form__socials-title">Kết nối với Google</span>
		 		</a>
		 	</div>
		 </div>
		<?php 
			include("includes/auth_register.php");
		?>
		</form>
	</div>
</label>	
<!-- End-modal register -->