<div class="main-content" style="min-height: 610px;">
    <section class="section">
        <div class="section-body">
            <h2 class="section-title">Advanced Forms</h2>
            <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p>

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                        <h4>Resgistrasi Kendaraan Baru</h4>
                        </div>
                        <div class="card-body">
                        <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
                                    <thead>                                 
                                    <tr role="row">
                                        <th>#</th>
                                        <th>Nomor Polisi</th>
                                        <th>Merk</th>
                                        <th>Model</th>
                                        <th>ketersediaan</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; foreach ($get_mobil as $row):?>                                 
                                    <tr role="row" class="odd">
                                    <td class="sorting_1"><?php echo $no?></td>
                                    <td><?php echo $row['nopol']; ?></td>
                                    <td><?php echo $row['merk']; ?></td>
                                    <td><?php echo $row['model']; ?></td>
                                    <td><?php 
                                        if($row['ketersediaan'] == 1) {
                                        echo "Tersedia";
                                        }
                                        else {
                                        echo "Tidak tersedia";
                                        }?></td>
                                    <td>
                                        X
                                    </td>
                                    </tr>
                                    <?php $no++; endforeach; ?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                    
                  </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>