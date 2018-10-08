          <div class="container">
               <div class="row">
                    <div class="col-md-10 offset-md-1">
                         <div class="login-page">
                              <div class="left-side-login">
                                   <center>
                                        <div><img src="<?php echo base_url('assets/images/logo.png'); ?>" /></div>
                                        <div><span>COMPANY NAME</span></div>
                                        <div><span>HOME HEALTH CARE</span></div>
                                        <div><span>The Heart of Serivice that</span></div>
                                        <div><span>Is Only for You</span></div>
                                        <div>
                                             <span>
                                                  This space is reserved for more details about the company. Additional business details will be uploaded on this website soon.
                                             </span>
                                        </div>
                                   </center>
                              </div>
                              <div class="right-side-login">
                                   <form method="post" action="<?php echo base_url('auth') ?>">
                                        <div>
                                             <?php if(isset($message)): ?>
                                                  <div class="alert alert-<?php echo $message['type'];?>">
                                                       <?php echo $message['msg'];?>
                                                  </div>
                                             <?php endif; ?>
                                        </div>
                                        <div>
                                             <div>
                                                  <span>Login</span> / <span>Sign up</span>
                                             </div>
                                             <div>

                                                  <div class="form-group">

                                                       <label>Username: </label>

                                                       <input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>"/>
                                                       <div class="<?php echo form_error('username') ? 'invalid-feedback' : ''; ?>">
                                                            <?php echo form_error('username'); ?>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div>
                                                  <div class="form-group">
                                                       <label>Password: </label>
                                                       <input type="password" class="form-control" name="password"/>
                                                  </div>
                                             </div>
                                             <div>
                                                  <div class="form-group">
                                                       <a href="">Forgot password</a>
                                                  </div>
                                             </div>
                                             <div>
                                                  <div class="form-group">
                                                       <button class="btn btn-primary btn-outline-primary">Login</button>
                                                  </div>
                                             </div>
                                        </div>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
