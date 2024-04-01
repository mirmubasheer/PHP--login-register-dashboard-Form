<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
  </head>
  <style>
     body {
            font-family: 'Arial', sans-serif;
        }
        .sidebar {
            height: 100vh;
            background-color: #f8f9fa;
        }
.dashboard-header {
    margin-top: 20px;
    margin-bottom: 20px;
}

.dashboard-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
}

.dashboard-card {
    background: #fff;
    border: 1px solid #ddd;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}

.table-dashboard {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
}

.table-dashboard th, .table-dashboard td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.table-dashboard th {
    background-color: #f8f9fa;
}

  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Dashboard <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Customers</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="dashboard-header">
        <h1 class="h2">Dashboard</h1>
        <p>This is a simple dashboard.</p>
    </div>
    <div class="dashboard-cards">
        <div class="dashboard-card">Card 1</div>
        <div class="dashboard-card">Card 2</div>
        <div class="dashboard-card">Card 3</div>
    </div>
    <table class="table-dashboard">
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
            <th>Column 3</th>
        </tr>
        <tr>
            <td>Data 1</td>
            <td>Data 2</td>
            <td>Data 3</td>
        </tr>
        <tr>
            <td>Data 4</td>
            <td>Data 5</td>
            <td>Data 6</td>
        </tr>
    </table>
</main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Adding click event listeners to each dashboard card
    var cards = document.querySelectorAll('.dashboard-card');
    cards.forEach(function(card, index) {
        card.addEventListener('click', function() {
            alert('Card ' + (index + 1) + ' clicked!');
        });
    });

    // Function to add a new row to the table
    function addTableRow(data) {
        var table = document.querySelector('.table-dashboard');
        var newRow = table.insertRow();
        data.forEach(function(cellData) {
            var cell = newRow.insertCell();
            cell.textContent = cellData;
        });
    }

    // Example: Dynamically adding data to the table
    var sampleData = [
        ["Data 7", "Data 8", "Data 9"],
        ["Data 10", "Data 11", "Data 12"]
    ];

    sampleData.forEach(function(rowData) {
        addTableRow(rowData);
    });
});

</script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
  ></script>
</html>
