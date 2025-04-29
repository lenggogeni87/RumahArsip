            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h3>Penilaian Risiko</h3>
                        </div>
                        <div class="col-12 col-md-6">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Penilaian Risiko</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="col-md-4">
                            <label>Nama Unit Utama</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <p class="form-control-static">Direktorat Jenderal Tenaga Kesehatan</p>
                        </div>
                        <div class="col-md-4">
                            <label>Nama Satuan Kerja</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <p class="form-control-static">Poltekkes Kemenkes Aceh</p>
                        </div>
                        <div class="col-md-4">
                            <label>Tahun</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <p class="form-control-static">2024</p>
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

                                        
                                        <div class="col-sm-6 d-flex justify-content-start">
                                                <button class="button" onclick="showPopup()">Tambah Risiko</button>                                               
                                                <div class="overlay" id="overlay" onclick="closePopup()"></div>
                                        </div>
                                        
                                        <br>
                                        

                                        <form class="form form-horizontal">
                                            <div class="form-body">

                                                <div class="col-md-12">
                                                <div class="table-responsive">                                      
                                                    <table class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <td style="text-align: center;">NO</th>
                                                            <td style="text-align: center;">NAMA RISIKO</th>
                                                            <td style="text-align: center;">KODE RISIKO</th>
                                                            <td style="text-align: center;">KATEGORI RISIKO</th>
                                                            <td style="text-align: center;">SEBAB</th>
                                                            <td style="text-align: center;">SUMBER RISIKO</th>
                                                            <td style="text-align: center;">CONTROL STATUS</th>
                                                            <td style="text-align: center;">P (KEMUNGKINAN)</th>
                                                            <td style="text-align: center;">D (DAMPAK)</th>
                                                            <td style="text-align: center;">BOBOT</th>
                                                            <td style="text-align: center;">NILAI</th>
                                                            <td style="text-align: center;">TINGKAT RISIKO</th>
                                                            <td style="text-align: center;">PRIORITAS RISIKO</th>
                                                            <td style="text-align: center;">URAIAN PENGENDALIAN</th>
                                                            <td style="text-align: center;">JADWAL PELAKSANAAN</th>
                                                            <td style="text-align: center;">PENANGGUNGJAWAB</th>
                                                            <th class="merged" colspan="3" style="text-align: center;">TARGET PENURUNAN RISIKO</th>
                                                            <th>Tindakan</th>
                                                        </tr>                                               
                                                        <tr>
                                                            <td colspan="14"></td>
                                                            <td style="text-align: center;">P (KEMUNGKINAN)</td>
                                                            <td style="text-align: center;">D (DAMPAK)</td>
                                                            <td style="text-align: center;">BOBOT</td>
                                                            <td style="text-align: center;">NILAI</td>
                                                            <td style="text-align: center;">TINGKAT RISIKO</td>
                                                        </tr>

                                                        </thead>
                                                        <tbody>
                                                            <?php $id = 1;?>
                                                            <?php foreach ($data as $content) { ?>

                                                            <tr>
                                                                <td><?= $id?></td>
                                                                <td><?= $content['Nama_Risiko']?></td>
                                                                <td><?= $content['Kode_Risiko']?></td>
                                                                <td><?= $content['Kategori_Risiko']?></td>
                                                                <td><?= $content['Sebab']?></td>
                                                                <td><?= $content['Sumber_Risiko']?></td>
                                                                <td><?= $content['Control_Status']?></td>
                                                                <td><?= $content['P_Kemungkinan']?></td>
                                                                <td><?= $content['D_Dampak']?></td>
                                                                <td><?= $content['Bobot']?></td>
                                                                <td><?= $content['Nilai']?></td>
                                                                <td><?= $content['Tingkat_Risiko']?></td>
                                                                <td><?= $content['Prioritas_Risiko']?></td>
                                                                <td><?= $content['Selera_Risiko']?></td>
                                                                <td><?= $content['Target_P_Kemungkinan']?></td>
                                                                <td><?= $content['Target_D_Dampak']?></td>
                                                                <td><?= $content['Target_D_Dampak']?></td>
                                                                <td><?= $content['Target_D_Dampak']?></td>
                                                                <td><?= $content['Target_D_Dampak']?></td>
                                                                                                                                
                                                                <td>Ubah Risiko | Hapus Risiko</td>
                                                            </tr>
                                                                                                                
                                                            <?php 
                                                            $id++;
                                                            } ?>
                                                        </tbody>
                                                    </table>

                                                </div>
                                                </div>
                                                
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