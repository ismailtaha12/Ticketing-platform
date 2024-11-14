<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TixCarte - Responsive Navigation</title>
    <link rel="stylesheet" href="NavBar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <h1 id="tixcarte">TixCarte</h1>
            </div>
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" placeholder="Search...">
            </div>
            <button class="menu-toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="nav-items">
                <a href="#" class="nav-link">Events</a>
                <a href="#" class="nav-link">Contact & Support</a>
                <label class="toggle-switch">
                    <input type="checkbox" id="theme-toggle">
                    <span class="slider"></span>
                </label>
                <i class="fas fa-user user-icon"></i>
            </div>
        </nav>
    </header>
    <script src="NavBar.js"></script>
</body>
</html>