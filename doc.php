<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWOT - Personal Work Off Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .worked-off {
            background-color: #d4edda;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">PWOT - Personal Work Off Tracker</h1>

    <div class="form-container mb-4">
        <form action="index.php" method="post" class="row g-3">
            <div class="col-md-6">
                <label for="arrived_at" class="form-label">Arrived At</label>
                <input type="datetime-local" id="arrived_at" name="arrived_at" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="leaved_at" class="form-label">Leaved At</label>
                <input type="datetime-local" id="leaved_at" name="leaved_at" class="form-control" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>