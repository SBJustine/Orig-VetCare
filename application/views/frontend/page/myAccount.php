        <!-- Content Start -->
        <div class="content" style="background-image: url('<?= base_url();?>assets/img1/gallery/section_bg02.png'); background-size: cover; background-position: center;">
            <!-- Chart Start -->
            <div class="container-fluid pt-4 px-4">
                
            
        <!-- Slider Single -->
        <div class="single-slider d-flex align-items-center slider-height">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8 col-md-10 ">
                        <div class="hero__caption" >
                            <span data-animation="fadeInUp" data-delay=".3s">We help monitor your pet</span>
                            <h1 data-animation="fadeInUp" data-delay=".3s">Welcome to your account!</h1>
                            <!-- <p data-animation="fadeInUp" data-delay=".6s">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna sectetur adipisci.</p> -->
                            <a href="<?= base_url();?>index.php/contact" class="hero-btn" data-animation="fadeInLeft" data-delay=".3s">Appointments<i class="fa fa-arrow-right me-lg-2"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



            
        
                </div>
            </div>
            <!-- Chart End -->

             
                <!-- Sale & Revenue Start 
<div class="container-fluid pt-4 px-4" style= "margin-top:100px; margin-left:250px">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Number of Clients</p>
                                <h6>
                                     <?php
                                     $connection = mysqli_connect("localhost","root","","vaccine");

                                     $query = "SELECT client_id FROM client_users ORDER BY client_id";
                                     $query_run = mysqli_query($connection,$query);
                                     $row = mysqli_num_rows($query_run);

                                     echo '<h1>'.$row.'</h1>';
                                     ?>
                                    
                                    </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Number of Registered Pets</p>
                                <h6>
                                <?php
                                     $connection = mysqli_connect("localhost","root","","vaccine");

                                     $query = "SELECT pet_id FROM pet_users ORDER BY pet_id";
                                     $query_run = mysqli_query($connection,$query);
                                     $row = mysqli_num_rows($query_run);

                                     echo '<h1>'.$row.'</h1>';
                                     ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Appointments</p>
                                <h6>
                                <?php
                                     $connection = mysqli_connect("localhost","root","","vaccine");

                                     $query = "SELECT appointmentId FROM appointments ORDER BY appointmentId";
                                     $query_run = mysqli_query($connection,$query);
                                     $row = mysqli_num_rows($query_run);

                                     echo '<h1>'.$row.'</h1>';
                                     ?>

                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            Sale & Revenue End -->
    