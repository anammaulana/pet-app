<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Sistem Management Klinik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* Reset dan layout dasar */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #007bff;
            color: white;
            padding-top: 20px;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
        }

        .sidebar h3 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s, font-size 0.3s;
        }

        .sidebar a i {
            width: 25px;
            text-align: center;
            font-size: 25px;
            margin-right: 20px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: white;
            color: black;
            font-weight: bold;
        }

        /* Main content */
        .main-content {
            flex-grow: 1;
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: white;
            height: 50px;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .navbar .user-info {
            font-weight: bold;
        }

        .navbar a {
            text-decoration: none;
            color: black;
            margin-left: 15px;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .content {
            padding: 20px;
            flex-grow: 1;
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Pet Saver</h3>
        <a href="#" class="#">
            <i class="fas fa-border-all"></i> Dashboard
        </a>
        <a href="#" class="#">
            <i class="fas fa-users"></i> Kategori Hewan
        </a>
        <a href="#" class="#">
            <i class="fas fa-user-md"></i> Hewan
        </a>
        <a href="#" class="#">
            <i class="fas fa-clipboard-list"></i> Shelter & Rescue
        </a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Navbar -->
        <div class="navbar">
            <div class="user-info">
                Hai, {{ Auth::user()->name ?? 'User' }}
        
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" style="background: none; border: none; color: inherit; cursor: pointer;">
                        <i class="fas fa-sign-out-alt" style="margin-right: 5px;"></i> Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Content Section -->
        <div class="content mt-4">
            @yield('content')
        </div>
    </div>
</body>

</html>