function contactForReasons() {
    var reason = prompt("How would you like to work with me? (general / job / project / internship)");

    if (reason === "general") {
        var question = prompt("Please type your general question or message:");
        alert("I appreciate your message.");

    } else if (reason === "job") {
        var position = prompt("Which role are you considering me for?");
        var experience = prompt("Could you please share what skills or experience you think I bring for this role?");
        alert("Thanks for considering me for a job.");

    } else if (reason === "project") {
        var title = prompt("Tell me about the project you want me to collaborate on:");
        var skills = prompt("What skills do you think are important for this project?");
        alert("I'm excited to potentially work on this project with you.");

    } else if (reason === "internship") {
        var program = prompt("Which internship opportunity are you interested in discussing?");
        var duration = prompt("How long do you think the internship should last?");
        alert("Thank you for considering me for the internship.");

    } else {
        alert("Please enter a valid option: general, job, project, or internship.");
    }
}

contactForReasons();
