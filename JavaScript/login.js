function validation() {

    if (document.Formfill.Email.value == "") {
    document.getElementById("result").innerHTML = "Enter your Email*";
    return false;
} else if (document.Formfill.Password.value == "") {
    document.getElementById("result").innerHTML = "Enter your Password";
    return false;
}

}