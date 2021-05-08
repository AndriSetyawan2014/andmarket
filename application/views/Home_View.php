<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AndMarket Online</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php $this->load->view('layout/header') ?>
        
        <!-- Tampilkan semua produk -->
        <div class="row">
        <!-- looping products -->
          <?php foreach($barang as $items) : ?>
          <div class="col-sm-3 col-md-3">
            <div class="thumbnail">
              <?=img([
                'src'        => 'uploads/' . $items->gambar,
                'style'        => 'max-width: 100%; max-height:100%; height:100px'
              ])?>
              <div class="caption">
                <h3 style="min-height:60px;"><?=$items->nama?></h3>
                <p><?=$items->deskripsi?></p>
                <p>Rp. <?=$items->harga?></p>
                <p>
                    <?=anchor('Home_Controller/tambah_KeranjangBelanja/' . $items->id, 'Buy' , [
                        'class'    => 'btn btn-primary',
                        'role'    => 'button'
                    ])?>
                </p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        <!-- end looping -->
        </div>
        
    </body>
</html>