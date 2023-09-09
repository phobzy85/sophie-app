$(document).ready(function () {
    // tasks: on type change hide amount
    const task_type = $("#type :selected").text();

    if (task_type === "Poop" || task_type === "Bath") {
        $(".task-amount-group").hide();
        $("#amount").val(0);
    }

    $("#type").on("change", function () {
        const task_type = $("#type :selected").text();

        $(".task-amount-group").show();

        if (task_type === "Poop" || task_type === "Bath") {
            $(".task-amount-group").hide();
            $("#amount").val(0);
        }

        let amountCalpol = "";
        amountCalpol += '<option value="10">10ml</option>';
        amountCalpol += '<option value="7.5">7.5ml</option>';
        amountCalpol += '<option value="5">5ml</option>';
        amountCalpol += '<option value="2.5">2.5ml</option>';
        amountCalpol += '<option value="0">0ml</option>';

        if (task_type === "Calpol") {
            $("#amount").html(amountCalpol);
        }

        let amountIbrupofen = "";
        amountIbrupofen += '<option value="5">5ml</option>';
        amountIbrupofen += '<option value="2.5">2.5ml</option>';
        amountIbrupofen += '<option value="0">0ml</option>';

        if (task_type === "Ibrupofen") {
            $("#amount").html(amountIbrupofen);
        }

        let amountMilk = "";
        amountMilk += '<option value="210">210</option>';
        amountMilk += '<option value="200">200</option>';
        amountMilk += '<option value="190">190</option>';
        amountMilk += '<option value="180">180</option>';
        amountMilk += '<option value="170">170</option>';
        amountMilk += '<option value="160">160</option>';
        amountMilk += '<option value="150">150</option>';
        amountMilk += '<option value="140">140</option>';
        amountMilk += '<option value="130">130</option>';
        amountMilk += '<option value="120">120</option>';
        amountMilk += '<option value="110">110</option>';
        amountMilk += '<option value="100">100</option>';
        amountMilk += '<option value="90">90</option>';
        amountMilk += '<option value="80">80</option>';
        amountMilk += '<option value="70">70</option>';
        amountMilk += '<option value="60">60</option>';
        amountMilk += '<option value="50">50</option>';
        amountMilk += '<option value="40">40</option>';
        amountMilk += '<option value="30">30</option>';
        amountMilk += '<option value="20">20</option>';
        amountMilk += '<option value="10">10</option>';
        amountMilk += '<option value="0">0</option>';

        if (task_type === "Milk") {
            $("#amount").html(amountMilk);
        }
    });
});
