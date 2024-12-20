<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    
    .table-container {
      margin-top: 30px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
    }

    .table thead th {
      text-transform: uppercase;
      font-size: 0.9rem;
      letter-spacing: 1px;
    }

    .btn-group {
      display: flex;
      justify-content: center;
      gap: 5px;
    }

    .btn-group a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    .add-user {
      display: flex;
      justify-content: flex-end;
      margin-bottom: 15px;
    }

    .footer {
      margin-top: 50px;
      text-align: center;
      font-size: 0.9rem;
      color: #6c757d;
    }

    @media (max-width: 768px) {
      .table-container {
        margin-top: 20px;
        padding: 0;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <!-- Header -->
    <header class="text-center my-4">
      <h1 class="display-6">User Management System</h1>
      <p class="text-muted">View, update, or delete user details with ease</p>
    </header>

    <!-- Add User Button -->
    <div class="add-user">
      <a href="/newuser" class="btn btn-success btn-sm">
        <i class="bi bi-person-plus"></i> Add User
      </a>
    </div>

    <!-- Table Container -->
    <div class="table-container bg-light p-3">
      <table class="table table-hover table-bordered align-middle">
        <thead class="table-primary text-center">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>City</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $id => $user)
          <tr class="text-center">
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->age}}</td>
            <td>{{$user->city}}</td>
            <td>
              <div class="btn-group">
                <!-- View Button -->
                <a href="{{route('view.user', $user->id)}}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                  data-bs-placement="top" title="View User">
                  <i class="bi bi-eye"></i>
                </a>
                <!-- Update Button -->
                <a href="{{route('update.page', $user->id)}}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip"
                  data-bs-placement="top" title="Update User">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <!-- Delete Button -->
                <a href="{{route('delete.user', $user->id)}}" class="btn btn-danger btn-sm" data-bs-toggle="tooltip"
                  data-bs-placement="top" title="Delete User"
                  onclick="return confirm('Are you sure you want to delete this user?');">
                  <i class="bi bi-trash"></i>
                </a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="mt-5">
      {{ $data->links('pagination::bootstrap-5') }}
    </div>

    <!-- Footer -->
    <footer class="footer">
      <p>&copy; 2024 User Management System. All Rights Reserved.</p>
    </footer>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-enn0VICDfeRtVcHEcqKPwFMy3fXcAp8tcZryHjWc6BB4RA26hOIT3R9gLzUOuxVf" crossorigin="anonymous">
  </script>
  <script>
    // Initialize tooltips
    document.addEventListener('DOMContentLoaded', function () {
      const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
      tooltipTriggerList.forEach(function (tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl);
      });
    });
  </script>
</body>

</html>