            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Ubah Data Umum</h3>
                            <!--<p class="text-subtitle text-muted">For user to check they list</p>-->
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Umum</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>


                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">

                                <div class="card-content">
                                    <div class="card-body">
                                        
                                    <!-- notifikasi -->
                                    <?php if (session()->has('info')): ?>
                                            <div class="alert alert-info">
                                                <?= session('info') ?>
                                            </div>
                                    <?php endif; ?>
                                    <?php if (session()->has('error')): ?>
                                        <div class="alert alert-danger">
                                            <?= session('error') ?>
                                        </div>
                                    <?php endif; ?>
                                    <!-- notifikasi -->

                                    <form action="update-data-umum/1" method="post" enctype="multipart/form-data">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="id" value="<?= $data['ID_Data_Umum'] ?>">
                                        <!-- Nama Unit Utama -->
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label for="nama_unit_utama">Nama Unit Utama</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input 
                                                    type="text" 
                                                    id="nama_unit_utama" 
                                                    name="nama_unit_utama" 
                                                    class="form-control" 
                                                    placeholder="Masukkan nama unit utama" 
                                                    value="<?= $data['Nama_Unit_Utama'] ?>" 
                                                    required>
                                            </div>
                                        </div>

                                        <!-- Nama Satuan Kerja -->
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label for="nama_satuan_kerja">Nama Satuan Kerja</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input 
                                                    type="text" 
                                                    id="nama_satuan_kerja" 
                                                    name="nama_satuan_kerja" 
                                                    class="form-control" 
                                                    placeholder="Masukkan nama satuan kerja" 
                                                    value="<?= $data['Nama_Satuan_Kerja'] ?>" 
                                                    required>
                                            </div>
                                        </div>

                                        <!-- Judul Tim Pemilik Risiko -->
                                        <div class="col-12 mb-4">
                                            <h4><strong>Nama Tim Pemilik Risiko</strong></h4>
                                            <hr>
                                        </div>

                                        <!-- Ketua -->
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label for="ketua">Ketua</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input 
                                                    type="text" 
                                                    id="ketua" 
                                                    name="ketua" 
                                                    class="form-control" 
                                                    placeholder="Masukkan nama ketua tim" 
                                                    value="<?= $data['Ketua'] ?>" 
                                                    required>
                                            </div>
                                        </div>

                                        <!-- Sekretaris -->
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label for="sekretaris">Sekretaris</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input 
                                                    type="text" 
                                                    id="sekretaris" 
                                                    name="sekretaris" 
                                                    class="form-control" 
                                                    placeholder="Masukkan nama sekretaris tim" 
                                                    value="<?= $data['Sekretaris'] ?>" 
                                                    required>
                                            </div>
                                        </div>

                                        <!-- Anggota -->
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label for="anggota">Anggota</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input 
                                                    type="text" 
                                                    id="anggota" 
                                                    name="anggota" 
                                                    class="form-control mb-2" 
                                                    placeholder="Masukkan nama anggota" 
                                                    value="<?= $data['Anggota'] ?>" 
                                                    required>
                                                <button type="button" id="add-anggota" class="btn btn-secondary btn-sm">Tambah Nama Anggota</button>
                                            </div>
                                        </div>

                                        <!-- SK Tim Unit Pemilik Risiko -->
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label for="sk_tim">SK Tim Unit Pemilik Risiko</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input 
                                                    type="file" 
                                                    id="sk_tim" 
                                                    name="sk_tim" 
                                                    class="form-control">
                                                <small class="text-muted">Unggah ulang jika ingin mengganti file.</small>
                                            </div>
                                        </div>

                                        <!-- Tombol Simpan -->
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Perbarui</button>
                                        </div>
                                    </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Horizontal form layout section end -->

            </div>