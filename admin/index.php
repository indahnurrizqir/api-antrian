<?php include  'header.php'; ?>
          <div class="main">
          <div class="main-inner">
          <div class="container">
          <div class="row">
          <div class="span12">
          <div class="widget widget-nopad">
          <div class="widget-header">
              <h3> Antrian Saat Ini</h3>
          </div>
            <!-- /widget-header -->
                <div class="widget-content">
                <div class="widget big-stats-container">
                <div class="widget-content">
                <div id="big_stats" class="cf">

                    <div class="stat"><h6>LOKET 1</h6><span class="value">10</span><br> 
                      <button class="button btn btn-success">Aktif</button>
                      <button class="button btn btn-success">Nonaktif</button>
                      <button class="button btn btn-success">Reset</button></div>
                    <!-- .stat -->
                    
                    <div class="stat"><h6>LOKET 2</h6><span class="value">20</span> <br> 
                      <button class="button btn btn-success">Aktif</button>
                      <button class="button btn btn-success">Nonaktif</button>
                      <button class="button btn btn-success">Reset</button></div>
                    <!-- .stat -->
                    
                    <div class="stat"><h6>LOKET 3</h6><span class="value">30</span> <br> 
                      <button class="button btn btn-success">Aktif</button>
                      <button class="button btn btn-success">Nonaktif</button>
                      <button class="button btn btn-success">Reset</button></div>
                    <!-- .stat -->
                    
                    <div class="stat"><h6>LOKET 4</h6><span class="value">5</span> <br> 
                      <button class="button btn btn-success">Aktif</button>
                      <button class="button btn btn-success">Nonaktif</button>
                      <button class="button btn btn-success">Reset</button></div>
                    <!-- .stat --> 
                    <div class="stat"><h6>LOKET 5</h6><span class="value">10</span><br> 
                      <button class="button btn btn-success">Aktif</button>
                      <button class="button btn btn-success">Nonaktif</button>
                      <button class="button btn btn-success">Reset</button></div>
                    <!-- .stat -->
                    
                    <div class="stat"><h6>LOKET 6</h6><span class="value">20</span> <br> 
                      <button class="button btn btn-success">Aktif</button>
                      <button class="button btn btn-success">Nonaktif</button>
                      <button class="button btn btn-success">Reset</button></div>
                    <!-- .stat -->
                    
                    <div class="stat"><h6>LOKET 7</h6><span class="value">30</span> <br> 
                      <button class="button btn btn-success">Aktif</button>
                      <button class="button btn btn-success">Nonaktif</button>
                      <button class="button btn btn-success">Reset</button></div>
                    <!-- .stat -->
                    
                    <div class="stat"><h6>LOKET 8</h6><span class="value">5</span> <br> 
                      <button class="button btn btn-success">Aktif</button>
                      <button class="button btn btn-success">Nonaktif</button>
                      <button class="button btn btn-success">Reset</button></div>

                      <div class="stat"><h6>LOKET 9</h6><span class="value">10</span><br> 
                      <button class="button btn btn-success">Aktif</button>
                      <button class="button btn btn-success">Nonaktif</button>
                      <button class="button btn btn-success">Reset</button></div>
                    <!-- .stat -->
                    
                    <div class="stat"><h6>LOKET 10</h6><span class="value">20</span> <br> 
                      <button class="button btn btn-success">Aktif</button>
                      <button class="button btn btn-success">Nonaktif</button>
                      <button class="button btn btn-success">Reset</button></div>
                    <!-- .stat -->
                    
                    <div class="stat"><h6>LOKET11</h6><span class="value">30</span> <br> 
                      <button class="button btn btn-success">Aktif</button>
                      <button class="button btn btn-success">Nonaktif</button>
                      <button class="button btn btn-success">Reset</button></div>
                    <!-- .stat -->
                    
                    <div class="stat"><h6>LOKET 12</h6><span class="value">5</span> <br> 
                      <button class="button btn btn-success">Aktif</button>
                      <button class="button btn btn-success">Nonaktif</button>
                      <button class="button btn btn-success">Reset</button></div>
              </div>
              </div>


            <!-- menambahkan layanan -->
              <div class="widget-content">
              <div id="big_stats" class="cf">          
              <div class="tabbable">
              <ul class="nav nav-tabs">
              <li  class="active"><a>Layanan</a></li>
              </ul><br>

              <div class="tab-content">
              <div class="tab-pane active" id="jscontrols">
                <form id="edit-profile2" class="form-horizontal">
                <fieldset>
                      <div class="control-group">                     
                      <label class="control-label" for="jenis">Jenis Layanan</label>
                      <div class="controls">
                      <input type="text" class="span4" id="jenis" value="">
                      </div> <!-- /controls -->       
                      </div> <!-- /control-group -->
                
                      <div class="control-group">                      
                      <label class="control-label" for="layanan">Layanan</label>
                      <div class="controls">
                      <input type="text" class="span4" id="layanan" value="">
                      </div> <!-- /controls -->       
                      </div> <!-- /control-group -->                                                          
                      
                      <div class="form-actions">
                      <button class="button btn btn-success">Save</button>
                      <button class="button btn btn-success">Cancel</button>
                      </div> <!-- /form-actions -->
                </fieldset>
                <div class="widget-content">
              
          <table class="table table-striped table-bordered">
            <tr >
              <th>Nomor</th>
              <th>Jenis Layanan</th>
              <th>Layanan</th>
              <th>Aksi</th>
            </tr>
            <?php 
             ?>

             <tr >
              <td><?php echo $data_layanan['id_layanan']; ?></td>
              <td><?php echo $data_layanan['jenis_layanan']; ?></td>
              <td><?php echo $data_layanan['layanan']; ?></td>
              <td class="td-actions" ><a href="javascript:;" class="btn btn-small btn-success"><?php echo base_url($datalayanan->id_layanan); ?>Hapus</a>
                <a href="javascript:;" class="btn btn-success btn-small"><?php echo base_url($datalayanan->id_layanan); ?>Edit</a></td>
            </tr>
                </form>                      
              </div>
            </div>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
