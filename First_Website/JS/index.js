document.getElementById("myForm").addEventListener("submit", function (event) {
  event.preventDefault(); // Prevent the default form submission

  // Get the form values
  const name = document.getElementById("formName").value;
  const email = document.getElementById("formEmail").value;
  const comment = document.getElementById("formComment").value;

  // Create an object to store the form data
  const formData = {
    name: name,
    email: email,
    comment: comment,
  };

  // Store the form data in local storage as a JSON string
  localStorage.setItem("formData", JSON.stringify(formData));

  // Optional: Alert or console log for confirmation
  alert("Form data saved successfully!");
  console.log("Saved Data:", formData);

  // Clear the form after submission
  document.getElementById("myForm").reset();
});
