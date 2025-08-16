var database = [
    {
        username: "shahab",
        password: "@shahab",
    },
];

var information = [];

function ValidateForm() {
    let fname = document.getElementById("firstName").value.trim();
    let lname = document.getElementById("lastName").value.trim();
    let email = document.getElementById("email").value.trim();


    let interest = document.querySelector(
        "input[name='Interested in']:checked"
    );

    if (fname === "") {
        alert("Please enter your First Name.");
        return false;
    }

    if (lname === "") {
        alert("Please enter your Last Name.");
        return false;
    }

    if (email === "") {
        alert("Please enter your Email.");
        return false;
    }

    let subjects = document.querySelectorAll("input[type='checkbox']:checked");

    if (subjects.length === 0) {
        alert("Please select at least one Subject for contact.");
        return false;
    }

    if (!interest) {
        alert("Please select what you are interested in.");
        return false;
    }

    alert("Form submitted successfully!");
    alert(
        "Use one of the following accounts to login:\n\n" +
        "Username: shahab | Password: @shahab"
    );

    let subjectsSelected = Array.from(subjects)
        .map((s) => s.nextSibling.textContent.trim())
        .join(", ");

    let newEntry = {
        submittedBy: fname + " " + lname,
        email: email,
        subjects: subjectsSelected,
        interest: interest.nextSibling.textContent.trim(),
    };

    information.push(newEntry);

    if (signIn()) {
        let lastEntry = information[information.length - 1];
        alert(
            " New Contact Info:\n\n" +
            "Name: " + lastEntry.submittedBy + "\n" +
            "Email: " + lastEntry.email + "\n" +
            "Subjects: " + lastEntry.subjects + "\n" +
            "Interested in: " + lastEntry.interest + "\n"
        );
    }
    return true;

}

function signIn() {
    var userNamePrompt = prompt("What's your username?");
    var passwordPrompt = prompt("What's your password?");

    for (var i = 0; i < database.length; i++) {
        if (
            userNamePrompt === database[i].username &&
            passwordPrompt === database[i].password
        ) {
            console.log(" Login successful!");
            return true;
        }
    }
    alert(" Incorrect username or password.");
    return false;
}
