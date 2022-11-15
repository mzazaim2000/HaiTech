   const forms = document.querySelector(".forms"),
   pwShowHide = document.querySelectorAll(".eye-icon"),
   links = document.querySelectorAll(".link");

   pwShowHide.forEach(eyeIcon => {
   eyeIcon.addEventListener("click", () => {
   let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
   
   pwFields.forEach(password => {
       if(password.type === "password"){
           password.type = "text";
           eyeIcon.classList.replace("bx-hide", "bx-show");
           return;
       }
       password.type = "password";
       eyeIcon.classList.replace("bx-show", "bx-hide");
               })
               
           })
       })      

     
       signUp.addEventListener("click", e => {

        var fname = document.getElementsByName('fname').value;
        var lname = document.getElementsByName('lname').value;
        var email = document.getElementsByName('email').value;
        var contact = document.getElementsByName('contact').value;
        var password = document.getElementsByName('password').value;
    

        createUserWithEmailAndPassword(auth, fname, lname, email, contact, password)
        .then((userCredential) => {
          // Signed in 
          const user = userCredential.user;
          // ...
        })
        .catch((error) => {
          const errorCode = error.code;
          const errorMessage = error.message;

          alert('errorMessage');
         
          // ..
        });
       })
       

