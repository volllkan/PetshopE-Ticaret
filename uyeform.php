<?php include 'parts/header.php'; ?>

<div class="arka-plan">
    <div class="form-container5">
        <div class="toggle-buttons5">
            <a href="uye-kayit.php"><button id="register-btn5" class="toggle-btn5">Kayit Ol</button></a>
        </div>

        <div id="login-form5" class="form5 active5">
            <h2>Giris Yap</h2>
            <form id="login-form-inner5">
                <label for="login-email5">E-posta:</label>
                <input type="email" id="login-email5" name="email" required>
                <label for="login-password5">Sifre:</label>
                <input type="password" id="login-password5" name="password" required>
                <button type="submit">Giris Yap</button>
            </form>
        </div>

        <div id="register-form5" class="form5">
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