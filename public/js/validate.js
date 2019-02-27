$('#form').validate({
    rules: {
        firstName: {
            required: true,
            minlength: 2
        },
        lastName : {
            required: true,
            minlength: 2
        },
        mobile_no : {
            required: true,
            minlength: 10
        },
        address : "required",
        email: {
            required: true,
            email: true
        },
        ccName : "required",

        ccNumber: {
            required: true,
            number: true,
            minlength: 1,
            
        },

        ccExpiration : {
            required : true,
        },

        cvv: {
            number: true,
            required: true,
            minlength: 1,
            maxlength: 4
        },
    },

    messages : {
        firstName : {
            required: "Please enter your first name"
        },
        lastName : {
            required: "Please enter your last name"
        },
        address :  {
            required: "Please enter your address"
        },
        email :  {
            required: "Please provide your email"
        },
        ccName : {
            required: "Please provide card name"
        },
        ccNumber : {
            required: "Please provide a valid card number"
        },
        ccExpiration : {
            required: "Please provide card expiration date"
        },
        cvv : {
            required: "Please provide a valid card cvv number"
        },
        mobile_no : {
            required: "Please enter your mobile number"
        },
    },

    errorElement: "em",
        
    highlight: function ( element, errorClass, validClass ) {
        $( element ).parents( ".md-form" ).addClass( "has-error" ).removeClass( "has-success" );
    },
    unhighlight: function (element, errorClass, validClass) {
        $( element ).parents( ".md-form" ).addClass( "has-success" ).removeClass( "has-error" );
    }

    
});

   