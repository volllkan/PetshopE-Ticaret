<div class="sidebar-menu-wrapper">
    <div class="cart_sidebar">
        <button type="button" class="close_btn"><i class="fas fa-times"></i></button>
        <h2 class="heading_title text-uppercase">Sepet Ürünleri - <span id="cartItemCount">4</span></h2>

        <div class="cart_items_list" id="cartItemsList">
            <div class="cart_item">
                <div class="item_image">
                    <img src="assets/images/main-thumb/collection-thumb.jpeg" alt="resim_bulunamadı">
                </div>
                <div class="item_content">
                    <h4 class="item_title">Lezzetli Kedi Maması</h4>
                    <span class="item_price">₺19.00</span>
                    <button type="button" class="remove_btn"><i class="fas fa-times"></i></button>
                </div>
            </div>

            <div class="cart_item">
                <div class="item_image">
                    <img src="assets/images/main-thumb/collection-thumb2.jpeg" alt="resim_bulunamadı">
                </div>
                <div class="item_content">
                    <h4 class="item_title">Köpek Oyuncak Seti</h4>
                    <span class="item_price">₺19.00</span>
                    <button type="button" class="remove_btn"><i class="fas fa-times"></i></button>
                </div>
            </div>

            <div class="cart_item">
                <div class="item_image">
                    <img src="assets/images/main-thumb/collection-thumb3.jpeg" alt="resim_bulunamadı">
                </div>
                <div class="item_content">
                    <h4 class="item_title">Taze Balık Yemi</h4>
                    <span class="item_price">₺19.00</span>
                    <button type="button" class="remove_btn"><i class="fas fa-times"></i></button>
                </div>
            </div>

            <div class="cart_item">
                <div class="item_image">
                    <img src="assets/images/main-thumb/collection-thumb4.jpeg" alt="resim_bulunamadı">
                </div>
                <div class="item_content">
                    <h4 class="item_title">Konforlu Kedi Yatağı</h4>
                    <span class="item_price">₺19.00</span>
                    <button type="button" class="remove_btn"><i class="fas fa-times"></i></button>
                </div>
            </div>
        </div>
        <div class="total_price text-uppercase">
            <span>Ara Toplam:</span>
            <span id="cartTotalPrice">₺76.00</span>
        </div>
        <ul class="btns_group ul_li">
            <li><a href="cart.php" class="btn btn_primary text-uppercase">Sepeti Görüntüle</a></li>
            <li><a href="checkout.php" class="btn btn_border border_black text-uppercase">Ödeme Yap</a></li>
        </ul>
    </div>
    <div class="cart_sidebar_overlay"></div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const removeButtons = document.querySelectorAll('.remove_btn');
        const cartItemCountElement = document.getElementById('cartItemCount');
        const cartTotalPriceElement = document.getElementById('cartTotalPrice');

        let cartItemCount = parseInt(cartItemCountElement.textContent);

        function updateTotalPrice() {
            const cartItems = document.querySelectorAll('.cart_item');
            let totalPrice = 0;

            cartItems.forEach(item => {
                const itemPriceElement = item.querySelector('.item_price');
                const itemPrice = parseFloat(itemPriceElement.textContent.replace('₺', ''));
                totalPrice += itemPrice;
            });

            cartTotalPriceElement.textContent = `₺${totalPrice.toFixed(2)}`;
        }

        removeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const cartItem = this.closest('.cart_item');

                // Remove the cart item from the DOM
                cartItem.remove();

                // Update the cart item count
                cartItemCount--;
                cartItemCountElement.textContent = cartItemCount;

                // Update the subtotal price
                updateTotalPrice();
            });
        });
    });
</script>
