const password = "7amra"
let inpass = document.getElementById("password");
let backpopup = document.getElementById("backpopup");
let btnSub = document.getElementById("submit");
let category = document.getElementById("cat");
let prodName = document.getElementById("pro");
let price = document.getElementById("price");
const bigContainer = document.getElementById("bigContainer")
    // class obj{
    //     constructor obj(category,type,price){
    //         this.ca
    //     }
    // }

btnSub.addEventListener('click', function(e) {
    e.preventDefault
    if (inpass.value == password) {
        location.href = "../php/admin.php";
    } else {
        alert("wrong password")
    }
});
inpass.addEventListener('keypress', function(e) {
    e.preventDefault();
    if (e.key === "Enter") {
        btnSub.click();
    }
})

function cf() {
    let flage = false;

}

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function openPopup() {
    backpopup.style.cssText = "display:block;"
}

function closePopup() {
    backpopup.style.cssText = "display:none;"
}
