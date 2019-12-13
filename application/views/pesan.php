<h2><p class="text-center">Pesan Film</p></h2>
<form method="post" action="<?= base_url(); ?>home/pesan_kursi" >
    <div class="card-group">
        <div class="col-md-8">
            <div class="card">
            <!-- card area -->
            <div class="row p-1">
                <div class="col-md-6">
                    <img src="<?= base_url(); ?>assets/img/<?= $data['film']['foto']; ?>" class="img-fluid" alt="Responsive image">
                    </p>
                    
                </div>

                <div class="col-md-6">
                    <h5 class="card-title"><?= $data['film']['judul']; ?></h5>
                    <p class="card-text"><?= $data['film']['sinopsis']; ?>
                    <p class="card-text"><small class="text-muted">Durasi : <?= $data['film']['keterangan']; ?></small></p>
                </div>
            </div>

            <div class="row mt-2 p-2">
                <div class="col-md">
                <table class="col-md" cellpadding="5">
                    <tr>
                        <td>Tanggal</td>
                        <td>
                            <input type="date" class="form-control" name="tanggal_nonton" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Jadwal</td>
                        <td>
                            <?php $no=0; foreach($data['jadwal'] as $jdw): ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jadwal" id="Radio<?= $no; ?>" value="<?= $jdw['id_jadwal']; ?>">
                                <label class="form-check-label" for="Radio<?= $no++; ?>"><?= $jdw['jadwal']; ?></label>
                            </div>
                            <?php endforeach; ?>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-primary">Pesan</button>
                        </td>
                    </tr>
                </table>
                </div>
            </div>
            <!-- card area -->
            </div>
        </div>
    </div>
</form>