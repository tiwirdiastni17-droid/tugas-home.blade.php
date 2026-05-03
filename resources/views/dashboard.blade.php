<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #0f0f0f;
    color: white;
}

/* Navbar */
.navbar {
    background: #1a1a1a;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    box-shadow: 0 0 10px rgba(0,255,200,0.2);
}

.navbar a {
    color: #00ffc8;
    text-decoration: none;
}

/* Content */
.container {
    text-align: center;
    margin-top: 100px;
}

h1 {
    color: #00ffc8;
}

/* Button */
.logout {
    background: red;
    padding: 10px 15px;
    border-radius: 8px;
    color: white;
}
</style>
</head>

<body>

<div class="navbar">
    <div>HMIT Dashboard</div>
    <a href="/logout" class="logout">Logout</a>
</div>

<div class="container">
    <h1>Welcome, {{ session('email') }}</h1>
    <p>Kamu berhasil login menggunakan Session & Cookie 🎉</p>
</div>

</body>
</html>