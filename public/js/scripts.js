function addToCart(productName, price) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let product = cart.find(item => item.name === productName);

    if (product) {
        product.quantity += 1;
    } else {
        cart.push({ name: productName, price: price, quantity: 1 });
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    alert(`${productName} добавлен в корзину.`);
}

function loadCart() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let cartItems = document.getElementById('cart-items').querySelector('tbody');
    let totalPrice = 0;

    cartItems.innerHTML = '';

    cart.forEach(item => {
        let row = document.createElement('tr');

        row.innerHTML = `
            <td>${item.name}</td>
            <td>
                <button onclick="updateQuantity('${item.name}', -1)">-</button>
                ${item.quantity}
                <button onclick="updateQuantity('${item.name}', 1)">+</button>
            </td>
            <td>${item.price} руб.</td>
            <td>${item.price * item.quantity} руб.</td>
            <td><button onclick="removeFromCart('${item.name}')">Удалить</button></td>
        `;

        cartItems.appendChild(row);
        totalPrice += item.price * item.quantity;
    });

    document.getElementById('total-price').textContent = totalPrice;
}

function updateQuantity(productName, change) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let product = cart.find(item => item.name === productName);

    if (product) {
        product.quantity += change;

        if (product.quantity <= 0) {
            cart = cart.filter(item => item.name !== productName);
        }
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
}

function removeFromCart(productName) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart = cart.filter(item => item.name !== productName);

    localStorage.setItem('cart', JSON.stringify(cart));
    loadCart();
}

document.addEventListener('DOMContentLoaded', loadCart);


