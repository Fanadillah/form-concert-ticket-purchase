
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Pembelian</title>

  <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="wrapper">
  <div class="login-box">
    <form action="proses.php" method="post">
      <img src="Festival-removebg-preview.png" alt="" srcset="">  

      <div class="input-box">
        <span class="icon">
          <ion-icon name="mail"></ion-icon>
        </span>
        <input type="text" name="name" required>
        <label>Name</label>
      </div>

      <div class="input-box">
        <span class="icon">
          <ion-icon name="lock-closed"></ion-icon>
        </span>
        <input type="text" name="email" required>
        <label>Email</label>
      </div>

      <div class="input-box">
        <span class="icon">
          <ion-icon name="lock-closed"></ion-icon>
        </span>
        <input type="number" name="phone" required>
        <label>Phone</label>
      </div>

      <div class="input-box">
        <span class="icon">
          <ion-icon name="lock-closed"></ion-icon>
        </span>
        <input type="number" name="jumlah_tiket" required>
        <label>Jumlah Tiket</label>
      </div>

      <div class="input-box">
        <span class="icon">
        </span>
        <select name="tipe" id="" class="option">
          <option value="">Pilih Tipe Tiket</option>
          <option value="reguler">Reguler</option>
          <option value="vip">VIP</option>
        </select>
      </div>

      <div class="input-box">
        <span class="icon">
        </span>
        <select name="tanggal" id="" class="option">
          <option value="">Tanggal Konser</option>
          <option value="9 Februari 2024">9 Februari 2024</option>
          <option value="10 Februari 2024">10 Februari 2024</option>
        </select>
      </div>
      <div class="input-box">
        <span class="icon">
        </span>
        <select name="metode" id="" class="option">
          <option value="">Metode Pembayaran</option>
          <option value="Transfer Bank">Transfer Bank</option>
          <option value="Gopay">Gopay</option>
          <option value="Dana">Dana</option>
        </select>
      </div>
      <button type="submit">Cek Out</button>
    </form>
  </div>

</div>

 <?php if (isset($_GET['success'])) 
    echo '<script>alert(' . $_GET['success'] . ')</script>';?>
  <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
<script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
</body>
</html>
