/**
 * Funcionalidad para la landing page inspirada en Inspire Uplift con Carrito de WhatsApp
 */

let cart = [];

// 1. Cambio de imágenes de la galería
function changeImage(thumbnail) {
    const mainImg = document.getElementById('main-product-img');
    mainImg.style.opacity = '0';
    
    setTimeout(() => {
        mainImg.src = thumbnail.src;
        mainImg.style.opacity = '1';
    }, 150);

    const thumbnails = document.querySelectorAll('.thumbnails img');
    thumbnails.forEach(img => img.classList.remove('active'));
    thumbnail.classList.add('active');
}

// 2. Selector de Cantidad
function updateQty(change) {
    const qtyInput = document.getElementById('quantity');
    let currentQty = parseInt(qtyInput.value);
    currentQty += change;
    
    if (currentQty < 1) currentQty = 1;
    qtyInput.value = currentQty;
}

// 3. Selección de Variantes
const characterData = {
    'Naruto': {
        img: 'imagenes/descarga.avif',
        title: 'Naruto Uzumaki - Beast Party Plush Blind Box'
    },
    'Sasuke': {
        img: 'imagenes/descarga (4).avif',
        title: 'Sasuke Uchiha - Beast Party Plush Blind Box'
    },
    'Kakashi': {
        img: 'imagenes/descarga (5).avif',
        title: 'Kakashi Hatake - Beast Party Plush Blind Box'
    },
    'Kurama': {
        img: 'imagenes/descarga (1).avif',
        title: 'Kurama (Nine-Tails) - Beast Party Plush Blind Box'
    },
    'Sakura': {
        img: 'imagenes/descarga (2).avif',
        title: 'Sakura Haruno - Beast Party Plush Blind Box'
    },
    'Itachi': {
        img: 'imagenes/descarga (3).avif',
        title: 'Itachi Uchiha - Beast Party Plush Blind Box'
    },
    'Aleatorio (Surprise)': {
        img: 'imagenes/descarga (3).avif',
        title: 'Random Mystery - Beast Party Plush Blind Box'
    }
};

function selectVariant(chip) {
    const chips = document.querySelectorAll('.chip');
    chips.forEach(c => c.classList.remove('active'));
    chip.classList.add('active');
    
    const characterName = chip.textContent.trim();
    const data = characterData[characterName];
    
    if (data) {
        const mainImg = document.getElementById('main-product-img');
        const productTitle = document.getElementById('product-title');
        
        mainImg.style.opacity = '0';
        productTitle.style.opacity = '0.5';
        
        setTimeout(() => {
            mainImg.src = data.img;
            productTitle.textContent = data.title;
            mainImg.style.opacity = '1';
            productTitle.style.opacity = '1';
        }, 200);

        const thumbnails = document.querySelectorAll('.thumbnails img');
        thumbnails.forEach(thumb => {
            if (thumb.getAttribute('src') === data.img) {
                thumbnails.forEach(t => t.classList.remove('active'));
                thumb.classList.add('active');
            }
        });
    }
}

// 4. Sistema de Pestañas (Tabs)
function openTab(evt, tabName) {
    const tabContents = document.querySelectorAll('.tab-content');
    tabContents.forEach(content => content.classList.remove('active'));

    const tabLinks = document.querySelectorAll('.tab-link');
    tabLinks.forEach(link => link.classList.remove('active'));

    document.getElementById(tabName).classList.add('active');
    evt.currentTarget.classList.add('active');
}

// 5. Gestión del Carrito
function toggleCart() {
    document.getElementById('cart-sidebar').classList.toggle('active');
    document.getElementById('cart-overlay').classList.toggle('active');
}

