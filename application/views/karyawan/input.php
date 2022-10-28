<section class="py-5 bg-dark">
    <div class="container py-5 ">
        <div class="row justify-content-center ">
            <div class="col-lg-8 col-md-11">
                <div class="card card-body bg-secondary">
                    <h1 class="text-center fw-bolder mb-4"><?= $title;?></h1>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row align-items-start">
                            <label for="nama" class="col-md-3 col-form-label fw-bold">Nama Lengkap</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control mb-2" id="nama" name="nama" placeholder="Masukan Nama Anda">
                                <div class="form-text text-danger"><?= form_error("nama");?></div>
                            </div>
                        </div>
                        <div class="mb-3 row align-items-start">
                            <label for="status" class="col-md-3 col-form-label fw-bold">Status Karyawan</label>
                            <div class="col-md-9">
                                <select class="form-select" id="status" aria-label="Default select example" name="status">
                                    <?php foreach($status as $s):?>
                                        <option value="<?= $s;?>"><?= $s;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row align-items-start">
                            <label for="jabatan" class="col-md-3 col-form-label fw-bold">Jabatan</label>
                            <div class="col-md-9">
                                <select class="form-select" id="jabatan" aria-label="Default select example" name="jabatan">
                                    <?php foreach($jabatan as $j):?>
                                        <option value="<?= $j;?>"><?= $j;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row align-items-start">
                            <label for="foto" class="col-md-3 col-form-label fw-bold">Upload Foto</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" id="foto" name="foto" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">   
                                <button type="submit" class="btn btn-sm btn-success fw-bold"><i class="fa-solid fa-download me-2"></i>Simpan</button>
                                <button type="reset" class="btn btn-sm btn-danger fw-bold"><i class="fa-solid fa-xmark me-2"></i>Batal</button>
                                <a href="<?= base_url();?>karyawan" class="btn btn-sm btn-warning fw-bold float-end"><i class="fa-solid fa-rotate-left me-2"></i>Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>