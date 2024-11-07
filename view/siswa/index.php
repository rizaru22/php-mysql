      <!-- Default box -->
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Data Siswa</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col">
                      <a href="index.php?page=siswa_create&title=siswa" class="btn btn-success btn-md"><i class="fas fa-user-plus"></i> Tambah Data</a>
                  </div>
              </div>
              <div class="row pt-3">
                <div class="col">
                    <?php
                            include "db/koneksi.php";
                            $query="SELECT nama,nisn,nohp FROM siswa order by nama";
                            $hasil=mysqli_query($koneksi,$query);
                            
                    ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>No HP</th>
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
                            <td>".$data['nisn']."</td>
                            <td>".$data['nohp']."</td>
                            <td>
                                    <a href='index.php?title=siswa&page=siswa_detail&nisn=$data[nisn]' class='btn btn-outline-primary btn-sm'><i class='fas fa-eye'></i> View</a>

                                     <a href='index.php?title=siswa&page=siswa_edit&nisn=$data[nisn]' class='btn btn-outline-success btn-sm'><i class='fas fa-edit'></i> Edit</a>
                                     
                            
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