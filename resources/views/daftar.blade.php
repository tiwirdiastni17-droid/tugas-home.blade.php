<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pendaftaran HMIT</title>

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

/* Card */
.container {
    width: 450px;
    padding: 25px;
    border-radius: 15px;
    background: #1a1a1a;
    box-shadow: 0 0 25px rgba(0, 255, 200, 0.2);
    color: white;
}

/* Title */
h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #00ffc8;
}

/* Input */
input, select, textarea {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border-radius: 8px;
    border: none;
    outline: none;
    background: #2a2a2a;
    color: white;
}

::placeholder {
    color: #aaa;
}

/* Button */
button {
    width: 100%;
    padding: 12px;
    border-radius: 10px;
    border: none;
    background: linear-gradient(45deg, #00ffc8, #00bfff);
    color: black;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    transform: scale(1.05);
    box-shadow: 0 0 15px #00ffc8;
}

/* Alert */
.alert {
    background: #00c853;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 10px;
    text-align: center;
    color: white;
}
</style>
</head>

<body>

<div class="container">
    <h2>📝 Pendaftaran Anggota HMIT</h2>

    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="/daftar">
        @csrf

        <input type="text" name="nama" placeholder="Nama Lengkap" required>
        <input type="text" name="nim" placeholder="NIM" required>
        <input type="text" name="prodi" placeholder="Program Studi" required>
        <input type="number" name="angkatan" placeholder="Angkatan" required>
        <input type="text" name="nohp" placeholder="No HP" required>
        <input type="email" name="email" placeholder="Email" required>

        <textarea name="alasan" placeholder="Alasan bergabung dengan HMIT..." required></textarea>

        <button type="submit">🚀 Daftar Sekarang</button>
    </form>
</div>

</body>
</html>