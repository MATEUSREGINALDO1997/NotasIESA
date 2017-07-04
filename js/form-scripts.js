$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
//        submitMSG(false, "Preencha os campos corretamente.");
        testeMSG(false, "Preencha os campos corretamente.");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});
  

function submitForm(){
    // Initiate Variables With Form Content
    var n1 = $("#n1").val();
    var n2 = $("#n2").val();
    var n3 = $("#n3").val();
    


    $.ajax({
        type: "POST",
        url: "php/form-process.php",
        data: "n1=" + n1 + "&n2=" + n2 + "&n3=" + n3,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                testeMSG(true,text);
            }
        }
    });
}

function formSuccess(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Message Submitted!")
}

function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){//treme treme
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h4 text-center tada animated text-success";
    } else {
        var msgClasses = "h4 text-center text-info";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
    
function testeMSG(teste, msg1){
    if(teste){
        var msgClasses1 = "h4 text-center tada animated text-success";
    } else {
        var msgClasses1= "h4 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses1).text(msg1);
}