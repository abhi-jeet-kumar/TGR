var boxes = document.querySelectorAll(".boximg");
var selectedboxurl;

for (var i = 0; i < boxes.length; i++) {
    boxes[i].addEventListener("click", function() {
        for (var x = 0; x < boxes.length; x++) {
            boxes[x].classList.remove("selected");
        }
        this.classList.add("selected");
    });
}



var minus = document.querySelector(".minus");
var plus = document.querySelector(".plus");
var quantity = document.querySelector(".productQty");
var count = 1;
quantity.value = count;
//add click listners
plus.addEventListener("click", function() {
    if (count < 10) {
        count++;
    }
    quantity.value = count;
    total.textContent = totalprice;
});

minus.addEventListener("click", function() {
    if (count > 1) {
        count--;
    }
    quantity.value = count;
    total.textContent = totalprice;
});