            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Pemantauan Risiko</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pemantauan Risiko</li>
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
                                        <form class="form form-horizontal">
                                            <div class="form-body">

                                                
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
                                                        <select class="dropdown-select" disabled>
                                                            <option value="">Pilih</option>
                                                            <option value="1" selected>2024</option>
                                                            <option value="2">2025</option>
                                                        </select>
                                                    </div>
                                                    <br><br>
                                                    <div class="col-md-12">
                                                        <h5 class="form-section-title">(Tingkat Risiko >= "Sedang")</h5>
                                                        <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <td style="text-align: center;">NO</th>
                                                                <!--<td style="text-align: center;">UNIT KERJA PEMILIK RISIKO</th>-->
                                                                <td style="text-align: center;">NAMA RISIKO</th>
                                                                <td style="text-align: center;">KODE RISIKO</th>
                                                                <td style="text-align: center;">KATEGORI RISIKO</th>
                                                                <td style="text-align: center;">P (KEMUNGKINAN)</th>
                                                                <td style="text-align: center;">D (DAMPAK)</th>
                                                                <td style="text-align: center;">BOBOT</th>
                                                                <td style="text-align: center;">NILAI</th>
                                                                <td style="text-align: center;">TINGKAT RISIKO</th>
                                                                <td style="text-align: center;">PRIORITAS RISIKO</th>
                                                                <td style="text-align: center;">URAIAN PENGENDALIAN</th>
                                                                <td style="text-align: center;">JADWAL PELAKSANAAN</th>
                                                                
                                                                <td class="merged" colspan="5" style="text-align: center;">HASIL PEMANTAUAN</td>
                                                                <td style="text-align: center;">SIMPULAN - TINGKAT RISIKO</th>
                                                                <td style="text-align: center;">SIMPULAN - EFEKTIFITAS</th>
                                                                <td>Tindakan</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="12"></td>
                                                                <td style="text-align: center;">P (KEMUNGKINAN)</td>
                                                                <td style="text-align: center;">D (DAMPAK)</td>
                                                                <td style="text-align: center;">BOBOT</td>
                                                                <td style="text-align: center;">NILAI</td>
                                                                <td style="text-align: center;">TINGKAT RISIKO</td>
                                                                <td colspan="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Risiko 1</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input"></td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input"></td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input"></td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input"></td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input"></td>
                                                                
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input Tingkat Risiko"></td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input Efektifitas"></td>
                                                                <td>                                           
                                                                    <a href="javascript:void(0);" onclick="showPopup()">Ubah Simpulan</a>
                                                                    <div class="overlay" id="overlay" onclick="closePopup()"></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Risiko 2</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input"></td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input"></td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input"></td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input"></td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input"></td>
                                                                
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input Tingkat Risiko"></td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input Efektifitas"></td>
                                                                <td>                                           
                                                                    <a href="javascript:void(0);" onclick="showPopup()">Ubah Simpulan</a>
                                                                    <div class="overlay" id="overlay" onclick="closePopup()"></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Risiko 3</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td>otomatis</td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input"></td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input"></td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input"></td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input"></td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input"></td>
                                                                
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input Tingkat Risiko"></td>
                                                                <td><input type="text" id="first-name" class="form-control"
                                                                name="fname" placeholder="Input Efektifitas"></td>
                                                                <td>                                           
                                                                    <a href="javascript:void(0);" onclick="showPopup()">Ubah Simpulan</a>
                                                                    <div class="overlay" id="overlay" onclick="closePopup()"></div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        </div>
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


    <!-- Pop-Up -->
    <div class="popup" id="popup">  
        <h2>Input Simpulan</h2>
        <input type="text" id="first-name" class="form-control" name="fname" placeholder="Tingkat Risiko">
        <input type="text" id="first-name" class="form-control" name="fname" placeholder="Efektifitas">
        <div>
            <button class="button cancel" onclick="closePopup()">Batal</button>
            <button class="button" onclick="redirect()">Simpan</button>
        </div>
    </div>


    <script>
        // Show popup
        function showPopup() {
            document.getElementById("popup").style.display = "block";
            document.getElementById("overlay").style.display = "block";
        }

        // Close popup
        function closePopup() {
            document.getElementById("popup").style.display = "none";
            document.getElementById("overlay").style.display = "none";
        }

        // Redirect to tambah-penilaian.php with the selected year
        function redirect() {
            const selectedYear = document.getElementById("yearSelect").value;
            //window.location.href = `add-penilaian-risiko.php?tahun=${selectedYear}`;
            window.location.href = `add-penilaian-risiko.php?tahun=${selectedYear}`;
        }
    </script>

    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="assets/js/main.js"></script>