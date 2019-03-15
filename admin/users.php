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
						    <a href="#formcontrols" data-toggle="tab">Tambah Akun</a>
						  </li>
						  <li  class="active"><a href="#jscontrols" data-toggle="tab">Akun</a></li>
						</ul>				
						<br>
						
							<div class="tab-content">
								<div class="tab-pane" id="formcontrols">
								<form id="edit-profile" class="form-horizontal">
									<fieldset>
										
										<div class="control-group">											
											<label class="control-label" for="nama">Nama</label>
											<div class="controls">
												<input type="text" class="span5" id="nama" value="">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="nik">NIK</label>
											<div class="controls">
												<input type="text" class="span5" id="nik" value="">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="nomor">Nomor</label>
											<div class="controls">
												<input type="text" class="span5" id="nomor" value="">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="password">Password</label>
											<div class="controls">
												<input type="password" class="span5" id="password" value="">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

                                        <div class="control-group">											
											<label class="control-label" for="radiobtns">Pengguna</label>
											
                                            <div class="controls">
                                              <div class="btn-group">
                                              <a class="btn btn-primary" href="#"> --- Pilih ---</a>
                                              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                              <ul class="dropdown-menu">
                                                <li><a href="#"> Admin</a></li>
                                                <li><a href="#"> CS</a></li>
                                              </ul>
                                            </div>
                                              </div>	<!-- /controls -->			
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
                  	<th> Nomor </th>
                    <th> Nama </th>
                    <th> Nik</th>
                    <th> Nomor</th>
                    <th> Status</th>
                    <th> Aksi</th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  	<th> 1 </th>
                    <td> Indah Nur Rizqi Rahmadani </td>
                    <td> 99108293617181 </td>
                    <td> 082332564695 </td>
                    <td> Admin </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success">Hapus</a><a href="javascript:;" class="btn btn-success btn-small">Edit</a></td>
                  </tr>
                  <tr>
                  	<th> 2 </th>
                    <td> Isro'ain Dwi Octaviani </td>
                    <td> 99182047289382 </td>
                    <td> 082332564695 </td>
                    <td> CS </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success">Hapus</a><a href="javascript:;" class="btn btn-success btn-small">Edit</a></td>
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
    
    
    
 
