
	<div class="grid wide">	
		<div class="row sm-gutter wrap__content">
			<!-- category -->
			<div class="col l-2 m-0 c-0">
				<nav class="category">
					<h3 class="category__heading">
						<i class="fas fa-list category__heading-icon"></i>
						Danh mục
					</h3>
					<ul class="category-list">
						<li class="category-item category-item--active">
							<a href="#" class="category-item__link">Tất cả sản phẩm</a>
						</li>
						<?php 
							include "includes/connect_db.php";
							$get_cate = " select * from category";
							$run_cate = mysqli_query($conn, $get_cate);
							while($row_cate = mysqli_fetch_array($run_cate)){
							  $cate_id = $row_cate['id'];
							  $cate_title = $row_cate['name'];
							  echo "<li class='category-item'>
										<a href='?cate_id=$cate_id' class='category-item__link'>$cate_title</a>
									</li>";
							}
						 ?>
					</ul>
				</nav>
			</div>			
			<!-- main content -->
			<div class="col l-10 m-12 c-12">
				<!-- home-filter -->
				<div class="home-filter hide-on-mobile-tablet">
					<span class="home-filter__label">Sắp xếp theo</span>
					<button class="home-filter__btn btn">Phổ biến</button>
					<button class="home-filter__btn btn btn--primary">Mới nhất</button>
					<button class="home-filter__btn btn">Bán chạy</button>

					<div class="seclect-input">
						<span class="seclect-input__label">Giá</span>
						<i class="seclect-input__icon fas fa-angle-down"></i>

						<!-- list option price -->
						<ul class="seclect-input__list">
							<li class="seclect-input__item">
								<a class="seclect-input__link" href="">Giá: Thấp đến cao</a>
							</li>

							<li class="select-input__item">
								<a class="seclect-input__link" href="">Giá: Cao đến thấp</a>
							</li>
						</ul>
					</div>

					<div class="home-filter__page">
						<span class="home-filter__page-num wide-0 ">
							<span class="home-filter__page-current">1</span>
							/
							<span class="home-filter__page-total">4</span>
						</span>

						<div class="home-filter__page--control">
							<a href="#" class="home-filter__page-btn home-filter__page-btn--disabled">
								<i class="home-filter__page-icon fas fa-angle-left"></i>
							</a>
							<a href="#" class="home-filter__page-btn">
								<i class="home-filter__page-icon fas fa-angle-right"></i>
							</a>
						</div>
					</div>
				</div>

				<nav class=" mobile-category">
					<ul class="mobile-category__list">
						<?php 
							include "includes/connect_db.php";
							$get_cate = " select * from category";
							$run_cate = mysqli_query($conn, $get_cate);
							while($row_cate = mysqli_fetch_array($run_cate)){
							  $cate_id = $row_cate['id'];
							  $cate_title = $row_cate['name'];
							  echo "<li class='mobile-category__item'>
										<a href='?cate_id=$cate_id' class='mobile-category__link'>$cate_title</a>
									</li>";
							}
						 ?>
					</ul>
				</nav>

				<!-- product -->
				<div class="home-product">
					<div class="row sm-gutter">
						<!-- product item -->
						<?php include "includes/display_product.php" ?>
						<!-- product item -->
					</div>
				</div>

				<ul class="home-product__pagination pagination">
					<li class="pagination-item ">
						<a href="#" class="pagination-item__link">
							<i class="pagination-item__icon fas fa-angle-left"></i>
						</a>
					</li>
					<li class="pagination-item pagination-item--active">
						<a href="#" class="pagination-item__link">1</a>
					</li>
					<li class="pagination-item">
						<a href="#" class="pagination-item__link">2</a>
					</li>
					<li class="pagination-item">
						<a href="#" class="pagination-item__link">3</a>
					</li>
					<li class="pagination-item">
						<a href="#" class="pagination-item__link">...</a>
					</li>
					<li class="pagination-item">
						<a href="#" class="pagination-item__link">4</a>
					</li>
					<li class="pagination-item">
						<a href="#" class="pagination-item__link">
							<i class="pagination-item__icon fas fa-angle-right"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>