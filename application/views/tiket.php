<div class="content" id="printableArea">
<h2 align="center">Tiket</h2>
<br>

<!-- Menampilkan tiket dengan data bookingan sejumlah data -->
<?php foreach($data['kursi'] as $kursi){ ?>
    <hr width="50%" align="left">
    <h6>Tiket Bioskop Kampus UDINUS (TIKU)</h6><hr width="50%" align="left">
    <p><b><?php echo $this->session->userdata("judul"); ?></b>
    <br>

    <?php $tn=$this->session->userdata("tanggal_nonton");
    echo date('l', strtotime($tn)).", ".$tn."/ ".$this->session->userdata("jadwal"); ?> 
    <br>
    
    Kursi : <?php echo $kursi; ?></p>

    <small>
        <hr width="50%" align="left" style="border-top: 1px dashed;">
        disobek untuk petugas<br>Tiket Bioskop Kampus UDINUS (TIKU)<br>
        <b><?php echo $this->session->userdata("judul"); ?> - <?php $tn=$this->session->userdata("tanggal_nonton");
        echo date('l', strtotime($tn)).", ".$tn."/ ".$this->session->userdata("jadwal"); ?>
        - <?php echo $kursi; ?></b></small>
        <hr width="50%" align="left">
<?php }?>
    <button class="btn btn-primary" onclick="print()">Print</button>
    <br>
</div> <!--content -->

<script>
    function print() {
        $('#printableArea').html2canvas({
            onrendered: function( canvas ) {
            var img = canvas.toDataURL()
            window.open(img)
            }
        }
    }
</script>