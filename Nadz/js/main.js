let carts = document.querySelectorAll('.add-cart');

let products = [
    { 
    name: 'N-95 Mask',
    tag: 'product1',
    price: 50000,
    inCart: 0
    },
    { 
    name: 'My Sleeping Tea',
    tag: 'product2',
    price: 85000,
    inCart: 0
    },
    { 
    name: 'Panadol Cold and Flu',
    tag: 'product3',
    price: 12000,
    inCart: 0
    },
    { 
    name: 'Bioderma H20',
    tag: 'product4',
    price: 99000,
    inCart: 0
    },
    { 
    name: 'KN95 Mask',
    tag: 'product5',
    price: 20000,
    inCart: 0
    },
    { 
    name: 'Emergen-C Vitamin C',
    tag: 'product6',
    price: 70000,
    inCart: 0
    },
    { 
    name: 'Omega 3 Wow',
    tag: 'product7',
    price: 50000,
    inCart: 0
    },
    { 
    name: 'Family Care: Muscle n Joint',
    tag: 'product8',
    price: 40000,
    inCart: 0
    },
    { 
    name: 'Vichy Mineral 89',
    tag: 'product9',
    price: 150000,
    inCart: 0
    },
    { 
    name: 'Motilium 100',
    tag: 'product10',
    price: 17000,
    inCart: 0
    },
    { 
    name: 'Rexona Black n White',
    tag: 'product11',
    price: 44000,
    inCart: 0
    },
    { 
    name: 'Nestle Cerelac',
    tag: 'product12',
    price: 66000,
    inCart: 0
    }   
];



for(let i=0; i< carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i]);
    });
}

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    if( productNumbers ) {
        document.querySelector('.cart span').textContent = productNumbers;
    }
}

function cartNumbers(product, action) {
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);

    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if( action ) {
        localStorage.setItem("cartNumbers", productNumbers - 1);
        document.querySelector('.cart span').textContent = productNumbers - 1;
    } else if( productNumbers ) {
        localStorage.setItem("cartNumbers", productNumbers + 1);
        document.querySelector('.cart span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem("cartNumbers", 1);
        document.querySelector('.cart span').textContent = 1;
    }
    setItems(product);
}

function setItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if(cartItems != null) {
        let currentProduct = product.tag;
    
        if( cartItems[currentProduct] == undefined ) {
            cartItems = {
                ...cartItems,
                [currentProduct]: product
            }
        } 
        cartItems[currentProduct].inCart += 1;

    } else {
        product.inCart = 1;
        cartItems = { 
            [product.tag]: product
        };
    }

    localStorage.setItem('productsInCart', JSON.stringify(cartItems));
}

function totalCost( product, action ) {
    let cart = localStorage.getItem("totalCost");

    if( action) {
        cart = parseInt(cart);

        localStorage.setItem("totalCost", cart - product.price);
    } else if(cart != null) {
        
        cart = parseInt(cart);
        localStorage.setItem("totalCost", cart + product.price);
    
    } else {
        localStorage.setItem("totalCost", product.price);
    }
}

function displayCart() {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    let cart = localStorage.getItem("totalCost");
    cart = parseInt(cart);

    let productContainer = document.querySelector('.products');
    
    if( cartItems && productContainer ) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map( (item, index) => {
            productContainer.innerHTML += 
            `<div class="product"></ion-icon><img src="./images/${item.tag}.jpg" />
                <span class="sm-hide">${item.name}</span>
            </div>
            <div class="price sm-hide">${item.price}LL</div>
            <div class="quantity">
                 <span>${item.inCart}</span> 
            </div>
            <div class="total">${item.inCart * item.price}LL</div>`;
        });

        productContainer.innerHTML += `
            <div class="basketTotalContainer">
                <h4 class="basketTotalTitle">Basket Total</h4>
                <h4 class="basketTotal">${cart}LL</h4>
            </div>`
    }
}

onLoadCartNumbers();
displayCart();