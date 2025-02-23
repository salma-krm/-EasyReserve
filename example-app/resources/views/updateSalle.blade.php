<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f0f2f5;
            min-height: 100vh;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 700px;
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-header h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #444;
            font-weight: 500;
            font-size: 14px;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e1e1e1;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        input:focus,
        textarea:focus {
            border-color: #4a90e2;
            outline: none;
            background: white;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .submit-btn {
            background: #4a90e2;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s ease;
        }

        .submit-btn:hover {
            background: #357abd;
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .form-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <h2>edit Salle</h2>
        </div>
        <form method="post" action="/salle/edit">
        @csrf
            <div class="form-grid">
            <input type="hidden" name="id" value="{{$salle->id}}">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title"  value ="{{$salle->title}}">
                </div>

                <div class="form-group">
                    <label>Photo</label>
                    <input name="photo" type="text" value ="{{$salle->photo}}" >
                </div>

                <div class="form-group">
                    <label>Location</label>
                    <input name="location" type="text" value ="{{$salle->location}}">
                </div>

                <div class="form-group">
                    <label>Capacité</label>
                    <input name="capacite" type="number"value ="{{$salle->capacite}}">
                </div>

                <div class="form-group">
                    <label>Date de début</label>
                    <input name="start_date" type="date" value ="{{$salle->start_date}}">
                </div>
                <div class="form-group full-width">
                    <label>status</label>
                    <input name="status" type="text"value ="{{$salle->status}}">
                </div>
                
                <div class="form-group full-width">
                    <label>Description</label>
                    <input type="text" name="description" value ="{{$salle->description}}">
                </div>
               

                <div class="form-group full-width">
                    <button type="submit" class="submit-btn">edit Salle</button>
                </div>
            </div>
           
        </form>
    </div>
</body>
</html>