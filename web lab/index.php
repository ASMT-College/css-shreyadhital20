<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form onsubmit="return validateName()" action="contact.php" method="POST">
        <fieldset>
            <legend>User Login:</legend>
            <br>
            Name:<br>
            <input type="text" id="name" name="name" placeholder="Enter Your Name">
            <br>
            <span id="alert" style="color: red;"></span> 
            <br>
            Age:<br>
            <input type="text"id="age" name="age" placeholder="Enter Your Age">
            <br>
            <span id="alert2" style="color: red;"></span>
            <br>
            Description:<br>
            <textarea type="text" id="desc" name="desc" placeholder="About Yourself"></textarea>
            <br>
            <span id="alert3" style="color: red;"></span>
            <br>
            <input type="submit" name="submit">
        </fieldset>
    </form>
    <!--Client Side validation -->
    <script>
        function validateName() {
            let nameInput = document.getElementById("name").value.trim();
            let ageInput = document.getElementById("age").value.trim();
            let descInput = document.getElementById("desc").value.trim();
            let errorMessage = document.getElementById("alert"); 
            let errorMessage2 = document.getElementById("alert2"); 
            let errorMessage3 = document.getElementById("alert3"); 
            if (nameInput === ''){
                errorMessage.textContent = "Name must not be empty.";
                return false;
            }

            else if (nameInput.length < 4) {
                errorMessage.textContent = "Name must be at least 4 characters long.";
                return false; 
            }  
            else if (ageInput === ''){
                errorMessage2.textContent = "Age must not be empty.";
                return false;
            }
           else if (ageInput < 18){
            errorMessage2.textContent = "Age must be over 18 years.";
            return false; 
            }
            else if (descInput === ''){
                errorMessage3.textContent = "Description is required."
                return false;
            }
           
           else{
            errorMessage.textContent = "";
            return true;
           }
        }
    
    </script>
</body>
</html>