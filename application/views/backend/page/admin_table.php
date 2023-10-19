<div class="container">
  <div class="col-md-12 mx-auto">
    <div class="card">
      <div class="card-header bg-primary text-white">
        <h3 class="card-title text-center">Admin Users</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="thead-light">
              <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th> <!-- New Action Column -->
              </tr>
            </thead>
            <tbody>
              <?php foreach ($adminUsers as $key => $user): ?>
                <tr class="<?php echo $key % 2 === 0 ? 'bg-light' : 'bg-white'; ?>">
                  <td><?php echo $user->admin_id; ?></td>
                  <td><?php echo $user->fullname; ?></td>
                  <td><?php echo $user->email; ?></td>
                  <td><?php echo $user->password; ?></td>
                  <td>
                    <button class="btn btn-primary">Update</button>
                   
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
