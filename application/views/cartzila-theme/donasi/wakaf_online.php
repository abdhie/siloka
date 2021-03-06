
<div class="ps-breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="<?php echo base_url()."donasi/wakaf_uang"; ?>">Wakaf</a></li>
            <li><?php echo $title; ?></li>
        </ul>
    </div>
</div>

<div class="ps-order-tracking">
    <div class="container">
        <div class="ps-section__header">
            <?php
              echo "<h3>$title</h3>";
              echo $this->session->flashdata('message'); 
                   $this->session->unset_userdata('message');
              echo "<p>Wakaf dalam bentuk uang yang dapat dikelola secara produktif dan hasilnya dimanfaatkan oleh mauquf alaih.</p>";
            ?>
          </div>
        <div class="ps-section__content">
            <?php 
              $attributes = array('class'=>'ps-form--order-tracking');
              echo form_open_multipart('donasi/wakaf_uang',$attributes); 

              echo "<div class='form-group'><label>Wakaf  Minimal Rp. 100.000 *</label> <input type='number' name='nominal' style='font-size:20px' class='form-control form-auth font-weight-bold text-success' value='100000' required></div>
                    <div class='form-group'><label>Nama Lengkap *</label>               <input type='text' name='nama_lengkap' class='form-control form-auth text-success' required></div>
                    <div class='form-group'><label>No Handphone *</label>               <input type='number' name='no_handphone' class='form-control form-auth text-success' required></div>
                    <div class='form-group'><label>Alamat Email anda *</label>          <input type='email' name='alamat_email' class='form-control form-auth text-success' required></div>
                    <div class='form-group'><label>Pilih Metode Pembayaran *</label>    <select name='id_rekening' class='form-control form-auth'>";
                      foreach ($record->result_array() as $row){
                          echo "<option value='$row[id_rekening]'>$row[nama_bank] - $row[no_rekening], A/N : $row[pemilik_rekening]</option>";
                      }
                    echo "</select></div>
                    <div class='form-group'><label>Silahkan Isi Do'a Terbaik Anda *</label> <textarea class='form-control form-auth' style='height:65px !important' name='doa_terbaik'></textarea></div>
                    <div class='form-group'><label>Masukkan 2 Digit Terakhir Nomor HP Anda *</label> <input class='form-control form-auth' type='number' name='validasi' required></div>";
            ?>
                    <div class="form-group">
                        <button type='submit' name='submit' class="ps-btn ps-btn--fullwidth">Wakaf Sekarang</button>
                    </div>
            </form>
        </div>
    </div>
</div>