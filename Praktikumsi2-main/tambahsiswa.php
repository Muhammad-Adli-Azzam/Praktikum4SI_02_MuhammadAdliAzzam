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
        <h1 class="mt-4 text-center">Halaman Tambah Siswa</h1>
        
       
            <form action="index.php">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="" value="" required>
                
                <label for="">Nim</label>
                <input type="text" class="form-control" name="" value="" required>
                
                <button class="btn btn-primary mt-3">Submit</button>
            </form>
        
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
