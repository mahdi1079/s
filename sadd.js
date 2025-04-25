// cart.js

let cart = [];

// بارگذاری سبد از localStorage
function loadCart() {
  const data = localStorage.getItem('cart');
  if (data) {
    cart = JSON.parse(data);
  }
}

// ذخیره‌سازی سبد در localStorage
function saveCart() {
  localStorage.setItem('cart', JSON.stringify(cart));
}

// افزودن محصول به سبد
function addToCart(name, price, id) {
  const existing = cart.find(item => item.id === id);
  if (existing) {
    existing.quantity += 1;
  } else {
    cart.push({ id, name, price, quantity: 1 });
  }

  saveCart();
  updateCartUI(); // این تابع رو باید خودت بنویسی برای نمایش سبد
}

// گرفتن کل سبد
function getCart() {
  return cart;
}

// گرفتن مجموع قیمت
function getTotalPrice() {
  return cart.reduce((total, item) => total + item.price * item.quantity, 0);
}

// حذف کالا از سبد
function removeFromCart(id) {
  cart = cart.filter(item => item.id !== id);
  saveCart();
  updateCartUI();
}
