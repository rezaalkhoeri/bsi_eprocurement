    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <img class="img-responsive animated--grow-in" width="240px" height="70px" src="<?= base_url('assets/img/pdsibaru.jpg');?>">
                </div>
              </a>
              
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Distribution</h1>

        <form action="<?= base_url('Distribution/tambah_aksi')?>" method="post">
        <!-- ticket -->
        <div id="ticket_feedback" class="form-group">
        <label for="ticket">Ticket</label>
        <input type="text" class="form-control" id="ticket" name="ticket" maxlength="15">
        </div>

        <!-- receipt num -->
        <div class="form-group">
        <label for="receiptnumber">Receipt Number</label>
        <input type="text" class="form-control" id="receiptnumber" name="receiptnumber">
        </div>

        <!-- asset num -->
        <div class="form-group">
        <label for="assetnumber">Assett Number</label>
        <input type="text" class="form-control" id="assetnumber" name="assetnumber">
        </div>

        <!-- item -->
				<div 
				class="form-group">
			 	<label for="item">Item</label>
			 	<select class="form-control" name="item" id="item">
				 			<option>Choose</option>
              <option>Handphone</option>
              <option>Handy Talk</option>
              <option>PC Desktop</option>
              <option>Printer</option>
              <option>Proyektor</option>
              <option>Laptop</option>
							</select>
			 <i class="form-control-feedback"></i>
			 <span class="text-warning" ></span>
			 </div>

       <!--date-->
			 <div 
			 class="form-group">
			 <label for="date">Date</label><br/>
			 <input type="date" name="date" id="date">
			 <span class="text-warning"></span>
			 </div>

       <!-- location -->
				<div 
				class="form-group">
			 	<label for="location">Location</label>
			 	<select class="form-control" name="location" id="location">
				 			<option>Choose</option>
              <!-- <option>Handphone</option> -->
              <!-- <option>Handy Talk</option> -->
              <!-- <option>Proyektor</option> -->
							</select>
			 <i class="form-control-feedback"></i>
			 <span class="text-warning" ></span>
			 </div>

       <!-- status -->
				<div 
				class="form-group">
				<label for="status">Status</label>
				<select class="form-control" name="status" id="status" >
				 			<option>Distributed</option>
				 			<option>Pending</option>
							</select>
			 <i class="form-control-feedback"></i>
			 <span class="text-warning" ></span>
			 </div>

       <!-- giver -->
       <div class="form-group">
       <label for="giver">Giver</label>
       <input type="text" class="form-control" id="giver" name="giver">
       </div>

       <!-- recepient -->
       <div class="form-group">
       <label for="recepient">Recepient</label>
       <input type="text" class="form-control" id="recepient" name="recepient">
       </div>

       <!-- description -->
       <div class="form-group">
        <label for="description">Description</label>
          <textarea class="form-control" id="description" rows="3" name="description">
          </textarea>
       </div>

       <!-- input file -->
       
        <div class="form-group">
          <label for="uploadreceiptdoc">Upload Receipt Doc</label>
          <input type="file" class="form-control-file" id="uploadreceiptdoc" name="uploadreceiptdoc">
        </div>
       
       
       <!-- button submit-->
       <a href="#" role="button">
        <button type="submit" value="input" class="btn btn-primary"> 
        Submit
      </button>
      </a>

      <!-- button next-->
        <a href="<?= base_url('user/facilities')?>" role="button">
        <button type="button" value="submit" class="btn btn-success"> 
        Next
      </button>
      </a>
      </form>

      <hr>
      <input class="form-control" id="posSearch" type="text" placeholder="Search here...">
      <br>
      <!-- table -->
      <div class="panel-body">
			<table id="tblData1" class="table table-bordered">
    		<thead class="thead-dark">
          <tr>
            <th scope="col">Ticket</th>
            <th scope="col">Receipt Number</th>
            <th scope="col">Asset Number</th>
            <th scope="col">Item</th>
            <th scope="col">Date</th>
            <th scope="col">Location</th>                         
            <th scope="col">Status</th>
            <th scope="col">Description</th>
            <th scope="col">Giver</th>
            <th scope="col">Recepient</th>
            <th scope="col">Upload Receipt Doc</th>
          </tr>
        </thead>
        <tbody id="posTable">
        <?php 
        foreach ($get as $a) {
          # code...
          ?>

          <tr>
          <td scope="col"><?= $a->ticket?></td>
          <td scope="col"><?= $a->receiptnumber?></td>
          <td scope="col"><?= $a->assetnumber?></td>
          <td scope="col"><?= $a->item?></td>
          <td scope="col"><?= $a->date?></td>
          <td scope="col"><?= $a->location?></td>
          <td scope="col"><?= $a->status?></td>
          <td scope="col"><?= $a->description?></td>
          <td scope="col"><?= $a->uploadreceiptdoc?></td>
          </tr>

        <?php } 
        ?>

        </tbody>
      </table>
      </div>
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>

<script>
$(document).ready(function(){
  $("#posSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#posTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script>
$(document).ready(function() {
    var text_max = 15;
    // $('#ticket_feedback').html(text_max + ' characters remaining');

    $('#ticket').keyup(function() {
        var text_length = $('#ticket').val().length;
        // var text_remaining = text_max - text_length;

        // $('#ticket_feedback').html(text_remaining + ' characters remaining');
    });
});
</script>