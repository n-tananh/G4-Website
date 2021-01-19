<?php 
$id = $_GET['id']; /*lấy id url*/
$get_pro = "select * from product WHERE id= $id";
$run_pro = mysqli_query($conn, $get_pro);
while($row_pro = mysqli_fetch_array($run_pro)){
  $pro_id = $row_pro['id'];
  $pro_cat = $row_pro['category_id'];
  $pro_singer = $row_pro['singer_id'];
  $pro_title = $row_pro['name'];
  $pro_price_old = $row_pro['price_old'];
  $pro_price_current = $row_pro['price_current'];
  $pro_discount = $row_pro['discount'];	  
  $pro_file = $row_pro['file'];
  $pro_image = $row_pro['image'];
  $pro_des = $row_pro['des'];
  $pro_keyword = $row_pro['keyword'];
  
  $get_cate_name = mysqli_query($conn, "SELECT * FROM category where id = $pro_cat");
  	if ($get_cate_name) {
  		 while($row=mysqli_fetch_row($get_cate_name)){
  			$cate_name = $row[	1];
  		}	
  		mysqli_free_result($get_cate_name);
  	}

  $get_singer_info = mysqli_query($conn, "SELECT * FROM singer where id = $pro_singer");
	if ($get_singer_info) {
	    while($row=mysqli_fetch_row($get_singer_info)){
	         $singer_name = $row[2];
	         $origin_id = $row[1];
	         $get_origin_name = mysqli_query($conn, "SELECT * FROM origin where id = $origin_id");
	         if ($get_origin_name){
	    		while($row=mysqli_fetch_row($get_origin_name)) {
	         		$origin_name = $row[1];
	    		}
	    		mysqli_free_result($get_origin_name);
			}
		}
		mysqli_free_result($get_singer_info);
	}
  echo "
  <div class='container' >
		<div class='card'>
			<div class='row'>
				<aside class='col-sm-5 border-right'>
					<article class='gallery-wrap'> 
						<div class='img-big-wrap'>
						  <div> 
						  	<a href='#'><img style = 'width : 100%;' src='admin/image_product/$pro_image'></a>
						  </div>
						</div>
						<div class='audio-small-wrap' >
						  	<audio style = 'width : 100%; outline:none';
						        controls
						        src='admin/audio_product/$pro_file'>
						    </audio>
						</div> 
					</article>
				</aside>
				<aside class='col-sm-7'>
					<article class='card-body p-5' style='font-size: 1.6rem'>
						<h3 class='title mb-3'>$pro_title</h3>

						<p class='price-detail-wrap'> 
							<span class='price h3 '> 
								<span class='currency detail-product-item__name-current'>US $</span><span class='detail-product-item__name-current num'>$pro_price_current</span>
							</span> 
							<span class= 'home-product-item__name-old'>/$pro_price_old</span> 
						</p>
						<dl class='item-property'>
						  <dt>Description</dt>
						  <dd>
						  	<p>$pro_des</p>
						  </dd>
						</dl>
						<dl class='param param-feature'>
						  <dt>Singer</dt>
						  <dd>$singer_name</dd>
						</dl> 
						<dl class='param param-feature'>
						  <dt>Category</dt>
						  <dd>$cate_name</dd>
						</dl> 
						<dl class='param param-feature'>
						  <dt>Origin</dt>
						  <dd>$origin_name</dd>
						</dl>  
						<hr>
						<div class='row'>
							<div class='col-sm-12'>
								<dl class='param param-inline'>
									  <dt>Quality: </dt>
									  <dd>
									  	<label class='form-check form-check-inline'>
										  <input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio2' value='option2'>
										  <span class='form-check-label'>128 Kbps</span>
										</label>
										<label class='form-check form-check-inline'>
										  <input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio2' value='option2'>
										  <span class='form-check-label'> 256 Kbps</span>
										</label>
										<label class='form-check form-check-inline'>
										  <input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio2' value='option2'>
										  <span class='form-check-label'> 320 Kbps</span>
										</label>
									  </dd>
								</dl> 
							</div>
						</div>
						<hr>
						<a href='#' class='btn btn-lg btn-primary text-uppercase'> Buy now </a>
						<a href='#' class='btn btn-lg btn-outline-primary text-uppercase'> <i class='fas fa-shopping-cart'></i> Add to cart </a>
					</article>
				</aside>
			</div>
		</div> 
	</div>
  ";
}
?>
