// variable for buttons
var minus = document.querySelector(".minus");
var plus = document.querySelector(".plus");
var total = document.querySelector(".totalprice");
var price = document.querySelector(".price").textContent;
var final = document.querySelector(".finaltotal").textContent;
var discount;
var newtotal;
var finaltotal = 0;

var discount = [
    {
        couponName: "Rakhi50",
        discount: 1 / 5
    },
    {
        couponName: "Diwali50",
        discount: 1 / 2
    }
];

total.textContent = price;
final = finaltotal;

var totalprice;

//select the form
var quantity = document.querySelector(".productQty");

// initiate the forms value from 1
var count = 1;
quantity.value = count;
//add click listners
plus.addEventListener("click", function() {
    if (count < 10) {
        count++;
    }
    quantity.value = count;
    totalprice = count * price;
    total.textContent = totalprice;
});

minus.addEventListener("click", function() {
    if (count > 1) {
        count--;
    }
    quantity.value = count;
    totalprice = count * price;
    total.textContent = totalprice;
});
