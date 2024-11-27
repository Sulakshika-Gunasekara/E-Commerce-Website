//products items data
const ladiesWear = [
    {
        "title": "Off-Shoulder Blouse for Women ",
        "discription": "",
        "price": 4.25,
        "image": "Images/b1.jpg",
        "rating": 4,
        "hasSize": true,
        "numOfItems": 1
    },
    {
        "title": "Womeen Sleeveless Top",
        "discription": "",
        "price": 1.5,
        "image": "Images/b2.jpg",
        "rating": 5,
        "hasSize": false,
        "numOfItems": 1
    },
    {
        "title": "Black Silk Satin Blouse",
        "discription": "",
        "price": 12,
        "image": "Images/b3.jpg",
        "rating": 3,
        "hasSize": false,
        "numOfItems": 1
    },
    {
        "title": "Dark Blue Lace-up Flare Sleeve Blouse",
        "discription": "",
        "price": 15.5,
        "image": "Images/b4.jpg",
        "rating": 5,
        "hasSize": true,
        "numOfItems": 1
    },
    {
        "title": "Long Sleeve Light Green Blouse",
        "discription": "",
        "price": 30.45,
        "image": "Images/b5.jpg",
        "rating": 5,
        "hasSize": false,
        "numOfItems": 1
    },
    {
        "title": "Long Sleeve Light Pink Blouse for Women",
        "discription": "",
        "price": 5.40,
        "image": "Images/b6.jpg",
        "rating": 2,
        "hasSize": false,
        "numOfItems": 1
    },
    {
        "title": "Tiered Chiffon Blouse ",
        "discription": "",
        "price": 18.25,
        "image": "Images/b7.jpg",
        "rating": 4,
        "hasSize": true,
        "numOfItems": 1
    },
    {
        "title": "Light Pink Blouse for Women",
        "discription": "",
        "price": 3,
        "image": "Images/b8.jpg",
        "rating": 5,
        "hasSize": false,
        "numOfItems": 1
    },
    
]

const mensWear = [
    {
        "title": "Men's Short Sleeve Light Weight T Shirt",
        "discription": "",
        "price": 4.25,
        "image": "Images/m1.jpg",
        "rating": 4,
        "hasSize": true,
        "numOfItems": 1
    },
    {
        "title": "Silk Shirt in Blue for Men",
        "discription": "",
        "price": 18.28,
        "image": "Images/m2.jpg",
        "rating": 5,
        "hasSize": true,
        "numOfItems": 1
    },
    {
        "title": "Bottom Neck Black T Shirt for Men",
        "discription": "",
        "price": 12.325,
        "image": "Images/m3.jpg",
        "rating": 5,
        "hasSize": true,
        "numOfItems": 1
    },
    {
        "title": "Orange Colour Men's T Shirt",
        "discription": "",
        "price": 22,
        "image": "Images/m4.jpg",
        "rating": 4,
        "hasSize": true,
        "numOfItems": 1
    },
    
]

const shoes = [
    {
        "title": "Men's Sports Shoes",
        "discription": "",
        "price": 24,
        "image": "Images/s1.jpg",
        "rating": 4,
        "hasSize": false,
        "numOfItems": 1
    },
    {
        "title": "Women's Running Shoes",
        "discription": "",
        "price": 18,
        "image": "Images/s2.jpg",
        "rating": 4,
        "hasSize": false,
        "numOfItems": 1
    },
    {
        "title": "Boy's Print Athletic Shoes",
        "discription": " ",
        "price": 4,
        "image": "Images/s3.jpg",
        "rating": 4,
        "hasSize": false,
        "numOfItems": 1
    },
    {
        "title": "Women's Ash Colour Sport Shoes",
        "discription":"",
        "price": 14.5,
        "image": "Images/s4.jpg",
        "rating": 4,
        "hasSize": false,
        "numOfItems": 1
    },
    {
        "title": "Men's Blue Sport Shoes",
        "discription": "",
        "price": 24,
        "image": "Images/s5.jpg",
        "rating": 5,
        "hasSize": false,
        "numOfItems": 1
    },
];

const hairBands = [{
    "title": " Rib Knot Headbands ",
    "discription": "",
    "price": 50,
    "image": "Images/h1.jpg",
    "rating": 5,
    "hasSize": false,
    "numOfItems": 1
},
{
    "title": "Wide Hairband",
    "discription": "",
    "price": 15,
    "image": "Images/h2.jpg",
    "rating": 5,
    "hasSize": false,
    "numOfItems": 1
},
{
    "title": "Women Big Hair Clips",
    "discription": "",
    "price": 50,
    "image": "Images/h3.jpg",
    "rating": 5,
    "hasSize": false,
    "numOfItems": 1
},
{
    "title": "Women Side Clip",
    "discription": "",
    "price": 50,
    "image": "Images/h4.jpg",
    "rating": 3,
    "hasSize": false,
    "numOfItems": 1
},
{
    "title": "Silk Hair Bands",
    "discription": "",
    "price": 50,
    "image": "Images/h5.jpg",
    "rating": 5,
    "hasSize": false,
    "numOfItems": 1
},
];





