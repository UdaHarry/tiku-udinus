<h2 align="center">Pesanan Tiket</h2>
<h3><?php echo $this->session->userdata("judul"); ?></h3>
<p><?php $tn=$this->session->userdata("tanggal_nonton");
    echo date('l', strtotime($tn)).", ".$tn."/ ".$this->session->userdata("jadwal"); ?></p>
<hr width="25%" align="left">

<!-- Menampilkan kursi yang telah dipilih -->
<ul style="list-style-type: none;">
<?php $i=0;foreach($data['kursi'] as $kursi){?>
    <li>
        <form method="post" action="<?php echo base_url()."home/hapusKursi/$i"; ?>"> <?php echo $kursi;?>
        <button type="submit" name="submit" class="btn badge badge-danger">Hapus </button>
        </form>
    </li>
<?php $i++;}?>
</ul>
<hr width="25%" align="left">

<p>Total : <?php echo number_format(count($data['kursi'])*60000,2,',','.');?></p>
<hr width="25%" align="left">

<!-- Pilihan Edit Kursi -->
<form method="post" action="<?php echo base_url()."home/edit"; ?>">
    <button type="submit" name="submit" class="btn badge badge-primary">Edit Kursi </button>
</form>

<!-- Pilihan Hapus Semua Kursi -->
<form method="post" action="<?php echo base_url(); ?>">
    <button type="submit" name="submit" class="btn badge badge-danger">Hapus Semua</button>
</form>
<br>

<!-- Pilihan Bayar -->
<form method="post" action="<?php echo base_url(); ?>home/bayar">
    <button type="submit" class="btn btn-success">Bayar</button>
</form>