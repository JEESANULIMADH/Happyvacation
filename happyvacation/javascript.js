function validateName{

    let name = document.getElementById("name").value.trim();
    let nameError = document.getElementById("nameError");

    isValid = true;

    if (name === " ") {
        isValid ==false;
        document.getElementById("nameError").innerHTML="Name is required";
    }
    else{
        document.getElementById("nameError").innerHTML=" ";
    }
}

function validateNIC{

    let name = document.getElementById("nic").value.trim();
    let nameError = document.getElementById("nameError");

    isValid = true;

    if (nic === " ") {
        isValid ==false;
        document.getElementById("nameError").innerHTML="NIC is required";
    }
    else{
        document.getElementById("nameError").innerHTML=" ";
    }
}