//array for store shopping cart items
const shoppingCartItems = [];

//keep data of shoppinCart number of items and total
const cartDetails = {
    "items": 0,
    "total": 0
};

//selected category
const pageDetails = {
    "selectedPage": 0
}

//set cartDetails to initial value
function initialize() {
    cartDetails.items = 0;
    cartDetails.total = 0;
}

const items = document.querySelector("#items");
const cardHeader = document.querySelector(".header");
const removeAllBtn = document.querySelector(".action");
const numOfItems = document.querySelector(".items");
const totAmount = document.querySelector(".total-amont");


// load data to the page
function loadData(array) {
    array.forEach(function (iterator, i) {
        //load items
        const item = document.createElement("div");
        item.classList.add("item");

        const overlay = document.createElement("div");
        overlay.classList.add("overlay");

        const btnAdd = document.createElement("button");
        btnAdd.classList.add("add");
        btnAdd.innerHTML = `<i class="fa fa-cart-plus"></i>`;

        btnAdd.addEventListener("click", function () {
            const index = shoppingCartItems.findIndex(object => object.title === iterator.title);
            if (index === -1) {
                shoppingCartItems.push(iterator);
            }
        });

        const ratingBar = document.createElement("div");
        ratingBar.classList.add("rating");
        for (let index = 1; index < 6; index++) {
            const ratings = iterator.rating;
            if (index <= ratings) {
                const star = document.createElement("span");
                star.classList.add("fa", "fa-star", "checked");
                ratingBar.appendChild(star);
            } else {
                const star = document.createElement("span");
                star.classList.add("fa", "fa-star");
                ratingBar.appendChild(star);
            }
        }

        overlay.appendChild(btnAdd);
        overlay.appendChild(ratingBar);

        const productImg = document.createElement("img");
        productImg.classList.add("item-image");
        productImg.src = iterator.image;

        const header = document.createElement("div");
        header.classList.add("heading");
        header.innerText = iterator.title;

        const discription = document.createElement("div");
        discription.classList.add("description");
        discription.innerText = iterator.discription;

        const price = document.createElement("div");
        price.classList.add("price");
        price.innerText = `$ ${iterator.price}`;

        item.appendChild(overlay);
        item.appendChild(productImg);
        item.appendChild(header);
        item.appendChild(discription);
        item.appendChild(price);

        items.appendChild(item);

    });
}

function prepareCart(array) {
    array.forEach(function (element, i) {
        const cartItem = document.createElement("div");
        cartItem.classList.add("cart-item");

        const imgBox = document.createElement("div");
        imgBox.classList.add("img-box");

        const prdctImg = document.createElement("img");
        prdctImg.classList.add("cart-item-img");
        prdctImg.src = element.image;
        prdctImg.alt = "image"
        imgBox.appendChild(prdctImg);

        const about = document.createElement("div");
        about.classList.add("about");

        const mainTitle = document.createElement("div");
        mainTitle.classList.add("main-title");
        mainTitle.innerText = element.title
        about.appendChild(mainTitle);

        const subDescription = document.createElement("div");
        subDescription.classList.add("sub");
        subDescription.innerText = element.discription.slice(0, 35) + "...";
        about.appendChild(subDescription);

        const counter = document.createElement("div");
        counter.classList.add("counter");

        const increment = document.createElement("div")
        increment.classList.add("inc")
        increment.innerText = "+";
        const count = document.createElement("div");
        count.classList.add("count");
        count.innerText = element.numOfItems;
        const decrement = document.createElement("div");
        decrement.classList.add("dec")
        decrement.innerText = "-";

        counter.append(decrement, count, increment);


        let size = null;
        if (element.hasSize) {
            size = document.createElement("div")
            size.classList.add("sizes");
            const label = document.createElement("label");
            label.htmlFor = "size";
            label.innerText = "Size:";
            const select = document.createElement("select");
            size.append(label, select);


            const sizes = ["Small", "Medium", "Large", "X-large", "XXL"];

            for (let index = 0; index < 5; index++) {
                const option = document.createElement("option");
                option.value = index + 1;
                option.innerText = sizes[index];
                select.appendChild(option);

            }

            select.addEventListener("change", function (event) {
                element.size = event.target.value;
                console.log(element.size);
            })
        }

        increment.addEventListener("click", function () {
            let items = parseInt(count.innerText);
            items = items + 1;
            count.innerText = items;
            element.numOfItems = items;
            cartDetails.total = cartDetails.total + element.price;
            totAmount.innerText = `$${cartDetails.total}`
        });

        decrement.addEventListener("click", function () {
            let items = parseInt(count.innerText);
            if (!(items <= 1)) {
                items = items - 1;
                count.innerText = items;
                element.numOfItems = items;
                cartDetails.total = cartDetails.total - element.price;
                totAmount.innerText = `$${cartDetails.total}`;
            }

        });

        const priceDiv = document.createElement("div");
        priceDiv.classList.add("prices");

        const amountDiv = document.createElement("div");
        amountDiv.classList.add("amount");
        amountDiv.innerText = `$ ${element.price}`;


        const removeItemBtn = document.createElement("div");
        removeItemBtn.classList.add("remove-item");
        const underline = document.createElement("u");
        underline.innerText = "Remove Item";
        removeItemBtn.appendChild(underline);

        removeItemBtn.addEventListener("click", function () {
            cartItem.remove();
            let items = parseInt(count.innerText);
            let totalPrice = element.price * items;
            cartDetails.total = cartDetails.total - totalPrice;
            totAmount.innerText = `$${cartDetails.total}`
            shoppingCartItems.splice(i, 1);
            numOfItems.innerText = `${shoppingCartItems.length} Items`;
        })

        //add price to total price and items to num of items
        cartDetails.total = cartDetails.total + (element.price * element.numOfItems);
        totAmount.innerText = cartDetails.total;

        cartDetails.items = cartDetails.items + 1;
        numOfItems.innerText = `${cartDetails.items} Items`;

        priceDiv.append(amountDiv, removeItemBtn);

        cartItem.append(imgBox, about, counter,);
        (element.hasSize ? cartItem.appendChild(size) : null);
        cartItem.appendChild(priceDiv);

        cardHeader.after(cartItem);

    });
}

