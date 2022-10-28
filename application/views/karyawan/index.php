<?php 
function rupiah($angka){
	$hasil_rupiah ="Rp. ".number_format($angka,0,',','.');
	return $hasil_rupiah;
}
?>
<section class="py-5 bg-dark" >
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="flash-data" data-flash="<?= $this->session->flashdata("karyawan");?>"></div>
                <div class="card card-body bg-secondary">
                    <h1 class="text-center fw-bolder mb-4"><?= $title;?></h1>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="text-center bg-dark text-white fw-bold">
                                <tr>
                                    <th width="15px" class="fw-bold">No</th>
                                    <th class="fw-bold">Nama</th>
                                    <th width="100px" class="fw-bold">Status Karyawan</th>
                                    <th width="60px" class="fw-bold">Jabatan</th>
                                    <th width="150px" class="fw-bold">Gaji Pokok</th>
                                    <th width="150px" class="fw-bold">Tunjangan</th>
                                    <th width="150px" class="fw-bold">Total Gaji</th>
                                    <th width="100px" class="fw-bold">Foto</th>
                                    <th width="230px" class="fw-bold">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach($karyawan as $k):?>
                                    <tr>
                                        <td class="text-center"><?= $no++;?></td>
                                        <td><?= $k["nama"];?></td>
                                        <td><?= $k["status"];?></td>
                                        <td><?= $k["jabatan"];?></td>
                                        <td><?= rupiah($k["gajipokok"]);?></td>
                                        <td><?= rupiah($k["tunjangan"]);?></td>
                                        <td><?= rupiah($k["total"]);?></td>
                                        <td class="text-center"><img src="<?= base_url().$k['foto'];?>" width="80px" class="h-auto"></td>
                                        <td class="d-flex gap-2 justify-content-center">
                                            <a href="<?= base_url();?>karyawan/edit/<?= $k['id'];?>" class="btn btn-sm btn-warning d-flex align-items-center"><i class="fa-sharp fa-solid fa-pen-to-square me-2"></i>Edit</a>
                                            <a href="<?= base_url();?>karyawan/hapus/<?= $k['id'];?>" class="btn btn-sm btn-danger tombol-hapus d-flex align-items-center"><i class="fa-sharp fa-solid fa-trash me-2"></i>Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                            <div class="mb-3">
                                <a href="<?= base_url();?>karyawan/input" class="btn btn-success"><i class="fa-solid fa-user-plus me-2"></i>Tambah Data</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section