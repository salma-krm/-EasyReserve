<!DOCTYPE html>
<html>

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/app.css">
    <style>
        :root {
            --sidebar-width: 250px;
            --header-height: 60px;
            --primary-color: #1a237e;
            --primary-dark: #1a237e;
            --secondary-color: #f1f1f1;
            --text-color: #343a40;
            --hover-color: #e0f7fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f4f7fb;
            font-size: 16px;
        }

        .status {
            padding: 5px 10px;
            border-radius: 5px;
            color: green;
            font-weight: bold;
        }

        .status.Pending {
            background-color: #f39c12 !important;
        }

        .status.Confirmed {
            background-color: #2ecc71 !important;
        }

        .status.Cancelled {
            background-color: #e74c3c !important;
        }



        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background: #fff;
            box-shadow: 2px 0 8px rgba(0, 0, 0, 0.1);
            position: fixed;
            height: 100vh;
            padding-top: 20px;
            padding-right: 10px;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 20px;
            text-align: center;
        }

        .nav-item {
            margin-bottom: 10px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 12px;
            color: var(--text-color);
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background-color: var(--hover-color);
            color: var(--primary-color);
        }

        .nav-link.active {
            background-color: var(--primary-color);
            color: white;
        }

        .nav-link i {
            margin-right: 10px;
        }

        /* Search Input */
        .search-container {
            position: relative;
            width: 300px;
        }

        .search-input {
            width: 100%;
            padding: 12px 20px;
            border-radius: 25px;
            border: 2px solid #ddd;
            font-size: 14px;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }

        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 20px;
            width: 100%;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-bottom: 30px;
        }

        /* Cards */
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-title {
            font-size: 18px;
            color: var(--text-color);
        }

        .card-value {
            font-size: 28px;
            color: var(--primary-color);
            font-weight: bold;
        }

        /* Table */
        table {
            width: 100%;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            margin-top: 30px;
            overflow: hidden;
        }

        table thead {
            background-color: var(--primary-color);
            color: white;
        }

        table td,
        table th {
            padding: 12px;
            text-align: center;
        }

        /* Button */
        .btn {
            border-radius: 5px;
            padding: 8px 16px;
            font-weight: 500;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
                padding: 10px;
            }

            .logo {
                font-size: 22px;
            }

            .nav-link span {
                display: none;
            }

            .main-content {
                margin-left: 70px;
            }

            .search-container {
                width: 250px;
            }

            .dashboard-cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="dashboard">
        <!-- Sidebar Navigation -->
        <div class="sidebar">
            <div class="logo">Dashboard</div>
            <nav>
                <div class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-house-door"></i>
                        <span>Tableau de bord</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/reservation/show" class="nav-link">
                        <i class="bi bi-briefcase"></i>
                        <span>Réservations</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/salle/show" class="nav-link">
                        <span>Salles</span>
                    </a>
                </div>
            </nav>
        </div>

        <!-- Main Content Area -->
        <div class="main-content">
            <div class="header">
                <h1>Tableau de bord</h1>
                <div class="search-container">
                    <i class="bi bi-search search-icon"></i>
                    <input type="text" class="search-input" placeholder="Rechercher...">
                </div>
            </div>

            <!-- Dashboard Cards -->
            <div class="dashboard-cards">
                <div class="card">
                    <div class="card-title">Réservations Totales</div>
                    <div class="card-value">24</div>
                </div>
                <div class="card">
                    <div class="card-title">Salles Totales</div>
                    <div class="card-value">12</div>
                </div>
                <div class="card">
                    <div class="card-title">Nouveaux Avis</div>
                    <div class="card-value">3</div>
                </div>
                <div class="card">
                    <div class="card-title">Notifications</div>
                    <div class="card-value">5</div>
                </div>
            </div>

            <!-- Reservation Table -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date de Début</th>
                        <th>Date de Fin</th>
                        <th>Nom d'Utilisateur</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                    <tr>
                        <td>{{$reservation->id}}</td>
                        <td>{{$reservation->name}}</td>
                        <td>{{$reservation->date_debut}}</td>
                        <td>{{$reservation->date_fine}}</td>
                        <td>{{$reservation->user->name}}</td>
                        <td class="status {{ $reservation->status }}">
                            {{ $reservation->status }}
                        </td>

                        <td class="text-end">
                            <button class="btn btn-primary btn-sm mx-1">Edit</button>
                            <form method="post" action="" class="d-inline">
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>