document.getElementById("book-package-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
  
    // Get form values
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var date = document.getElementById("date").value;
    var persons = document.getElementById("persons").value;
  
    // Perform form validation (you can customize the validation logic)
    if (!name || !email || !phone || !date || !persons) {
      alert("Please fill in all fields.");
      return;
    }
  
    // Perform booking submission (you can customize this part)
    alert("Booking submitted!\n\nName: " + name + "\nEmail: " + email + "\nPhone: " + phone + "\nDate: " + date + "\nNumber of Persons: " + persons);
  
    // Reset form
    document.getElementById("book-package-form").reset();
  });
  