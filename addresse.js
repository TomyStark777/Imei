document.getElementById("continueButton").addEventListener("click", function() {
    const email = document.getElementById("email").value;
    localStorage.setItem("userEmail", email); // Stocke l'adresse e-mail
});