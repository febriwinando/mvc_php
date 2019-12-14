<div class="col-sm-8">
      <div class="row mb-3">
            <div class="col-sm-6" style="margin: 0 auto;">
                  <img src="<?= BASEURL;  ?>/icon/logo.png" style="max-width: 100%;">
            </div>
      </div>
      
      <div class="d-flex justify-content-center">
            <ul>
                  <li>
                        <button type="button" class="btn admin-login" data-toggle="modal" data-target="#loginModalCenter">
                              <img src="<?= BASEURL;  ?>/icon/admin.png" width="250">
                        </button><a href="#"></a>
                  </li>
                  <li>
                        <button type="button" class="btn user-login" data-toggle="modal" data-target="#loginModalCenter">
                              <img src="<?= BASEURL;  ?>/icon/user.png" width="250">
                        </button><a href="#"></a>
                  </li>
            </ul>
      </div>
</div>




<div class="modal fade" id="loginModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                  <div class="modal-header">
                        <img src="<?= BASEURL;  ?>/icon/logo1.png" style="max-width: 80px;margin-right: 5px;">
                        <h5 class="modal-title align-middle" id="loginModalLongTitle">MODAL</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <div class="modal-body">
                         <form action="<?= BASEURL;  ?>/home/login" method="post">
                              <input type="hidden" name="id" id="id">
                              <div class="form-group">
                                    <label for="exampleInputPassword1">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
                              </div>
                              <div class="form-group">
                                    <label for="exampleFormControlInput1">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="password" name="password">
                              </div>
                  </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                  </div>
                  </form>
            </div>
      </div>
</div>

           	
