<title>Profil</title>
<!-- Page Heading -->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="d-sm-flex align-items-center justify-content-between mb-4">

    <h1 class="h3 mb-0 text-gray-800">Profil</h1>

</div>

<!-- Content Row -->
<div class="row">

    <div class="col-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data profil</h6>
                <a href="#" ole="button" data-toggle="modal" data-target="#editdetailprofilModal">
                <i class="fas fa-pen">Edit</i>
                </a>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="card-area">
                    <div>
                        <h6 class="font-weight-bold">Nama :</h6>
                        <p>Manajemen Informatika</p>
                    </div>
                    <div>
                        <h6 class="font-weight-bold">Nomer Telepon :<h6>
                        <p>09401920910391</p>
                    </div>
                    <div>
                        <h6 class="font-weight-bold">Alamat :</h6>
                        <p>MPQG+5MG, Jl. Prof. Moch Yamin, Ketintang, Kec. Gayungan, Kota SBY, Jawa Timur 60231</p>
                    </div>
                    <div>
                        <h6 class="font-weight-bold">Link maps :</h6>
                        <p>https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2027928.7027891946!2d113.5832404!3d-6.914709!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb36853c3caf%3A0xc8b1886df4fb71c!2sProgram%20Vokasi%20UNESA!5e0!3m2!1sen!2sid!4v1672544809450!5m2!1sen!2sid</p>
                    </div>
                    <div>
                        <h6 class="font-weight-bold">Deskripsi :</h6>
                        <p>Manajemen Informatika Jurusan Teknik INFORMATIKA adalah satu dari lima jurusan yang ada di selingkung Fakultas Teknik (FT) Universitas Negeri Surabaya (Unesa). Jurusan Teknik Informatika cikal bakalnya berasal dari jurursan Teknik Elektro pada Prodi D3 Manajemen Informatika dan S1 Pendidikan Teknologi nformasi, setelah proses pengajuan kepada DIKTI untuk pendirian jurusan Teknik Informatika pada tahun 2012</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Pie Chart -->
    <div class="col-xl-5 col-lg-7">
        <div> <a href="#"><img width="60%" src="img/MI.png"></a></div>

    </div>

    <!-- edit data -->
    <div class="modal fade" id="editdetailprofilModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Silahkan Ubah Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>


                <div class="card-body">
                    <form action="" method="post"
                        enctype="multipart/form-data" id="frm-mhs">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_profil" value="Manajemen Informatika"
                                class="form-control"  class="required" />
                        </div>
                        <div class="form-group">
                            <label>Nomer</label>
                            <input type="teks" name="nomer_profil" value="049023984302"
                                class="form-control"  class="required" />
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat_profil" rows="5" cols="50"
                                class="required">MPQG+5MG, Jl. Prof. Moch Yamin, Ketintang, Kec. Gayungan, Kota SBY, Jawa Timur 60231</textarea>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi_profil" class="form-control" rows="5" cols="50"
                                class="required">blablabala</textarea>
                        </div>
                        <div class="form-group">
                            <label>Ubah Logo</label><br>
                            <input type="file" name="img">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <input class="btn btn-primary" name="submit" type="submit" value="Simpan">
                        </div>


                    </form>

                </div>
            </div>
        </div>


