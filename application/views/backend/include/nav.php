<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                
                <a href="<?= base_url();?>index.php/dashboard"><img src="<?= base_url();?>assets/img1/logo/vetlogo.png" alt=""></a> <br /> <br /> <br /> 
              
                
                <div class="navbar-nav w-100">

                <div class="nav-item dropdown" >
                    <a href="<?= base_url();?>index.php/dashboard" class="nav-item nav-link" ><i class="fa fa-tachometer-alt me-2" ></i>Dashboard</a>
                    </div>                   
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Appointments</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="<?= base_url();?>index.php/dashboard" class="dropdown-item">New Appointment</a>
                        <a href="<?= base_url();?>index.php/appointment_list" class="dropdown-item">List of Appointments</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Client</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="<?= base_url();?>index.php/add_client" class="dropdown-item">Add New Client</a>
                        <a href="<?= base_url();?>index.php/client_table" class="dropdown-item">List of Client</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Pet Info</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="<?= base_url();?>index.php/add_pet" class="dropdown-item">New Pet Info</a>
                        <a href="<?= base_url();?>index.php/pet_table" class="dropdown-item">Registered Pets</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Admin Users</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="<?= base_url();?>index.php/create_admin"  class="dropdown-item">Add New Admin</a>
                        <a href="<?= base_url();?>index.php/admin_table"  class="dropdown-item">Admin Users</a>
                    </div>
                </div>
                <a href="<?= base_url();?>index.php/dashboard" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Reports</a>



                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->