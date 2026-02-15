const partsData = {
    honda: [
        { name: "Brake Pad", price: 500 },
        { name: "Oil Filter", price: 300 }
    ],
    yamaha: [
        { name: "Chain Kit", price: 1200 },
        { name: "Spark Plug", price: 200 }
    ],
    bajaj: [
        { name: "Clutch Plate", price: 800 },
        { name: "Headlight", price: 600 }
    ],
    tvs: [
        { name: "Air Filter", price: 350 },
        { name: "Brake Cable", price: 250 }
    ]
};

let cart = [];

function showParts(brand) {
    const container = document.getElementById("partsContainer");
    container.innerHTML = "";

    partsData[brand].forEach(part => {
        const card = document.createElement("div");
        card.className = "part-card";
        card.innerHTML = `
            <h3>${part.name}</h3>
            <p>₹${part.price}</p>
            <button onclick="addToCart('${part.name}', ${part.price})">
                Add to Cart
            </button>
        `;
        container.appendChild(card);
    });
}

function addToCart(name, price) {
    cart.push({ name, price });
    alert(name + " added to cart");
}

function loadCart() {
    const cartDiv = document.getElementById("cartItems");
    if (!cartDiv) return;

    if (cart.length === 0) {
        cartDiv.innerHTML = "<p>No items in cart.</p>";
        return;
    }

    let html = "";
    cart.forEach(item => {
        html += `<p>${item.name} - ₹${item.price}</p>`;
    });

    cartDiv.innerHTML = html;
}

window.onload = loadCart;