$(document).ready(function () {

    function updateGrandTotal() {
        var grandTotal = 0;
        $(".card-body").each(function () {
            var total = parseInt($(this).find(".total").val()) || 0;
            grandTotal += total;
        });
        $("#grandTotal").text(grandTotal.toLocaleString());
    }

    function updateSubtotal(card) {
        var harga = parseInt(card.find("#harga").val()) || 0;
        var qty = parseInt(card.find("#qty").val()) || 0;
        var subtotal = harga * qty;
        card.find(".total").val(subtotal);
    }

    $(".plus").click(function (e) {
        document.getElementById('grandTotal').style.display = 'inline';
        document.getElementById('grandTotalDefault').style.display = 'none';
        e.preventDefault();
        var card = $(this).closest(".card-body");
        var qty = parseInt(card.find("#qty").val()) || 0;
        qty += 1;
        card.find("#qty").val(qty);

        if (qty > 1) {
            card.find(".minus").prop("disabled", false);
        }

        updateSubtotal(card);
        updateGrandTotal();
    });

    $(".minus").click(function (e) {
        e.preventDefault();
        var card = $(this).closest(".card-body");
        var qty = parseInt(card.find("#qty").val()) || 0;
        if (qty > 1) {
            qty -= 1;
            card.find("#qty").val(qty);
            updateSubtotal(card);
            updateGrandTotal();
        }

        if (qty <= 1) {
            card.find(".minus").prop("disabled", true);
        }
    });

    $(".card-body").each(function () {
        var card = $(this);
        var qty = parseInt(card.find("#qty").val()) || 0;
        if (qty <= 1) {
            card.find(".minus").prop("disabled", true);
        }
        updateSubtotal(card);
    });

    updateGrandTotal();
});

// For Footer Years
document.getElementById('year').innerHTML = new Date().getFullYear();