<?php include 'parts/header.php'; ?>




<div class="arka-plan">
  <div class="form-container5">
    <div class="toggle-buttons5">
      <a href="uyeform.php"><button id="login-btn5" class="toggle-btn5 active5">Giris Yap</button></a>
      <!-- <button id="register-btn5" class="toggle-btn5">Kayit Ol</button> -->
    </div>

    <div id="register-form5" class="form5 active5">
      <h2>Kayit Ol</h2>
      <form id="register-form-inner5">
        <label for="register-email5">E-posta:</label>
        <input type="email" id="register-email5" name="email" required>
        <label for="register-password5">Sifre:</label>
        <input type="password" id="register-password5" name="password" required>
        <button type="submit">Kayit Ol</button>
      </form>
    </div>
  </div>  
</div>




<?php include 'parts/footer.php'; ?>