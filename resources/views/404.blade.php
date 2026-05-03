<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>404 - System Lost ⚡</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
    margin: 0;
    background: #050510;
    color: #00fff7;
    font-family: 'Courier New', monospace;
    overflow: hidden;
}

/* grid background */
body::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(#0ff2, transparent 1px),
                linear-gradient(90deg, #0ff2, transparent 1px);
    background-size: 40px 40px;
    animation: gridMove 10s linear infinite;
}

@keyframes gridMove {
    from {transform: translateY(0);}
    to {transform: translateY(40px);}
}

/* container */
.container {
    text-align: center;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
}

/* neon text */
.neon {
    font-size: 120px;
    text-shadow:
        0 0 5px #00fff7,
        0 0 10px #00fff7,
        0 0 20px #00fff7,
        0 0 40px #00fff7;
    animation: flicker 2s infinite;
}

@keyframes flicker {
    0%, 100% {opacity: 1;}
    50% {opacity: 0.7;}
}

/* subtitle */
h2 {
    color: #ff00ff;
    text-shadow: 0 0 10px #ff00ff;
}

/* button */
a {
    display: inline-block;
    margin-top: 25px;
    padding: 12px 30px;
    color: #00fff7;
    border: 2px solid #00fff7;
    border-radius: 30px;
    text-decoration: none;
    transition: 0.3s;
    box-shadow: 0 0 10px #00fff7;
}

a:hover {
    background: #00fff7;
    color: black;
    box-shadow: 0 0 25px #00fff7;
}

/* floating particles */
.particle {
    position: absolute;
    width: 3px;
    height: 3px;
    background: #00fff7;
    animation: float 6s infinite;
}

@keyframes float {
    from {
        transform: translateY(0);
        opacity: 1;
    }
    to {
        transform: translateY(-800px);
        opacity: 0;
    }
}

/* glitch line */
.glitch-line {
    height: 2px;
    width: 100%;
    background: #ff00ff;
    position: absolute;
    top: 40%;
    animation: glitchMove 2s infinite;
}

@keyframes glitchMove {
    0% {top: 20%;}
    50% {top: 60%;}
    100% {top: 20%;}
}
</style>
</head>

<body>

<div class="glitch-line"></div>

<div class="container">
    <div class="neon">404</div>
    <h2>⚠ SYSTEM ERROR 404⚠</h2>
    <p>Halaman tidak ditemukan... kamu keluar dari sistem 😈</p>

    <a href="{{ url('/') }}">⬅ Kembali ke Home</a>
</div>

<script>
// particle neon random
for (let i = 0; i < 80; i++) {
    let p = document.createElement("div");
    p.className = "particle";
    p.style.left = Math.random() * window.innerWidth + "px";
    p.style.top = Math.random() * window.innerHeight + "px";
    p.style.animationDuration = (Math.random() * 5 + 3) + "s";
    document.body.appendChild(p);
}
</script>

</body>
</html>