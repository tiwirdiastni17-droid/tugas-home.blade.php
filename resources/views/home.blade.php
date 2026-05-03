<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HMIT</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial;
}

body {
    height: 100vh;
    background: #0f0f0f;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Container */
.container {
    text-align: center;
    color: white;
}

/* Title */
h1 {
    margin-bottom: 10px;
    color: #00ffc8;
}

p {
    margin-bottom: 30px;
    color: #ccc;
}

/* Button container */
.menu {
    display: flex;
    gap: 20px;
    justify-content: center;
}

/* Button */
a {
    text-decoration: none;
}

.btn {
    padding: 15px 25px;
    border-radius: 12px;
    background: linear-gradient(45deg, #00ffc8, #00bfff);
    color: black;
    font-weight: bold;
    transition: 0.3s;
    display: inline-block;
}

/* Hover effect */
.btn:hover {
    transform: scale(1.1);
    box-shadow: 0 0 20px #00ffc8;
}

/* Card effect */
.card {
    padding: 20px;
    background: #1a1a1a;
    border-radius: 15px;
    box-shadow: 0 0 25px rgba(0,255,200,0.2);
}
</style>
</head>

<body>

<div class="container">
    <div class="card">
        <h1>🚀 HMIT</h1>
        <p>Pilih menu yang ingin kamu akses</p>

        <div class="menu">
            <a href="/aspirasi" class="btn">💬 Aspirasi</a>
            <a href="/daftar" class="btn">📝 Pendaftaran</a>
        </div>
    </div>
</div>

</body>
</html>