<div class="header-inner">
    <div class="container">
        <div class="cat-nav-head">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="menu-area">
                        <!-- Main Menu -->
                        <nav class="navbar navbar-expand-lg">
                            <div class="navbar-collapse">	
                                <div class="nav-inner">	
                                    <ul class="nav main-menu menu navbar-nav">
                                            <li class="active"><a href="<?= base_url()?>">Beranda</a></li>
                                            <li><a href="#">Promo Harga</a></li>												
                                            <li><a href="#">Tentang Toko</a></li>
                                            <li><a href="<?= base_url('keranjangBelanja')?>">Keranjang Belanja<span class="new"><?=$this->cart->total_items();?></span></a></li>						
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Kontak Kami</a></li>
                                        </ul>
                                </div>
                            </div>
                        </nav>
                        <!--/ End Main Menu -->	
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>