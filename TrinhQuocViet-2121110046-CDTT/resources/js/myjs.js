// Mảng lưu trữ các sản phẩm
var products = [
    { id: 1, name: 'Nước hoa 1', price: 50 },
    { id: 2, name: 'Nước hoa 2', price: 60 },
    { id: 3, name: 'Nước hoa 3', price: 45 },
    // Thêm các sản phẩm khác vào đây
];

// Mảng lưu trữ giỏ hàng
var cart = [];

// Hàm để hiển thị danh sách sản phẩm
function displayProducts() {
    var productsContainer = document.getElementById('products');
    productsContainer.innerHTML = '';
    
    products.forEach(function(product) {
        var productElement = document.createElement('div');
        productElement.innerHTML = `
            <h3>${product.name}</h3>
            <p>Giá: $${product.price}</p>
            <button onclick="addToCart(${product.id})">Thêm vào giỏ hàng</button>
        `;
        productsContainer.appendChild(productElement);
    });
}

// Hàm để thêm sản phẩm vào giỏ hàng
function addToCart(productId) {
    var product = products.find(function(product) {
        return product.id === productId;
    });

    if (product) {
        cart.push(product);
        displayCart();
    }
}

// Hàm để hiển thị giỏ hàng
function displayCart() {
    var cartContainer = document.getElementById('cart');
    cartContainer.innerHTML = '<h2>Giỏ hàng</h2>';
    
    if (cart.length === 0) {
        cartContainer.innerHTML += '<p>Giỏ hàng trống.</p>';
    } else {
        cart.forEach(function(product) {
            var cartItem = document.createElement('div');
            cartItem.innerHTML = `
                <p>${product.name} - $${product.price}</p>
            `;
            cartContainer.appendChild(cartItem);
        });
    }
}

// Gọi hàm để hiển thị sản phẩm ban đầu và giỏ hàng rỗng
displayProducts();
displayCart();