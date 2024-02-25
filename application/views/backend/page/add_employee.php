 <!-- Form Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">                  
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Employee</h6>
                            <form action="<?= base_url() ?>index.php/add_employee" method="post">

                            <div class="form-floating mb-3">
                                <input type="" name="employeeName" class="form-control" id="employeeName"
                                    placeholder="">
                                <label for="floatingInput">Fullname</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" name="employeePosition" id="employeePosition"
                                    aria-label="Floating label select example">
                                    <option value="Veterinarian">Veterinarian</option>
                                    <option value="Groomer">Groomer</option>
                                </select>
                                <label for="floatingInput">Position</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="" name="employeeAddress" class="form-control" id="employeeAdress"
                                    placeholder="">
                                <label for="floatingInput">Address</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="" name="employeeAge" class="form-control" id="employeeAge"
                                    placeholder="">
                                <label for="floatingInput">Age</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" name="employeeSex" id="employeeSex"
                                    aria-label="Floating label select example">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <label for="floatingInput">Sex</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="" name="employeePhoneNum" class="form-control" id="employeePhoneNum"
                                    placeholder="">
                                <label for="floatingInput">Phone Number</label>
                            </div>


                            <div class="form-floating mb-3">
                                <select class="form-select" name="employeeStatus" id="employeeStatus"
                                    aria-label="Floating label select example">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                <label for="floatingInput">Status</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="datetime-local" name="employeeAdded" class="form-control" id="employeeAdded" value="<?php echo date('Y-m-d\TH:i'); ?>" required>
                                <label for="floatingInput">Date Added</label>
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
                    