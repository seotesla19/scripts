<?php
$videoUrl = isset($_GET['video']) ? urldecode($_GET['video']) : '';
if ($videoUrl == '') {
    die("Video tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Video Player</title>

<style>
    body {
        margin: 0;
        padding: 0;
        background: #0d0d0d;
        color: white;
        font-family: Arial, sans-serif;
        text-align: center;
        overflow-x: hidden;
    }

    /* Container fix pas layar HP */
    .container {
        width: 100%;
        max-width: 450px;
        margin: auto;
        padding: 8px;
    }

    /* Banner responsif */
    .banner img {
        width: 100%;
        height: auto;
        max-height: 120px;
        object-fit: cover;
        border-radius: 28px;
        margin-bottom: 16px;
    }

    /* Kotak video */
    .video-box {
        background: black;
        border-radius: 8px;
        overflow: hidden;
        width: 100%;
    }

    /* Video / iframe selalu proporsi 16:9 */
    video, iframe {
        width: 100%;
        aspect-ratio: 16/9;
        border: none;
        display: block;
    }

    /* Tombol daftar */
.btn-daftar {
    position:absolute;
    bottom:25px;
    left:50%;
    transform:translateX(-50%);
    padding:14px 28px;
    background:#ff0000;
    color:#fff;
    font-size:20px;
    border-radius:10px;
    text-decoration:none;
    font-weight:bold;
    box-shadow:0 0 10px rgba(255,0,0,0.7);
}
.button-gif {
    width: 220px;      /* kamu boleh ubah */
    height: auto;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(29, 133, 191, 0.8);
    transition: 0.2s;
</style>
</head>
<body>

<div class="container">

    <!-- Banner -->
    <div class="banner">
        <a href="https://barges88.net/" target="_blank">
            <img src="new/banner-slotbarges88.gif" alt="Banner Promo">
        </a>
    </div>

    <!-- Video -->
    <div class="video-box">
        <?php
        if (preg_match('/\.(mp4|m3u8)$/i', $videoUrl)) {
            echo "<video controls autoplay>
                    <source src='$videoUrl'>
                  </video>";
        } else {
            echo "<iframe src='$videoUrl' allowfullscreen></iframe>";
        }
        ?>
    </div>
<br>
<br>
<br>
      <!-- ✅ TOMBOL GIF -->
<div class="button-wrapper">
    <a href="https://barges88.net/" target="_blank">
        <img src="new/daftar.gif" 
             class="button-gif" 
             alt="Button GIF">

</div>
<br>
 <!-- Banner -->
    <div class="banner">
        <a href="https://barges88.net/" target="_blank">
            <img src="new/member.gif" alt="Banner Promo">
        </a>
    </div>

</body>
</html>
