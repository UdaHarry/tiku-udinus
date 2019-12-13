<form method="post" action="<?= base_url(); ?>home/pesanan">
    <!-- Set Judul Film -->
    <p class="mt-2">
        <b>Judul</b>
        <?= $this->session->userdata("judul"); ?>
        <br><!-- Break -->

        <b>Tanggal/ Jadwal : </b>
        <?php $tn=$this->session->userdata("tanggal_nonton");echo date('l', strtotime($tn)).", ".$tn."/".$this->session->userdata("jadwal"); ?>
        <br><!-- Break -->

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
            <?php $k=0; for ($i='A'; $i<='E'; $i++){ ?>
                <tr>
                    <td><?= $i?></td>
                    <?php for($j=1; $j<=4; $j++){
                        $ij=$data['kursi'][$k]['nokur']; ?>
                    <td>
                        <input name="pilihKursi[]" type="checkbox" value="<?php echo $ij; ?>" <?php for ($x=0; $x<count($data['kursi_booked']); $x++){ if($ij==$data['kursi_booked'][$x]['nokur']) echo "disabled";}?> >
                    </td>
                    <?php $k++;} ?>
                <tr>
            <?php } ?>
            </tr>
        </table>
        <br>
        Harga Rp 60.000,00/ tiket
        <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </p>
</form>