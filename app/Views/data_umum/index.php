        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Data Umum</h3>
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

                                <?php if (session()->has('success')): ?>
                                    <div class="alert alert-success">
                                        <?= session('success') ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (session()->has('error')): ?>
                                    <div class="alert alert-danger">
                                        <?= session('error') ?>
                                    </div>
                                <?php endif; ?>

                                    <form class="form form-horizontal">
                                        <div class="form-body">
                                                                                                                          
                                            <?php if (!session()->has('info')): ?>
                                            <div class="col-sm-6 d-flex justify-content-start">
                                                <a href="add-data-umum">
                                                    <button type="button" class="btn btn-primary">Tambah Data</button>
                                                </a>
                                            </div>
                                            <br>       
                                            <?php endif; ?>                                                                             

                                            <?php $id = 1;?>
                                            <?php foreach ($data as $content) { ?>
                                            <div class="row">                                                   
                                                <div class="col-md-4">
                                                    <label>Nama Unit Utama</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <p class="form-control-static"><?= $content['Nama_Unit_Utama']?></p>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Nama Satuan Kerja</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                        <p class="form-control-static"><?= $content['Nama_Satuan_Kerja']?></p>
                                                </div>
                                                <div class="col-12 mb-4">
                                                    <h4><strong>Nama Tim Pemilik Risiko</strong></h4>
                                                    <hr>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Ketua</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <label><?= $content['Ketua']?></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Sekretaris</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <label><?= $content['Sekretaris']?></label>
                                                </div>

                                                <div class="col-md-4">
                                                    <label>Anggota</label>
                                                </div>
                                                <div class="col-md-8 form-group">                                                           
                                                        <p class="form-control-static"><?= $content['Anggota']?></p>
                                                        <p class="form-control-static">Nama Anggota 2</p>
                                                        <p class="form-control-static">Nama Anggota 3</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>SK Tim Unit Pemilik Risiko</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <!--<input type="file" class="basic-filepond">-->
                                                    <a href="#"><?= $content['SK_Tim_Unit_Pemilik_Risiko']?></a>
                                                </div>
                                                
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <a href="edit-data-umum"><button type="button"
                                                        class="btn btn-primary me-1 mb-1">Ubah Data</button></a>
                                                </div>
                                            </div>
                                            <?php $id++?>
                                            <?php } ?>
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