function handleAddToCart() {
    const activeChip = document.querySelector('.chip.active');
    const characterName = activeChip ? activeChip.textContent.trim() : 'Naruto';
    const quantity = parseInt(document.getElementById('quantity').value);
    const price = 14.97;
    const img = characterData[characterName] ? characterData[characterName].img : 'imagenes/descarga.avif';
    const title = characterData[characterName] ? characterData[characterName].title : 'Naruto Plush';

    // Buscar si el item ya existe
    const existingItem = cart.find(item => item.name === characterName);
    
    if (existingItem) {
        existingItem.quantity += quantity;
    } else {
        cart.push({
            name: characterName,
            title: title,
            quantity: quantity,
            price: price,
            img: img
        });
    }

    updateCartUI();
    toggleCart(); // Abrir el carrito automáticamente al añadir
}

function updateCartUI() {
    const container = document.getElementById('cart-items-container');
    const badge = document.getElementById('cart-badge');
    const subtotalEl = document.getElementById('cart-subtotal');
    
    let totalItems = 0;
    let subtotal = 0;
    
    if (cart.length === 0) {
        container.innerHTML = '<div class="empty-cart-msg">Tu carrito está vacío</div>';
    } else {
        container.innerHTML = '';
        cart.forEach((item, index) => {
            totalItems += item.quantity;
            subtotal += item.price * item.quantity;
            
            container.innerHTML += `
                <div class="cart-item">
                    <img src="${item.img}" alt="${item.name}">
                    <div class="cart-item-info">
                        <h4>${item.title}</h4>
                        <p>Cant: ${item.quantity}</p>
                        <span class="cart-item-price">$${(item.price * item.quantity).toFixed(2)}</span>
                    </div>
                    <button class="remove-item" onclick="removeFromCart(${index})" style="background:none;border:none;color:#999;cursor:pointer;">&times;</button>
                </div>
            `;
        });
    }
    
    badge.textContent = totalItems;
    subtotalEl.textContent = `$${subtotal.toFixed(2)}`;
}

function removeFromCart(index) {
    cart.splice(index, 1);
    updateCartUI();
}

function handleBuyNow() {
    handleAddToCart();
}

// 6. Pedido por WhatsApp
function sendWhatsAppOrder() {
    if (cart.length === 0) {
        alert("Tu carrito está vacío");
        return;
    }

    const phoneNumber = "593987040806";
    let subtotal = 0;
    let message = "🚀 *NUEVO PEDIDO - NICKY SHOP*\n\n";
    message += "Hola, me gustaría realizar un pedido de los siguientes productos:\n\n";

    cart.forEach(item => {
        const total = item.price * item.quantity;
        subtotal += total;
        message += `✅ *${item.title}*\n`;
        message += `   Cantidad: ${item.quantity}\n`;
        message += `   Subtotal: $${total.toFixed(2)}\n\n`;
    });

    message += `💰 *Subtotal Productos:* $${subtotal.toFixed(2)}\n`;
    message += `📍 *Nota:* Consultar costo de envío (Quito $3 / Provincias $6)\n\n`;
    message += "Quedo atento a su confirmación. ¡Gracias!";

    const encodedMessage = encodeURIComponent(message);
    const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;
    
    window.open(whatsappURL, '_blank');
}

// 7. Temporizador
function startCountdown(duration, display) {
    let timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        display.textContent = minutes + ":" + seconds;
        if (--timer < 0) timer = duration;
    }, 1000);
}

// 8. Animaciones al Scroll
function handleScrollAnimation() {
    const reveals = document.querySelectorAll('.reveal');
    reveals.forEach(el => {
        const windowHeight = window.innerHeight;
        const revealTop = el.getBoundingClientRect().top;
        const revealPoint = 150;

        if (revealTop < windowHeight - revealPoint) {
            el.classList.add('active');
        }
    });
}

// Inicialización
document.addEventListener('DOMContentLoaded', () => {
    const display = document.querySelector('#countdown');
    if (display) startCountdown(599, display);

    // Iniciar animaciones de scroll
    window.addEventListener('scroll', handleScrollAnimation);
    handleScrollAnimation(); // Ejecutar una vez al cargar
});
