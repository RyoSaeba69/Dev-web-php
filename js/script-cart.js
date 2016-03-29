$(function() {
$('.pro-qty').change(function(e) {

    var tr = $(this).closest("tr");
    var productCostTd = tr.find(".product-total");
    var productPrice = parseInt(tr.find(".product-price").html().substring(1));

    var oldTotal = parseInt(productCostTd.html().substring(3));
	//DEBUG QC
	console.log("oldt" +oldTotal);
    var newQty = parseInt($(this).val());
    var newTotal = newQty * productPrice;
	//DEBUG QC
	console.log("newt" +newTotal);
    productCostTd.html("= $" + newTotal);

    productsTotalTd = $('.products-total');
	
    var productsTotal = parseInt(productsTotalTd.html().substring(3));
	//DEBUG QC
	console.log("pdt-string" +productsTotalTd.html().substring(3));
	console.log("pdt" +productsTotal);
    productsTotalTd.html("= $" + (productsTotal - oldTotal + newTotal));
});

$('.product-remove').click(function(e) {
    var tr = $(this).closest("tr");
    var productCostTd = tr.find(".product-total");

    var total = parseInt(productCostTd.html().substring(3));

    productsTotalTd = $('.products-total');
    var productsTotal = parseInt(productsTotalTd.html().substring(3));
    productsTotalTd.html("= $" + (productsTotal - total));

    tr.remove();
});

$('#update-carts-btn').click(function(e) {
    var newCarts = {};

    $('.product-row').each(function() {
        console.log();
        var id = $(this).data("productid");
        var qty = $(this).find('.pro-qty').val();
        newCarts[id] = qty;
    });

    $.ajax({
        url: "/shop/?ctrl=carts&action=update_carts",
        method: "POST",
        data: newCarts
    }).done(function(data) {})

});
});