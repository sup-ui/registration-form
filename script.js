document.getElementById("registerForm").addEventListener("submit", function (e) {
    const firstname = document.getElementById("firstname").value.trim();
    const lastname = document.getElementById("lastname").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const gender = document.getElementById("gender").value;
    const hobbies = document.getElementById("hobbies").value.trim();
    const dob = document.getElementById("dob").value;

    if (!firstname || !lastname || !email || !phone || !gender || !hobbies || !dob) {
        e.preventDefault();
        const error = document.getElementById("error");
        error.classList.remove("hidden");
        error.textContent = "Please fill out all fields!";
    }
});