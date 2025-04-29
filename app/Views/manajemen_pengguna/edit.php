           <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Ubah Pengguna</h3>
                            <!--<p class="text-subtitle text-muted">For user to check they list</p>-->
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manajemen Pengguna</li>
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
                                        
                                    <form action="<?= base_url('update-manajemen-pengguna/' . $data['id']); ?>" method="post" enctype="multipart/form-data">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                        <!-- Nama Pengguna -->
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label for="NamaPengguna">Nama Pengguna</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input 
                                                    type="text" 
                                                    id="NamaPengguna" 
                                                    name="NamaPengguna" 
                                                    class="form-control" 
                                                    placeholder="Masukkan nama unit utama" 
                                                    value="<?= $data['NamaPengguna'] ?>" 
                                                    required>
                                            </div>
                                        </div>

                                        <!-- Username -->
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label for="Username">Username</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input 
                                                    type="text" 
                                                    id="Username" 
                                                    name="Username" 
                                                    class="form-control" 
                                                    placeholder="Masukkan nama satuan kerja" 
                                                    value="<?= $data['Username'] ?>" 
                                                    required>
                                            </div>
                                        </div>  

                                        <!-- Nama Unit Utama -->
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label for="NamaUnitUtama">Nama Unit Utama</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input 
                                                    type="text" 
                                                    id="NamaUnitUtama" 
                                                    name="NamaUnitUtama" 
                                                    class="form-control" 
                                                    placeholder="Masukkan nama satuan kerja" 
                                                    value="<?= $data['NamaUnitUtama'] ?>" 
                                                    required>
                                            </div>
                                        </div>
                                        
                                        <!-- Nama Satuan Kerja -->
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <label for="NamaSatuanKerja">Nama Satuan Kerja</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input 
                                                    type="text" 
                                                    id="NamaSatuanKerja" 
                                                    name="NamaSatuanKerja" 
                                                    class="form-control" 
                                                    placeholder="Masukkan nama satuan kerja" 
                                                    value="<?= $data['NamaSatuanKerja'] ?>" 
                                                    required>
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