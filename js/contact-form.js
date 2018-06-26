$(document).ready(function () {
    $("#applicationButton").bind("click", function () {
        const xhttp = new XMLHttpRequest();
        const botToken = "607809653:AAFDFWG1y0-hgb5f1QcXq9fh9qlyf_eqeG0";
        const chatId = "-184963404";

        let messageText = "";
        let phoneNumber = $("#uPhoneInput").val();
        let mailAdress = $("#uMailInput").val();
        let projectDescription = $("#pDescInput").val();

        if (phoneNumber != "" && mailAdress != "" && projectDescription != "") {
            messageText += "Ім'я: " + phoneNumber +
                "%0AНомер телефону: " + mailAdress +
                "%0AПошта: " + projectDescription;
            xhttp.open(`POST`, `https://api.telegram.org/bot${botToken}/sendMessage?chat_id=${chatId}&parse_mode=html&text=${messageText}`, false);
            xhttp.send();
        }
    });
});