<!-- <?php $this->load->view($alert); ?> -->              
      
      <section class="section">
          <div class="section-header">
            <h1>User Management</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">DataTables</div>
            </div>
          </div>

          <div class="section-body">
            <!-- <h2 class="section-title">Contoh </h2>
            <p class="section-lead">
              Manage user in this page.
            </p> -->

            <div class="row">
              <div class="col-12">
                <div class="card">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="card-header">
                      <h4>User Table</h4>
                    </div>
                  </div>
                </div>
                <div class="row ml-auto">
                  <div class="col-12 col-md-6 col-lg-6">

                  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Launch demo modal</button> -->
                    <div class="buton p-3 mr-2">
                        <a type="button" data-toggle="modal" data-target="#exampleModalCenter" href="<?php echo base_url().'user-management/register'?>" class="btn btn-primary btn-lg"><i class="far fa-user mr-2"></i> Add User</a>
                    </div>
                  </div>
   
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
                      </table></div></div></div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>