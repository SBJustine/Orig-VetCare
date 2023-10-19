
    <!-- Sign Up Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-10 col-md-10 col-lg-8 col-xl-7"> <!-- Adjusted column width for wider form -->
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <div class="card-body">
                <div class="text-center"> <!-- Center only the "REGISTRATION FORM" text -->
        <h2>REGISTER PET</h2>
      </div>

<label style="color: red;"><?= $this->session->flashdata('msg_settings_error');?></label>
    <label style="color: green;"><?= $this->session->flashdata('msg_settings');?></label>
    <div class="table-responsive">
        <!-- Your registration form goes here -->
        <form action="<?= base_url() ?>index.php/add_pet" method="post">

            <div class="form-group">
                <label class="control-label">Name</label>
                <input name="pet_name" class="form-control"  id="pet_name" placeholder="Pet Name" type="text" required>
                <div class="invalid-feedback">
                    Please enter your full name.
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Breed</label>
                <select name="pet_breed" id="pet_breed" class="form-control" required>
                    <option value="dobberman">Dobberman</option>
                    <option value="husky">Husky</option>
                </select>
                <div class="invalid-feedback">
                    Please select your status.
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Species</label>
                <select name="pet_species" id="pet_species" class="form-control" required>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                </select>
                <div class="invalid-feedback">
                    Please select your status.
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Age</label>
                <input name="pet_age" class="form-control"  id="pet_age" placeholder="Age" type="text" required>
                <div class="invalid-feedback">
                    Please enter your address.
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Gender</label>
                <select name="pet_gender" id="pet_gender" class="form-control" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <div class="invalid-feedback">
                    Please select your status.
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Color</label>
                <input name="pet_color" class="form-control"  id="pet_color" placeholder="Color" type="text" required>
                <div class="invalid-feedback">
                    Please enter your address.
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


                                            
                      