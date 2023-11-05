 <!-- Form Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Appointment Form</h6>
                            <form action="<?= base_url() ?>index.php/add_appointments" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="appointmentName"
                                    placeholder="">
                                <label for="floatingInput">Name of Owner</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="appointmentPetName"
                                    placeholder="">
                                <label for="floatingInput">Name of Pet</label>
                            </div>
                            <!-- <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div> -->
                            <div class="form-floating mb-3">
                                <select class="form-select" id="vaccine"
                                    aria-label="Floating label select example">
                                    <option value="one">One</option>
                                    <option value="two">Two</option>
                                    <option value="three">Three</option>
                                </select>
                                <label for="vaccine">Vaccine</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="appointmentDate"
                                    placeholder="" value="<?php echo date('Y-m-d'); ?>" required>
                                <label for="floatingInput">Date & Time</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="appointmentContactNumber"
                                    placeholder="">
                                <label for="floatingInput">Contact Number</label>
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
                    