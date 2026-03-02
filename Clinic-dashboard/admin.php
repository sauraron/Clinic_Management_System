

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>

<!-- FONT AWESOME ICONS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="admin.css">


</head>

<body>

<div class="container">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-logo">
            <img src="img/Logo.jpg" alt="System Logo">
            <div class="system-name">Clinic Admin</div>
        </div>

        <a href="#" class="active">
            <i class="fa-solid fa-gauge"></i>
            Dashboard
        </a>

        <a href="#">
            <i class="fa fa-user-injured"></i>
            Patient Record
        </a>

        <a href="#">
            <i class="fa fa-pills"></i>
            Medicine Inventory
        </a>

        <a href="#">
            <i class="fa fa-calendar-check"></i>
           Appointments
        </a>

        <a href="#">
            <i class="fa fa-file-medical"></i>
            Clinic Reports
        </a>

        <a href="#">
            <i class="fa fa-users-cog"></i>
            User Management
        </a>

        <div class="sidebar-footer">
            <a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main">
        <h2>Admin Dashboard</h2>

        <!-- STATS -->
        <div class="cards">
            <div class="card"><i class="fa fa-user-injured"></i>
                <h3>Patients</h3>
                <p>120</p>
            </div>
            <div class="card"><i class="fa fa-calendar-check"></i>
                <h3>Appointments</h3>
                <p>45</p>
            </div>
            <div class="card"><i class="fa fa-pills"></i>
                <h3>Medicines</h3>
                <p>78</p>
            </div>
            <div class="card"><i class="fa fa-file-medical"></i>
                <h3>Reports</h3>
                <p>12</p>
            </div>
        </div>

        <!-- RECENT TICKETS -->
        <div class="table-box">
            <h3>Patient Record</h3>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Patient</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Juan Etits</td>
                        <td>2025-01-10</td>
                        <td>Pending</td>
                        <td>
                            <a href="#" class="action-btn">View</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</div>

</body>
</html>