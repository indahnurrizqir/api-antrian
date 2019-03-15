<?php include  'header.php'; ?>
   <div class="main">
    <div class="main-inner">
        <div class="container">
          <div class="row">
            <div class="span12">            
                <div class="widget ">
                    <div class="widget-header">
                        <h3> Users</h3>
                    </div> <!-- /widget-header -->
                    <div class="widget-content">
                        <div class="tabbable">
                        <ul class="nav nav-tabs">
                          <li>
                            <a href="#formcontrols" data-toggle="tab">Tambah Transaksi</a>
                          </li>
                          <li  class="active"><a href="#jscontrols" data-toggle="tab">Transaksi</a></li>
                        </ul>  
                        <br>
                        
                            <div class="tab-content">
                                <div class="tab-pane" id="formcontrols">
                                <form id="edit-profile" class="form-horizontal">
                                    <fieldset>
                                                                               
                                        
                                        <div class="control-group">                                         
                                            <label class="control-label" for="nik">NIK</label>
                                            <div class="controls">
                                                <input type="text" class="span5" id="nik" value="">
                                            </div> <!-- /controls -->               
                                        </div> <!-- /control-group -->

                                        <div class="control-group">                                         
                                            <label class="control-label" for="radiobtns">Jenis Layanan</label>
                                            
                                            <div class="controls">
                                              <div class="btn-group">
                                              <a class="btn btn-primary" href="#"> --- Pilih ---</a>
                                              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                              <ul class="dropdown-menu">
                                                <li><a href="#"> Akta Kelahiran</a></li>
                                                <li><a href="#"> Akta Kematian</a></li>
                                              </ul>
                                            </div>
                                              </div>    <!-- /controls -->          
                                        </div> <!-- /control-group -->
                                        
                                        
                                        <div class="control-group">                                         
                                            <label class="control-label" for="nomor">Waktu Ambil</label>
                                            <div class="controls">
                                                <input type="text" class="span5" id="nomor" value="">
                                            </div> <!-- /controls -->               
                                        </div> <!-- /control-group -->

                                                                                <div class="control-group">                                         
                                            <label class="control-label" for="nomor">Waktu Layani</label>
                                            <div class="controls">
                                                <input type="text" class="span5" id="nomor" value="">
                                            </div> <!-- /controls -->               
                                        </div> <!-- /control-group -->                                        
                                                                                <div class="control-group">                                         
                                            <label class="control-label" for="nomor">Nomor Antrian</label>
                                            <div class="controls">
                                                <input type="text" class="span5" id="nomor" value="">
                                            </div> <!-- /controls -->               
                                        </div> <!-- /control-group -->   
                                        
                                         <br />
                                        
                                            
                                        <div class="form-actions">
                      <button class="button btn btn-success">Save</button>
                      <button class="button btn btn-success">Cancel</button>
                                        </div> <!-- /form-actions -->
                                    </fieldset>
                                </form>
                                </div>
                                
                                <div class="tab-pane active" id="jscontrols">
                                    <form id="edit-profile2" class="form-horizontal">
                                        <fieldset>
                                      
                                            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> NIK </th>
                    <th> Jenis Layanan </th>
                    <th> Waktu Ambil</th>
                    <th> Waktu Layani</th>
                    <th> Nomor Antrian</th>
                    <th> Aksi</th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th> 99361718171627 </th>
                    <td> Akta Kelahiran </td>
                    <td> 15:10:30 </td>
                    <td> 16:10:10 </td>
                    <td> 20 </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-trash"> Hapus</i></a><a href="javascript:;" class="btn btn-success btn-small"><i class="btn-icon-only icon-pencil"> Edit</i></a></td>
                  </tr>

                  
                
                </tbody>
              </table>
            </div>
            </div>
            </div> <!-- /controls -->   
            </div> <!-- /control-group -->
            </fieldset>
            </form>
            </div>
            </div>
            </div>
                    </div> <!-- /widget-content -->                 
                </div> <!-- /widget -->             
            </div> <!-- /span8 -->
          </div> <!-- /row -->  
        </div> <!-- /container -->      
    </div> <!-- /main-inner -->  
</div> <!-- /main -->
    
