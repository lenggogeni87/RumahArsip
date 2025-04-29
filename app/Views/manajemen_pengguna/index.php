        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Manajemen Pengguna</h3>
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
            <section class="section">
                <div class="card">                        
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama Pengguna</th>
                                <th>Username</th>    
                                <th>Nama Unit Utama</th>
                                <th>Nama Satuan Kerja</th>
                                <th>Akses Level</th>
                                <th>Status Pengguna</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $id = 1;?>
                            <?php foreach ($data as $content) { ?>
                                <tr>
                                    <td><?= $id?></td>
                                    <td><?= $content['NamaPengguna']?></td>
                                    <td><?= $content['Username']?></td>
                                    <td><?= $content['NamaUnitUtama']?></td>
                                    <td><?= $content['NamaSatuanKerja']?></td>
                                    <td><?= $content['AksesLevel'] == 1 ? "Super Administrator" : ($content['AksesLevel'] == 2 ? "Pimpinan" : ($content['AksesLevel'] == 3 ? "Auditor" : "Satker")); ?></td>
                                    </td>
                                    <td>
                                        <span class="badge bg-success"><?= $content['StatusPengguna'] == 1 ? "Aktif" : "Non Aktif"; ?></span>
                                    </td>
                                    <td><a href="edit-manajemen-pengguna/<?= $content['id']?>">Edit</a> | <a href="hapus-manajemen-pengguna">Delete</a></td>
                                </tr>
                            <?php $id++?>
                            <?php } ?>
                        </tbody>                       
                        </table>
                    </div>
                </div>
            </section>
        </div>
