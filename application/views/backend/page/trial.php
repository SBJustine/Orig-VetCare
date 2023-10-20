
    <!-- Sign Up Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-10 col-md-10 col-lg-8 col-xl-7"> <!-- Adjusted column width for wider form -->
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <div class="card-body">

        <label style="color: red;"><?= $this->session->flashdata('msg_settings_error');?></label>
            <label style="color: green;"><?= $this->session->flashdata('msg_settings');?></label>
            <div class="table-responsive">
        <!-- Your registration form goes here -->
        <form action="<?= base_url() ?>index.php/create_admin" method="post">

            <div class="form-group">
                <label class="control-label">Full Name</label>
                <input name="fullname" class="form-control"  id="fullname" placeholder="Full Name" type="text" required>
                <div class="invalid-feedback">
                    Please enter your full name.
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Email Address" name="client_email" required>
                <div class="invalid-feedback">
                    Please enter an email address.
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Password</label>
                <input name="password" class="form-control" id="password" placeholder="Password" type="password" required>
                <div class="invalid-feedback">
                    Please enter a password.
                </div>
            </div>
        
           
            <!-- Add more registration fields as needed -->

            <div class="modal-footer d-flex">
                <button type="button" class="btn btn-primary custom-button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary custom-button" value="Create">
            </div>
        </form>
    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up End -->


                                            
                      