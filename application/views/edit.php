<form method="post" action="<?= base_url(); ?>home/pesanan">
    <!-- Tampilkan data yang diperlukan dari session -->
    <b>Film : </b>
    <?php echo $this->session->userdata("judul"); ?>

    <b>Tanggal/ Jadwal : </b>
    <?php $tn=$this->session->userdata("tanggal_nonton");
    echo date('l', strtotime($tn)).", ".$tn."/ ".$this->session->userdata("jadwal"); ?>

    <b>Tempat Duduk : </b>
    <table>
        <tr>
            <td></td>
            <td class="text-center">1</td>
            <td class="text-center">2</td>
            <td class="text-center">3</td>
            <td class="text-center">4</td>
        </tr>
        <tr>
        <?php $k=0;for ($i='A'; $i<='E'; $i++){ ?>
            <tr>
                <td><?php echo $i; ?></td>
                <!-- Tampilkan kursi terpilih sebelumnya -->
                <?php for($j=1; $j<=4; $j++){
                    $ij=$data['kursi'][$k]['nokur'];?>
                <td>
                    <input name="pilihKursi[]" type="checkbox" value="<?php echo $ij; ?>" <?php foreach($data['kursi_checked'] as $kursi){if($ij==$kursi)echo "checked";} for ($x=0; $x<count($data['kursi_booked']); $x++){ if($ij==$data['kursi_booked'][$x]['nokur'])echo "disabled";}?>
                    <?php ?>>
                </td>
                <?php $k++;} ?>
            </tr>
            <?php } ?>
        </tr>
    </table>
<br>
Harga Rp 60.000,00/ tiket<br><br><button class="btn btn-primary" type="submit">Submit</button>
</form>