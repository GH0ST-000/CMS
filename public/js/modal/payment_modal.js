$(".payment_open_modal").hide();
$(document).on("click", "#payment_modal", function () {
        $("#payment_open_modal").toggle(400);
});
$(document).on("click", "#dismiss", function () {
        $("#alert-additional-content").toggle(400);
});
$(document).on("click", "#route_btn", function () {
        const btn_value=document.getElementById("route_btn").value;
        if (btn_value==='1'){
            document.getElementById("route_btn").value=2;
            // document.getElementById("back_route_btn").value=2;
            $("#personal_information").addClass('hidden');
            $("#plan_select"). removeClass('hidden');
            $("#back_route_btn"). removeClass('hidden');
        }else{
            document.getElementById("route_btn").value=3;
            // document.getElementById("back_route_btn").value=3;
            $("#personal_information").addClass('hidden');
            $("#route_btn").addClass('hidden');
            $("#plan_select").addClass('hidden');
            $("#card_information"). removeClass('hidden');
            $("#back_route_btn"). removeClass('hidden');
            $(".payment_open_modal").show();
            $("#accept"). removeClass('hidden');
        }

});

$(document).on("click", "#back_route_btn", function () {
    const back_btn_value=document.getElementById("back_route_btn").value;

    if (back_btn_value==='1'){
        document.getElementById("back_route_btn").value=1;
        $("#personal_information").removeClass('hidden');
        $("#plan_select").addClass('hidden');
        $("#card_information").addClass('hidden');
        $("#back_route_btn").addClass('hidden');
    }
    if (back_btn_value==='2'){
        document.getElementById("back_route_btn").value=2;
        $("#personal_information").addClass('hidden');
        $("#plan_select").removeClass('hidden');
        $("#card_information").addClass('hidden');
    }
    if (back_btn_value==='3'){
       document.getElementById("back_route_btn").value=2;
        $("#personal_information").addClass('hidden');
        $("#plan_select").addClass('hidden');
        $("#card_information").removeClass('hidden');
    }

});

const cleaveCC = new Cleave("#card_number", {
    creditCard: true,
    delimiter: "-",
    onCreditCardTypeChanged: function (type) {

        const cardBrand = document.getElementById("cardBrand"),
            visa = "fab fa-cc-visa",
            mastercard = "fab fa-cc-mastercard",
            amex = "fab fa-cc-amex",
            diners = "fab fa-cc-diners-club",
            jcb = "fab fa-cc-jcb",
            discover = "fab fa-cc-discover";

        switch (type) {
            case "visa":
                cardBrand.setAttribute("class", visa);
                break;
            case "mastercard":
                cardBrand.setAttribute("class", mastercard);
                break;
            case "amex":
                cardBrand.setAttribute("class", amex);
                break;
            case "diners":
                cardBrand.setAttribute("class", diners);
                break;
            case "jcb":
                cardBrand.setAttribute("class", jcb);
                break;
            case "discover":
                cardBrand.setAttribute("class", discover);
                break;
            default:
                cardBrand.setAttribute("class", "");
                break;
        }
    },
});

const cleaveDate = new Cleave("#exp_date", {
    date: true,
    datePattern: ["m", "y"],
});

const cleaveCCV = new Cleave("#cvv", {
    blocks: [3],
});

