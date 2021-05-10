<?php foreach($barang as $items) : ?>
    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
        <div class="single-product">
            <div class="product-img">
                <a href="product-details.html">
                    <img class="default-img" src=<?=base_url('assets/images/'). $items['gambar']?> alt="#">
                    <img class="hover-img" src=<?=base_url('assets/images/'). $items['gambar']?> alt="#">
                </a>
                <div class="button-head">
                    <!-- <div class="product-action">
                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                    </div> -->
                    <div class="product-action-2">                        
                        <a title="Add 1 item to cart" href=<?=base_url().'Home_Controller/tambah_KeranjangBelanja/' . $items['id']?>>Add 1 item to cart</a>
                    </div>
                </div>
            </div>
            <div class="product-content">
                <h3><a href="product-details.html"><?=$items['nama']?></a></h3>
                <div class="product-price">
                    <span>Rp. <?=number_format($items['harga'], 0, ",", ".");?></span>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>