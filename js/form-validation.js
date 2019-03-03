$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $.validator.addMethod("valueNotEquals", function(value, element, arg){
        return arg !== value;
       }, "Value must not equal arg.");
    $("form[name='application']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        fullname: "required",
        contactnumber: "required",
        concept_desc: "required",
        concept_stage: "required",
        experience: "required",
        email: {
          required: true,
          // Specify that email should be validated
          // by the built-in "email" rule
          email: true
        },
        industrystate:"required",
        companybasedin: { valueNotEquals: "default" },
        industry: { valueNotEquals: "default" }
        // password: {
        //   required: true,
        //   minlength: 5
        // }
      },
      
      // Specify validation error messages
      messages: {
        fullname: "Please enter your firstname",
        contactnumber: "Please enter your contact",
        // password: {
        //   required: "Please provide a password",
        //   minlength: "Your password must be at least 5 characters long"
        // },
        email: "Please enter a valid email address",
        companybasedin: { valueNotEquals: "Please select country" },
        industry: { valueNotEquals: "Please select country" },
        industrystate: "Please enter state",
        concept_desc: "Please describe your concept",
        concept_stage: "Please enter the current stage of your concept",
        experience: "Please enter your experience",
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
  });