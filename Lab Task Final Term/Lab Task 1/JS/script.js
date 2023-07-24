function validateNameForm()
{
    let name = document.forms["nameForm"]["name"].value;    

    if (name.trim() === "")
    {
        alert("Name cannot be empty");
        return false;
    }

    const lowerCaseLetters = "abcdefghijklmnopqrstuvwxyz";
    const upperCaseLetters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const specialCharacters = ".-";
    let hasLowerCase = false;
    let hasUpperCase = false;
    let hasSpecialCharacters = false;
    for (let i = 0; i < name.length; i++) {
        const char = name.charAt(i);

        if (lowerCaseLetters.includes(char)) {
            hasLowerCase = true;
        }

        if (upperCaseLetters.includes(char)) {
            hasUpperCase = true;
        }

        if (specialCharacters.includes(char)) {
            hasSpecialCharacters = true;
        }
    }

    if (!hasLowerCase) {
        alert("Your name must contain at least one lowercase letter.");
        return false;
    }

    if (!hasUpperCase) {
        alert("Your name must contain at least one uppercase letter.");
        return false;
    }

    if (!hasSpecialCharacters) {
        alert("Your name must contain at least one special character.");
        return false;
    }


    if (name.trim().indexOf(' ') === -1)
    {
        alert("Name should contain at least two words");
        return false;
    }
    return true;
}

function validateEmailForm()
{
    let email = document.forms["emailForm"]["email"].value;    
    if (email.trim() === "")
    {   
        alert("Email cannot be empty");
        return false;
    }

    let atPos = email.indexOf('@');
    let dotPos = email.lastIndexOf('.');

    if (atPos === -1 || atPos === 0 || dotPos === -1 || dotPos <= atPos + 1 || dotPos === email.length - 1) {
        alert("Please enter a valid email address.");
        return false;
    }

    return true;
}

function validateGenderForm()
{
    let gender = document.forms["genderForm"]["gender"].value;  
    
    if (gender.trim() === "")
    {   
        alert("Gender cannot be empty");
        return false;
    }
}

function validateDobForm()
{
    let dd = document.forms["dobForm"]["dd"].value;  
    let mm = document.forms["dobForm"]["mm"].value;  
    let yyyy = document.forms["dobForm"]["yyyy"].value; 
    
    if (dd.trim() === "" || mm.trim() === "" || yyyy.trim() === "")
    {   
        alert("DOB cannot be empty");
        return false;   
    }

    if (dd < 1 || dd >31 || mm < 1 || mm >12 || yyyy < 1900 || yyyy > 2016)
    {
        if (mm === 2)
        {
            if (dd > 29)
            {
                alert("Invalid Date");
                return false;
            }
        }
        alert("Invalid Date");
        return false;
    }
    return true;
}

function validateDegreeForm()
{
    let degree1 = document.forms["degreeForm"]["degree1"].checked;  
    let degree2 = document.forms["degreeForm"]["degree2"].checked;  
    let degree3 = document.forms["degreeForm"]["degree3"].checked;  
    
    if (!degree1 && !degree2 && !degree3)
    {   
        alert("Degree cannot be empty");
        return false;
    }

    return true;
}

function validateBloodGroupForm()
{
    let selectedBloodGroup = document.getElementById("bloodGroup").value;

    if (selectedBloodGroup === "Blood Group") {
        alert("Please select a blood group.");
        return false; 
    }

    return true; 
}

function validateProfilePictureForm()
{
    let userID = document.forms["profilePictureForm"]["userID"].value;    
    let profilePicture = document.forms["profilePictureForm"]["profilePicture"].value;    
    if (userID.trim() === "")
    {   
        alert("User ID cannot be empty");
        return false;
    }
    if (userID.trim() < 0)
    {   
        alert("User ID cannot be negative");
        return false;
    }
    if (profilePicture.trim() === "")
    {   
        alert("Profile Picture cannot be empty");
        return false;
    }
}