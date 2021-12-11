function validateForm() {
    let x = document.forms["myForm"]["firstname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
}
  let x = document.forms["myForm"]["lastname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }

  let x = document.forms["myForm"]["email"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  
  let x = document.forms["myForm"]["password"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
 