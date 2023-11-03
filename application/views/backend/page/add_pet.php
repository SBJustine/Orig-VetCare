
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
                <form action="<?= base_url() ?>index.php/add_pet" method="post">

            <div class="form-group">
                <label class="control-label">Name</label>
                <input name="pet_name" class="form-control"  id="pet_name" placeholder="Pet Name" type="text" required>
                <!-- <div class="invalid-feedback">
                    Please enter your full name.
                </div> -->
            </div>
            <div class="form-group">
                <label class="control-label">Breed</label>
                <select name="pet_breed" id="pet_breed" class="form-control" required>
                    <option value="Dobberman">Dobberman</option>
                    <option value="Husky">Husky</option>
                </select>
                <!-- <div class="invalid-feedback">
                    Please select your status.
                </div> -->
            </div>
            <div class="form-group">
                <label class="control-label">Species</label>
                <select name="pet_species" id="pet_species" class="form-control" required>
                    <option value="Dog">Dog</option>
                    <option value="Cat">Cat</option>
                </select>
                <!-- <div class="invalid-feedback">
                    Please select your status.
                </div> -->
            </div>
            <div class="form-group">
                <label class="control-label">Age</label>
                <input name="pet_age" class="form-control"  id="pet_age" placeholder="Age" type="text" required>
                <!-- <div class="invalid-feedback">
                    Please enter your address.
                </div> -->
            </div>
            <div class="form-group">
                <label class="control-label">Gender</label>
                <select name="pet_gender" id="pet_gender" class="form-control" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <!-- <div class="invalid-feedback">
                    Please select your status.
                </div> -->
            </div>
            <div class="form-group">
                <label class="control-label">Color</label>
                <select name="pet_color" id="pet_pet color" class="form-control" required>
                    <option value="Black">Black</option>
                    <option value="White">White</option>
                    <option value="Brown">Brown</option>
                    <option value="Red">Red</option>
                    <option value="Gold">Gold</option>
                    <option value="Blue">Blue</option>
                    <option value="Gray">Gray</option>
                    <option value="Cream">Cream</option>
                    <option value="Yellow">Yellow</option>
                </select>
                <!-- <div class="invalid-feedback">
                    Please select your status.
                </div> -->
            </div>
            

           
            <!-- Add more registration fields as needed -->

            <div class="modal-footer d-flex">
                <style>
                    
                    .btn-maroon {
                        background-color: maroon;
                        color: white;
                    }
                </style>
               
                <input type="submit" class="btn btn-maroon custom-button" value="Create">
            </div>
        </form>
    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up End -->


                                            
                      