
  
    function validateQuoteForm() {
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var quote = document.getElementById('quote').value;

      if (name.trim() === "") {
        alert("Please enter your name.");
        return false;
      }

      if (email.trim() === "") {
        alert("Please enter your email address.");
        return false;
      }

      if (quote.trim() === "") {
        alert("Please enter your favorite motivational quote.");
        return false;
      }

      var emailRegex = /^\S+@\S+\.\S+$/;
      if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
      }

      return true; // Form is valid, proceed with submission
    }
