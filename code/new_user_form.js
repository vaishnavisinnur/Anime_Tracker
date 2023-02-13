function validateform() {
  let form = document.RegistrationForm;
  if (form.mno.value == "" ||
    isNaN(form.mno.value) ||
    form.mno.value.length != 10) {
    alert("your  Mobile No. should be in the format 123. and should have 10 digits! ");
    form.mno.focus();
    return false;
  }
  return (true);
}