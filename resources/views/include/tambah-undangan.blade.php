<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Masukkan Data dengan sesuai</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <form>
                <div class="card-body">
                    <!-- form mempelai laki-laki -->
                  <div class="form-group">
                    <label for="Input Nama">Nama Laki-laki</label>
                    <input type="text" class="form-control" id="" placeholder="Mempelai Laki-laki">
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Ayah</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Ibu</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <br>
                  <!-- Form mempelai perempuan -->
                  <div class="form-group">
                    <label for="Input Nama">Nama Perempuan</label>
                    <input type="text" class="form-control" id="" placeholder="Mempelai Perempuan">
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Ayah</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Ibu</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>

                <!-- Date Akad -->
                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Akad</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">                     
                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                          <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="bootstrap-timepicker">
                        <div class="form-group">
                          <label>Waktu</label>
                            <div class="input-group date" id="timepicker" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" placeholder="00.00 AM/PM"/>
                                <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                <!-- Date Resepsi -->
                <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Resepsi</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">                     
                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                          <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="bootstrap-timepicker">
                        <div class="form-group">
                          <label>Waktu</label>
                            <div class="input-group date" id="timepicker" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" placeholder="00.00 AM/PM"/>
                                <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                <!-- tempat -->
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tempat</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Maps</label>
                        <input type="text" class="form-control" placeholder="Masukkan code google maps">
                      </div>
                    </div>
                </div>

                
                 
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </div>
</div>
<!-- /.container-fluid -->
