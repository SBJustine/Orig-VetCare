 <!-- Form Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">                  
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Create Admin</h6>
                            <form action="<?= base_url() ?>index.php/create_admin" method="post">
                            <div class="form-floating mb-3">
                                <input type="" name="fullname" class="form-control" id="fullname"
                                    placeholder="">
                                <label for="floatingInput">Fullname</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="" name="email" class="form-control" id="email"
                                    placeholder="">
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div> 
                            
                            <div class="modal-footer d-flex">
                                <style>
                                    /* Custom CSS to change the button color to maroon */
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
                    
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender Reminder</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    </div>
                    </div>
                    