<!DOCTYPE html>
<html>

<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
 
  <style>
    :root {
      --sidebar-width: 250px;
      --header-height: 60px;
      --primary-color: rgb(67, 7, 172);
      --primary-dark: rgb(87, 96, 101);
      --secondary-color: #f8f9fa;
      --text-color: #2c3e50;
      --hover-color: #e8f5e9;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: #f0f2f5;
    }

    .dashboard {
      display: flex;
      min-height: 100vh;
    }

    /* Enhanced Sidebar Styles */
    .sidebar {
      width: var(--sidebar-width);
      background: white;
      padding: 20px;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
      position: fixed;
      height: 100vh;
      overflow-y: auto;
      border-right: 1px solid #e0e0e0;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      color: var(--primary-color);
      margin-bottom: 30px;
      padding: 10px;
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
      transform: translateX(5px);
    }

    .nav-link i {
      margin-right: 10px;
      font-size: 18px;
    }

    .nav-link.active {
      background-color: var(--primary-color);
      color: white;
    }

    /* Enhanced Search Input */
    .search-container {
      position: relative;
      width: 300px;
    }

    .search-input {
      width: 100%;
      padding: 12px 20px 12px 45px;
      border: 2px solid #e0e0e0;
      border-radius: 25px;
      font-size: 14px;
      transition: all 0.3s ease;
      color: var(--text-color);
      background-color: white;
    }

    .search-input:focus {
      outline: none;
      border-color: var(--success-color);
      box-shadow: 0 0 0 3px rgba(62, 46, 204, 0.2);
    }

    .search-icon {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #999;
      font-size: 18px;
    }

    /* Main Content Styles */
    .main-content {
      flex: 1;
      margin-left: var(--sidebar-width);
      padding: 20px;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
      background: white;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    /* Enhanced Dashboard Cards */
    .dashboard-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-bottom: 30px;
    }

    .card {
      background: white;
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      border-left: 4px solid var(--primary-color);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card-title {
      font-size: 16px;
      color: var(--text-color);
      margin-bottom: 10px;
    }

    .card-value {
      font-size: 28px;
      font-weight: bold;
      color: var(--primary-color);
    }

    /* Enhanced Notification Badge */
    .notification-badge {
      background: #e74c3c;
      color: white;
      padding: 2px 8px;
      border-radius: 12px;
      font-size: 12px;
      margin-left: 8px;
    }

    /* Projects List */
    .projects-list {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .project-card {
      background: white;
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease;
    }

    .project-card:hover {
      transform: translateY(-3px);
    }

    .project-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 15px;
    }

    .project-title {
      font-size: 20px;
      font-weight: bold;
      color: var(--text-color);
    }

    .project-budget {
      font-size: 18px;
      color: var(--primary-color);
      font-weight: bold;
    }

    /* Action Buttons */
    .btn {
      padding: 10px 20px;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
      font-weight: 500;
    }

    .btn-primary {
      background-color: var(--primary-color);
      color: white;
    }

    .btn-primary:hover {
      background-color: var(--primary-dark);
      transform: translateY(-2px);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .sidebar {
        width: 70px;
        padding: 10px;
      }

      .logo {
        font-size: 20px;
        text-align: center;
      }

      .nav-link span {
        display: none;
      }

      .main-content {
        margin-left: 70px;
      }

      .search-container {
        width: 200px;
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
          <a href="/all/salle" class="nav-link">
            <i class="bi bi-briefcase"></i>
            <span>reservation</span>
          </a>
        </div>
        <div class="nav-item">
          <a href="#" class="nav-link">
            <i class="bi bi-bell"></i>
            <span>salle</span>
            <span class="notification-badge">5</span>
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

      <!-- Dashboard Summary Cards -->
      <div class="dashboard-cards">
        <div class="card">
          <div class="card-title">reservation Totaux</div>
          <div class="card-value">24</div>
        </div>
        <div class="card">
          <div class="card-title">salle totaux</div>
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
      
        
        <button  class="header" type="button" ><a href="/createsalle">Ajouter Salle</a></button>
      
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>photo</th>
            <th>capacite</th>
            <th>location</th>
            <th>start_date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($salles as $salle)
          <tr>
            <td>{{$salle->title}}</td>
              
            <td>{{$salle->description}}</td>
            <td>{{$salle->photo}}</td>
            <td>{{$salle->capacite}}</td>
            <td>{{$salle->location}}</td>
            <td>{{$salle->start_date}}</td>
            <td class="text-end">
              <!-- Actions -->
              <button class="btn d-inline-flex btn-sm btn-primary mx-1" type="button"
                data-bs-toggle="modal" data-bs-target="#editModal_">
                <input type="hidden" name="id" value="{{$salle->id}}">
                <span class="pe-2">
                  <a href="/salle/{{$salle->id}}/update">edit</a>
                </span>
              </button>
              <form method="post" action="/salle/{{$salle->id}}/delete" class="d-inline">
                @csrf
                <input type="hidden" name="id" value="{{$salle->id}}">
                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i>delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
     

</body>

</html>