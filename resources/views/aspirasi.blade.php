<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Aspirasi</title>

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
    width: 400px;
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

textarea {
    resize: none;
    height: 100px;
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
    <h2>💬 Form Aspirasi</h2>

    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="/aspirasi">
        @csrf

        <input type="text" name="nama" placeholder="Nama (opsional)">
        <input type="text" name="nim" placeholder="NIM (opsional)">

        <select name="kategori">
            <option>Akademik</option>
            <option>Fasilitas</option>
            <option>Organisasi</option>
            <option>Lainnya</option>
        </select>

        <textarea name="isi" placeholder="Tulis aspirasi kamu..." required></textarea>

        <button type="submit">🚀 Kirim</button>
    </form>
</div>

</body>
</html>