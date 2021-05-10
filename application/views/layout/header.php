<!-- Header -->
<header class="header shop">
		<!-- header -->
		

		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="<?= base_url()?>"><img src="<?= base_url('assets/images/logo.png')?>" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<form action="<?= base_url('index.php/Home_Controller/hasilCari/') ?>" method="get">
									<input type="text" class="form-control" name="keyword" placeholder="Masukkan Nama Barang.....">
									<button class="btnn" type="submit" value="Cari"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar shopping">
								Keranjang Belanja
								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count"><?=$this->cart->total_items();?></span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span><?=$this->cart->total_items();?> Items</span>
										<a href="<?= base_url('keranjangBelanja')?>">Lihat Keranjang</a>
									</div>
									<ul class="shopping-list">
										<?php foreach ($this->cart->contents() as $items) :?>
											<li>
												<!-- <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a> -->
												<!-- <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a> -->
												<h4><a href="#"><?=$items['name']?></a></h4>
												<p class="quantity"><?=$items['qty']?>x - <span class="amount">Rp. <?= number_format($items['price'],0,',','.') ?></span></p>
											</li>
										<?php endforeach; ?>
									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">Rp. <?= number_format($this->cart->total(),0,',','.'); ?></span>
										</div>
										<a href="checkout.html" class="btn animate">Checkout</a>
									</div>
								</div>
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<?php $this->load->view('layout/header-inner'); ?>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->