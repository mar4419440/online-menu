function btnedite(index) {
    let idTb = document.getElementById(`id${index}`).innerHTML
    let catTb = document.getElementById(`cat${index}`).innerHTML;
    let NameTb = document.getElementById(`name${index}`).innerHTML;
    let priceTb = document.getElementById(`price${index}`).innerHTML;
    let id = document.getElementById("id");
    id.value = idTb;
    let category = document.getElementById("cat");
    category.value = catTb;
    let productName = document.getElementById("pro");
    productName.value = NameTb;
    let price = document.getElementById("price");
    price.value = priceTb;
}