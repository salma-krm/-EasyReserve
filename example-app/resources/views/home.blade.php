<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Salles</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f6fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            padding: 50px 20px;
            max-width: 1400px;
        }

        .page-title {
            color: #1a237e;
            font-size: 2.5rem;
            margin-bottom: 40px;
            position: relative;
            padding-bottom: 15px;
        }

        .page-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: #1a237e;
        }

        .rooms-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 30px;
        }

        .room-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .room-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .room-content {
            padding: 25px;
        }

        .room-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .room-title {
            font-size: 1.5rem;
            color: #1a237e;
            margin: 0;
            font-weight: 600;
        }

        .status-badge {
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            background-color: #4caf50;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .room-description {
            color: #546e7a;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 1rem;
        }

        .room-details {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #37474f;
            margin-bottom: 10px;
        }

        .detail-item:last-child {
            margin-bottom: 0;
        }

        .icon {
            width: 20px;
            height: 20px;
            color: #1a237e;
        }

        .reservation-btn {
            display: inline-block;
            width: 100%;
            padding: 12px 20px;
            background: linear-gradient(45deg, #1a237e, #3949ab);
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
        }

        .reservation-btn:hover {
            background: linear-gradient(45deg, #3949ab, #1a237e);
            color: white;
        }

        .modal-content {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            background: #1a237e;
            color: white;
            border-radius: 10px 10px 0 0;
            padding: 20px;
        }

        .modal-title {
            font-weight: 600;
            color: white;
        }

        .modal-body {
            padding: 25px;
        }

        .form-label {
            color: #37474f;
            font-weight: 500;
        }

        .form-control {
            border-radius: 6px;
            padding: 12px;
            border: 1px solid #e0e0e0;
        }

        .form-control:focus {
            border-color: #1a237e;
            box-shadow: 0 0 0 0.2rem rgba(26, 35, 126, 0.25);
        }

        .modal-footer {
            padding: 20px;
            border-top: 1px solid #e0e0e0;
        }

        @media (max-width: 768px) {
            .rooms-container {
                grid-template-columns: 1fr;
            }

            .container {
                padding: 20px 15px;
            }

            .page-title {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="page-title text-center">Nos Salles</h1>
        <div class="rooms-container">
            @foreach($salles as $salle)
            <div class="room-card">
                <img src="{{$salle->photo}}" alt="{{$salle->title}}" class="room-image">
                <div class="room-content">
                    <div class="room-header">
                        <h2 class="room-title">{{$salle->title}}</h2>
                        <span class="status-badge">{{$salle->status}}</span>
                    </div>
                    <p class="room-description">{{$salle->description}}</p>
                    <div class="room-details">
                        <div class="detail-item">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                            <span>Capacité: {{$salle->capacite}} personnes</span>
                        </div>
                        <div class="detail-item">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                            <span>Disponible à partir du: {{$salle->start_date}}</span>
                        </div>
                    </div>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#reservationModal{{$salle->id}}" class="reservation-btn">
                        Réserver maintenant
                    </a>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="reservationModal{{$salle->id}}" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Réservation - {{$salle->title}}</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <form action="/salle/reservation" method="POST">
                            @csrf
                            <div class="modal-body">
                                <input type="hidden" name="salle_id" value="{{$salle->id}}">
                                <div class="mb-4">
                                    <label for="name{{$salle->id}}" class="form-label">Nom de la réservation</label>
                                    <input type="text" class="form-control" id="name{{$salle->id}}" name="name" value="{{$salle->title}}">
                                </div>
                                <div class="mb-4">
                                    <label for="start_date{{$salle->id}}" class="form-label">Date de début</label>
                                    <input type="date" class="form-control" id="start_date{{$salle->id}}" name="date_debut" required>
                                </div>
                                <div class="mb-4">
                                    <label for="end_date{{$salle->id}}" class="form-label">Date de fin</label>
                                    <input type="date" class="form-control" id="end_date{{$salle->id}}" name="date_fine" required>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="reservation-btn" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="reservation-btn">Confirmer la réservation</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>