// page loading
loadData(ladiesWear);
prepareCart(shoppingCartItems);

const shoppingCartBtn = document.querySelector("#cart");
const overlayLayer = document.querySelector(".main-overlay-inactive")
const cartCloseBtn = document.querySelector("#close");


//remove all items from cart
removeAllBtn.addEventListener("click", function () {
    if (!(shoppingCartItems.length === 0)) {
        let elem = document.querySelectorAll(".cart-item")
        elem.forEach(element => {
            element.remove();
        });
        shoppingCartItems.splice(0, shoppingCartItems.length);
        initialize();
        numOfItems.innerText = `${cartDetails.items} Items`;
        totAmount.innerText = `$${cartDetails.total}`;

        shoppingCartItems.forEach(element => {
            element.numOfItems = 1;
        });
    }
});


// open shopping cart
shoppingCartBtn.addEventListener("click", function (e) {
    overlayLayer.className = "main-overlay-active";
    prepareCart(shoppingCartItems);
    totAmount.innerText = `$${cartDetails.total}`;
});

//close shopping cart
cartCloseBtn.addEventListener("click", function () {
    overlayLayer.className = "main-overlay-inactive"
    let cartItems = document.querySelectorAll(".cart-item");
    cartItems.forEach(element => {
        element.remove();
    });
    initialize();
})

//select categories
const categories = document.querySelectorAll(".catogory");
categories.forEach(function (element, i) {
    if (i === 0) {
        element.addEventListener("click", function () {
            if (!(pageDetails.selectedPage === 0)) {
                console.log("ladies wear");
                let items = document.querySelectorAll(".item");
                items.forEach(node => { node.remove(); });
                loadData(ladiesWear);
                pageDetails.selectedPage = 0;
            }
        });
    } else if (i === 1) {
        element.addEventListener("click", function () {
            if (!(pageDetails.selectedPage === 1)) {
                console.log("mensWear");
                let items = document.querySelectorAll(".item");
                items.forEach(node => { node.remove(); });
                loadData(mensWear);
                pageDetails.selectedPage = 1;
            }
        });
    } else if (i === 2) {
        element.addEventListener("click", function () {
            if (!(pageDetails.selectedPage === 2)) {
                console.log("shoes");
                let items = document.querySelectorAll(".item");
                items.forEach(node => { node.remove(); });
                loadData(shoes);
                pageDetails.selectedPage = 2;
            }
        });
    } else if (i === 3) {
        element.addEventListener("click", function () {
            if (!(pageDetails.selectedPage === 3)) {
                console.log("hairBandss");
                let items = document.querySelectorAll(".item");
                items.forEach(node => { node.remove(); });
                loadData(hairBands);
                pageDetails.selectedPage = 3;
            }
        });
    } 

});

//checkout button onClick
const checkoutBtn = document.querySelector("#proceed");
checkoutBtn.addEventListener("click", function () {
    if (shoppingCartItems.length === 0) {
        alert("No any Items in Cart");
    } else {
        localStorage.setItem('items', JSON.stringify(shoppingCartItems));
        window.location.href = "../HTML/Chekout.html";
    }
});

