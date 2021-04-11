<?php include "include/header.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->


      <div class="row">
        <div class="col-md-12">
          <div class="card p-5 mt-4">
            <form method="POST" action="functions/control.php">
              <div class="form-group">
                <label for="Name">Project Name</label>
                <input type="text" class="form-control" id="Name" name=" proje_baslik">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="urgency">project urgency</label>
                    <select class="form-control" name="proje_aciliyet" id="urgency">
                      <option value="urgent">urgent</option>
                      <option value="normal">normal</option>
                      <option value="non urgent">non urgent</option>

                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="status">Project status</label>
                    <select class="form-control" name="proje_durum" id="status">
                      <option value="new">New</option>
                      <option value="Finish">Finish</option>
                      <option value="not Finisjh">not Finish</option>

                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="Date">Date</label>
                    <input type="date" name="proje_teslim_tarihi" class="form-control" id="Date">
                  </div>
                </div>




              </div>

              <div class="form-group">
                <label for="Details">Project Details</label>
                <textarea class="form-control" name="proje_detay" id="Details" rows="3"></textarea>
              </div>


              <button type="submit" name="add_project" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
     


      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "include/footer.php" ?>