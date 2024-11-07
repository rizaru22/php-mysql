      <!-- Default box -->
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Data pegawai</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col">
                      <a href="index.php?page=pegawai_create&title=pegawai" class="btn btn-success btn-md"><i class="fas fa-user-plus"></i> Tambah Data</a>
                  </div>
              </div>
              <div class="row pt-3">
                <div class="col">
                    <?php
                            include "db/koneksi.php";
                            $query="SELECT id,nama,username FROM pegawai order by nama";
                            $hasil=mysqli_query($koneksi,$query);
                            
                    ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    while($data=mysqli_fetch_assoc($hasil)){
                        echo "<tr>
                            <td>".$no."</td>
                            <td>".$data['nama']."</td>
                            <td>".$data['username']."</td>
                            <td>
                                    <a href='index.php?title=pegawai&page=pegawai_detail&id=$data[id]' class='btn btn-outline-primary btn-sm'><i class='fas fa-eye'></i> View</a>

                                     <a href='index.php?title=pegawai&page=pegawai_edit&id=$data[id]' class='btn btn-outline-success btn-sm'><i class='fas fa-edit'></i> Edit</a>
                                     
                      
                            </td>
                    </tr>";
                    $no++;
                    }
                    

                    ?>
                  </tbody>
                </table>
                </div>
              </div>

          </div>
          <!-- /.card-body -->

      </div>
      <!-- /.card -->