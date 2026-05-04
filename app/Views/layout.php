<!DOCTYPE html>
<html>
<head>
    <title>Inventory System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background: #343a40;
            color: white;
            padding: 20px;
        }

        .sidebar a {
            color: white;
            display: block;
            margin: 10px 0;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #495057;
            padding-left: 5px;
        }

        .content {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>

<body>

<div class="sidebar">
    <h4>Inventory</h4>

    <a href="#">Dashboard</a>
    <a href="#">Products</a>
    <a href="#">Categories</a>
    <a href="#">Suppliers</a>

    <?php if(session('role') == 'admin'): ?>
        <a href="#">Reports</a>
        <a href="#">Users</a>
    <?php endif; ?>

    <a href="/logout">Logout</a>
</div>

<div class="content">
    <?= $this->renderSection('content') ?>
</div>

</body>
</html>