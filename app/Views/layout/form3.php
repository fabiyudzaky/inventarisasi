<div class="container d-flex flex-column align-items-center">
    <!-- baris untuk kode barang dan NUP SIMAK -->
    <div class="row justify-content-between ms-3 me-4 my-4 w-100">
        <div class="col-5">
            <div class="col-12 d-flex flex-row mb-4">
                <label for="kode-barang" class=" w-25 col-form-label">Kode Barang</label>
                <input type="text" class="form-control ms-2" id="kode-barang" name="kode-barang" disabled>
            </div>
            <div class="col-12 d-flex flex-row mb-4">
                <label for="nama-barang" class="w-25 col-form-label">Nama Barang</label>
                <input type="text" class="form-control ms-2" id="nama-barang" name="nama-barang">
            </div>
            <div class="col-12 d-flex flex-row mb-4">
                <label for="kondisi" class=" col-form-label w-25">Kondisi</label>
                <select name="kondisi" id="kondisi" class="form-select ms-2">
                    <option value="0">Pilih kondisi</option>
                    <?php
                    $kondisi = model('App\Models\KondisiModel');
                    $shows = $kondisi->findAll(); ?>

                    <?php foreach ($shows as $data) : ?>
                        <option value="<?= $data['id']; ?>"><?= $data['keterangan_kondisi']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-12 d-flex flex-row mb-4">
                <label for="pemakai" class=" col-form-label w-25">Pemakai</label>
                <input type="text" class="form-control ms-2" id="pemakai" name="pemakai" disabled>
            </div>

        </div>

        <div class="col-5">
            <div class="col-12 d-flex flex-row mb-4">
                <label for="nup-simak" class="w-25 col-form-label">NUP SIMAK</label>
                <input type="text" class="form-control ms-2" id="nup-simak" name="nup-simak" disabled>
            </div>
            <div class="col-12 d-flex flex-row mb-4">
                <label for="keterangan-kondisi" class="w-25 col-form-label">Keterangan Kondisi</label>
                <!-- <input type="text" class="form-control ms-2" id="keterangan-kondisi" name="keterangan-kondisi"> -->
                <textarea class="form-control" name="keterangan-kondisi" id="" cols="30" rows="2"></textarea>
            </div>
            <div class="col-12 d-flex flex-row mb-4">
                <label for="keterangan-ruangan" class="col-form-label w-25 ms-2">Keterangan Ruangan</label>
                <select name="keterangan-ruangan" id="" class="form-select shadow">
                    <option value="">Pilih ruangan</option>
                    <?php
                    $kondisi = model('App\Models\RuanganModel');
                    $shows = $kondisi->findAll(); ?>
                    <?php foreach ($shows as $data) : ?>
                        <option value="<?= $data['id'] ?>"><?= $data['nama_ruangan'] ?></option>
                    <?php endforeach; ?>

                </select>
            </div>
            <div class="col-12 d-flex flex-row mb-4">
                <label for="tgl-perolehan" class="col-form-label w-25">Tanggal Perolehan</label>
                <input type="date" class="form-control ms-2" id="tgl-perolehan" name="tgl-perolehan">
            </div>
        </div>
    </div>

    <!-- baris untuk tombol submit dan reset  -->
    <div class="row d-flex my-4">
        <div class="col-12">
            <button type="submit" class="btn btn-primary mx-2" name="submit">
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                Submit
            </button>

            <button type="reset" class="btn btn-warning mx-2">
                <i class="bi bi-arrow-counterclockwise"></i>
                Reset
            </button>
        </div>
    </div>

</div>