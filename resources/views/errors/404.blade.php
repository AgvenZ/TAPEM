<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>404 - Halaman Tidak Ditemukan</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #130909, #000000);
      color: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
      animation: fadeIn 1s ease-in-out;
    }


    .container {
      text-align: center;
    }


    h1 {
      font-size: 8rem;
      margin: 0;
      animation: bounce 1s infinite alternate;
      color: #ff4c60;
    }


    h2 {
      font-size: 2rem;
      margin: 0.5rem 0 1.5rem;
      color: #f7f7f7;
    }


    .btn {
      padding: 12px 25px;
      background-color: #0073ff;
      color: white;
      border: none;
      border-radius: 25px;
      cursor: pointer;
      font-size: 1rem;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }


    .btn:hover {
      background-color: #533483;
      transform: scale(1.05);
    }


    @keyframes bounce {
      from {
        transform: translateY(0);
      }
      to {
        transform: translateY(-10px);
      }
    }


    @keyframes fadeIn {
      from { opacity: 0; }
      to   { opacity: 1; }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>404</h1>
    <h2>Ups! Halaman tidak ditemukan.</h2>
    <button class="btn" onclick="goHome()">Kembali ke Beranda</button>
  </div>


  <script>
    function goHome() {
      window.location.href = '{{ url("/") }}'; // Using Laravel's url helper
    }
  </script>
</body>
</html>
