let iconCart = document.querySelector('.fa-shopping-cart');
let closeCart = document.querySelector('.close');
let body = document.querySelector('body');
let ListProductHTML = document.querySelector('.ListProduct');
let ListCartHTML = document.querySelector('.ListCart');
let iconCartSpan = document.querySelector('.fa-shopping-cart span');

let ListProducts = [];
let carts = [];

iconCart.addEventListener('click', () => {
    body.classList.toggle('showCart')
})
closeCart.addEventListener('click', () => {
    body.classList.toggle('showCart')
})

const addDataToHTML = () => {
    ListProductHTML.innerHTML = '';
    if(ListProducts.length > 0){
        ListProducts.forEach(product => {
            let newProduct = document.createElement('div');
            newProduct.classList.add('item');
            newProduct.dataset.id = product.id;
            newProduct.innerHTML = `
            <img src="${product.image}" alt="">
                <h2>${product.name}</h2>
                <div class="price">₱${product.price}</div>
                <button class="addCart">
                    Add To Cart
                </button>
                `;
                ListProductHTML.appendChild(newProduct);

        })
    }
}
ListProductHTML.addEventListener('click', (event) => {
    let positionClick = event.target;
    if(positionClick.classList.contains('addCart')){
        let product_id = positionClick.parentElement.dataset.id;
        addToCart(product_id);
    }

})

const addToCart = (product_id) => {
    let positionThisProductInCart = carts.findIndex((value) => value.product_id == product_id);
    if(carts.length <= 0){
        carts = [{
            product_id: product_id,
            quantity: 1
        }]
    }else if(positionThisProductInCart < 0){
        carts.push({
            product_id: product_id,
            quantity: 1
        });
    }else{
        carts[positionThisProductInCart].quantity = carts[positionThisProductInCart].quantity + 1;
        
    }   
    addCartToHTML();
    addCartToMemory();
}
const addCartToMemory = () => {
    localStorage.setItem('cart', JSON.stringify(carts));
} 

const addCartToHTML = () => {
    ListCartHTML.innerHTML = '';
    let totalQuantity = 0;
    if(carts.length > 0){
        carts.forEach(cart => {
            totalQuantity = totalQuantity + cart.quantity;
            let newCart = document.createElement('div');
            newCart.classList.add('item');
            newCart.dataset.id = cart.product_id;
                let positionProduct = ListProducts.findIndex((value) => value.id == cart.product_id);
                let info = ListProducts[positionProduct];
            newCart.innerHTML = `
            <div class="image">
                    <img src="${info.image}" alt="">
                </div>
                <div class="name">
                ${info.name}
                </div>
                <div class="totalPrice">
                     ₱${info.price * cart.quantity}
                </div>
                <div class="quantity">
                    <span class="minus"><</span>
                    <span>${cart.quantity}</span>
                    <span class="plus">></span>
                </div>
                `;
                ListCartHTML.appendChild(newCart);
        })
    }
    iconCartSpan.innerText = totalQuantity;
}

ListCartHTML.addEventListener('click', (event) =>{
    let positionClick = event.target;
    if(positionClick.classList.contains('minus') || positionClick.classList.contains('plus')){
        let product_id = positionClick.parentElement.parentElement.dataset.id;
        let type = 'minus';
        if(positionClick.classList.contains('plus')){
            type = 'plus';
        }
        changeQuantity(product_id, type);
    }
})
const changeQuantity = (product_id, type) => {
    let positionItemInCart = carts.findIndex((value) => value.product_id == product_id);
    if(positionItemInCart >= 0){
        switch (type){
            case 'plus':
                carts[positionItemInCart].quantity = carts[positionItemInCart].quantity + 1;
                break;

                default:
                    let valueChange = carts[positionItemInCart].quantity - 1;
                    if(valueChange > 0){
                        carts[positionItemInCart].quantity = valueChange;
                    }else{
                        carts.splice(positionItemInCart, 1);
                    }
                    break;
        }
    }
    addCartToMemory();
    addCartToHTML();
}
const initApp = () => {
    // get data from json
    fetch('personalcare.json')
    .then(response => response.json())
    .then(data => {
        ListProducts = data;
        addDataToHTML();

        if(LocalStorage.getItem('cart')){
            carts = JSON.parse(LocalStorage.getItem('cart'));
            addCartToHTML(); 
        }

    })

}
initApp();