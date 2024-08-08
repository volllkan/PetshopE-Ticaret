<?php include 'parts/header.php'; ?>

<div class="giris-konteyner1">
    <!-- Üye Girişi Formu -->
    <div id="girisForm1">
        <h2>Üye Girişi</h2>
        <form>
            <input type="email" placeholder="E-posta adresiniz" required>
            <input type="password" placeholder="Şifreniz" required>
            <label>
                <input type="checkbox"> Üyelik koşullarını ve kişisel verilerimin korunmasını kabul ediyorum.
            </label>
            <button type="submit">Giriş Yap</button>
            <div class="link-konteyner1">
                <a href="#" onclick="degistirFormlar1()">Kayıt Ol →</a>
            </div>
        </form>
    </div>

    <!-- Kayıt Ol Formu -->
    <div id="kayitForm1" style="display:none;">
        <h2>Kayıt Ol</h2>
        <form>
            <input type="email" placeholder="E-posta adresiniz" required>
            <input type="password" placeholder="Şifreniz" required>
            <input type="password" placeholder="Şifrenizi tekrar giriniz" required>
            <label>
                <input type="checkbox"> Üyelik koşullarını ve kişisel verilerimin korunmasını kabul ediyorum.
            </label>
            <button type="submit">Kayıt Ol</button>
            <div class="link-konteyner1">
                <a href="#" onclick="degistirFormlar1()">Üye Girişi →</a>
            </div>
        </form>
    </div>
</div>

<style>

  .giris-konteyner1 {
  width: 300px;
  margin: auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="email"], input[type="password"] {
  width: 100%;
  padding: 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type="checkbox"] {
  margin-right: 10px;
}

.link-konteyner1 {
  text-align: center;
  margin-top: 12px;
}

</style>











<?php include 'parts/footer.php'; ?>