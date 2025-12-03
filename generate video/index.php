<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<?php
// index.php

if (isset($_GET['link']) && !empty($_GET['link'])) {
    $url = urlencode($_GET['link']);
    header("Location: video.php?video=$url");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Generate Video</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #1e1e2f, #3b3b98);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        overflow: hidden;
    }

    @keyframes fadeSlide {
        0% { opacity: 0; transform: translateY(40px) scale(0.95); }
        100% { opacity: 1; transform: translateY(0) scale(1); }
    }

    .container {
        background: rgba(255, 255, 255, 0.1);
        padding: 30px 25px;
        width: 90%;
        max-width: 400px;
        border-radius: 15px;
        box-shadow: 0px 0px 15px rgba(0,0,0,0.3);
        backdrop-filter: blur(6px);
        text-align: center;
        animation: fadeSlide 0.8s ease-out forwards;
    }

    .logo {
        width: 130px;
        height: 130px;
        margin: 0 auto 15px auto;
        display: block;
        border-radius: 50%;
        object-fit: contain;
    }

    .title {
        font-size: 24px;
        margin-bottom: 15px;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 14px;
        border-radius: 10px;
        border: none;
        outline: none;
        font-size: 16px;
        margin-top: 10px;
        box-sizing: border-box;
        text-align: center;
    }

    button {
        margin-top: 18px;
        width: 100%;
        padding: 14px;
        background: #ff4747;
        color: white;
        border: none;
        border-radius: 10px;
        font-size: 17px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.25s;
    }

    button:hover {
        background: #ff1e1e;
    }

</style>
</head>
<body>

<div class="container">
    <img src="https://i.imgur.com/Wwfw3qV.png" alt="Logo" class="logo">
    <div class="title">Generate Video Anda</div>

    <form method="GET">
        <input 
            type="text" 
            name="link" 
            placeholder="Masukkan link video apa saja..."
            required
        >
        <button type="submit">Buka Video</button>
    </form>
</div>

</body>
</html>
