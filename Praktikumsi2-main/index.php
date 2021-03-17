<!DOCTYPE html>
<html lang="en">

  <?php
    require('head.php');
  ?>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php 
      include('sidebar.php');
    ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <?php 
        include("navbar.php");
      ?>

      <div class="container-fluid">
        <h1 class="mt-4 text-center">Halaman Index Siswa</h1>

        <div class="row">
              <a href="tambahsiswa.php" class="btn btn-primary ml-3">Tambah Siswa</a>

              <table class="table mt-3 mr-3 ml-3">
                  <thead class="bg-primary text-white">
                      <th>No</th>
                      <th>Nama</th>
                      <th>Nim</th>
                      <th>Action</th>
                  </thead>
                  <tbody>
                      <tr>
                        <td>1</td>
                        <td>yazid</td>
                        <td>0110217042</td>
                        <td>
                          <a href="" class="btn btn-success"> <i class="fa fa-pencil-alt"></i> </a>
                          <a href="" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>
                       
                        </td>
                      </tr>
                      
                      <tr>
                        <td>2</td>
                        <td>supriadi</td>
                        <td>0110217041</td>
                        <td>
                          
                        <a href="" class="btn btn-success"> <i class="fa fa-pencil-alt"></i> </a>
                          <a href="" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>
                       
                        </td>
                      </tr>
                  </tbody>
              </table>
        </div>

      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  
  <!-- /#wrapper -->
  <?php
   include("script.php");
   
   ?>
</body>

</html>
