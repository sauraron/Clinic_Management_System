
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Clinic Admin Dashboard</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<div class="dashboard">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <img src="clinic_logo.png" class="logo">
            <h2>Clinic Admin</h2>
        </div>

        <ul class="menu">
            <li class="active"><i class="fa fa-chart-line"></i> Dashboard</li>
            <li><i class="fa fa-user-injured"></i> Patient Records</li>
            <li><i class="fa fa-pills"></i> Medicine Inventory</li>
            <li><i class="fa fa-calendar-check"></i> Appointments</li>
            <li><i class="fa fa-file-medical"></i> Clinic Reports</li>
            <li><i class="fa fa-users-cog"></i> User Management</li>
        </ul>

        <div class="sidebar-footer">
            <a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
        </div>
    </aside>

    <!-- MAIN -->
    <main class="main">
        <header class="topbar">
            <h1>Clinic Admin Dashboard</h1>
            <div class="admin-info">
                <i class="fa fa-user-circle"></i>
            </div>
        </header>

        <!-- STATS -->
        <section class="cards">
            <div class="card">
                <i class="fa fa-user-injured"></i>
                <h3>Patients</h3>
                <p>120</p>
            </div>

            <div class="card">
                <i class="fa fa-calendar-check"></i>
                <h3>Appointments</h3>
                <p>45</p>
            </div>

            <div class="card">
                <i class="fa fa-pills"></i>
                <h3>Medicines</h3>
                <p>78</p>
            </div>

            <div class="card">
                <i class="fa fa-file-medical"></i>
                <h3>Reports</h3>
                <p>12</p>
            </div>
        </section>

        <!-- TABLE -->
        <section class="table-section">
            <h2>Recent Appointments</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Patient</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>001</td>
                    <td>Juan Dela Cruz</td>
                    <td>2026-03-03</td>
                    <td class="status done">Completed</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Maria Santos</td>
                    <td>2026-03-04</td>
                    <td class="status pending">Pending</td>
                </tr>
            </table>
        </section>

    </main>
</div>

</body>
</html>