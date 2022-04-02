function myFunction2() {
    const x = document.querySelector("#myInput");
    const y = document.querySelector("#myInput2");
    if (x.type === "password"  && y.type === "password") {
      x.type = "text";
      y.type = "text";
      
      
    } else {
      x.type = "password";
      y.type = "password";
      
    }
  }