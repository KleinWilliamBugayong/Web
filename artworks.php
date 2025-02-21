<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artwork Management - ArtSphere</title>
    <link rel="stylesheet" href="artworks.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo-container">
                <img src="Logo.png" alt="ArtSphere Logo" class="logo">
            </div>
            <div class="sidebar-icons">
                <div class="icon" data-tooltip="Dashboard">
                    <a href="dashboard.php"><i class="fas fa-chart-line"></i></a>
                </div>
                <div class="icon" data-tooltip="Users">
                    <a href="uManagement.php"><i class="fas fa-users"></i></a>
                </div>
                <div class="icon active" data-tooltip="Artworks">
                    <i class="fas fa-palette"></i>
                </div>
                <div class="icon" data-tooltip="Order Transactions">
                    <a href="transactions.php">
                    <i class="fas fa-exchange-alt"></i>
                    </a>
                </div>
                <div class="icon logout-icon" data-tooltip="Logout">
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="content-wrapper">
                <!-- Header -->
                <div class="header">
                    <div class="header-left">
                        <h1>ARTWORK MANAGEMENT</h1>
                    </div>
                    <div class="search-container">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" id="searchInput" placeholder="Search anything..." class="search-input">
                        <button class="search-btn">Search</button>
                    </div>
                    <div class="artwork-stats">
                        <div>Total artworks: 0</div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button class="add-action-btn">+ Action</button>
                    <div class="dropdown">
                        <button class="dropdown-btn">Actions ▼</button>
                        <div class="dropdown-content">
                            <a href="#">Action 1</a>
                            <a href="#">Action 2</a>
                            <a href="#">Action 3</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="filter-btn"><i class="fas fa-filter"></i> Filter ▼</button>
                        <div class="dropdown-content">
                            <a href="#">Filter 1</a>
                            <a href="#">Filter 2</a>
                            <a href="#">Filter 3</a>
                        </div>
                    </div>
                </div>

                <!-- Artworks Table -->
                <div class="artworks-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Artwork Name</th>
                                <th>Artist Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Availability</th>
                                <th>Status</th>
                                <th>Date Listed</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Sample row (you can remove this if you want an empty table) -->
                            <tr>
                                <td><div class="artwork-photo"></div></td>
                                <td>Sample Artwork</td>
                                <td>John Doe</td>
                                <td>Painting</td>
                                <td>$1000</td>
                                <td>Available</td>
                                <td>Active</td>
                                <td>2023-05-01</td>
                                <td>
                                    <button class="edit-btn">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="delete-btn">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Your JavaScript code here (if needed)
    </script>
</body>
</html>