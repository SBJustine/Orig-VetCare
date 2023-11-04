 <!-- Form Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Appointment Form</h6>
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
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected>Type of Vaccine</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="floatingSelect">Vaccine</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="appointmentPetName"
                                    placeholder="" value="<?php echo date('Y-m-d'); ?>" required>
                                <label for="floatingInput">Date & Time</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="appointmentContactNumber"
                                    placeholder="">
                                <label for="floatingInput">Contact Number</label>
                            </div>
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
                    