
# Reflection Questions
    1. In your own words, explain what require_login() does in index.php. When does it run, and what does it enforce?

    The function require_login() checks to see if there is any currently running session. If no session is running it shows the login page. If there is a session in progress it does nothing.

    2. Describe the login process step-by-step: from clicking the “Login” button on the form to the moment the user is redirected. Which file and which case handles the logic? 
    
    Once you click the login button in the login form -a partial that's being displayed as part of the index page- the '$value' variable is set to 'login.'

    In index.php there is a switch statement that takes in the 'action' that the 'value' is apart of. The variable '$action' with a 'value' of 'login' will take us to the case login.
    
    Within case login we take our values of the 'username' and 'password.' We trim off white space and if the strings are empty noting happens, if they aren't we get the post.
    Then we have an if statement that takes in both $username and $password, requiring both values to run.
    First part of the If block we set the $user variable to the function call for 'user_find_by_username()' which requires te $username value we recently trimmed. ''user_find_by_username()' runs a sequel statement that gets the user with the username, then the function returns either the data it got or a null (if data not found).
    Then we have another if statement that requires '$username' and a true value from the function 'password_verify().' If the password entered is equal to the users password within the database, we start a new session with the 'user_id' and 'full_name.'
    The view is then set to the list view.
    If the users details couldn't be verrified to be true, we set the $login_error to "Invalid username or password." The view is reset as login. If nothing is entered, the $login_error to "Enter both feilds." The view is reset to login.

    Then we break out of the case for login.


    
    3. What session variables are set after a successful login?

    4. When you click “Add to Cart,” what exactly gets stored in $_SESSION['cart']? Which action adds items to the cart, and what type of data is being stored?

    5. On the cart page, you use $records_in_cart. Where does that variable come from, and why do we need records_by_ids() instead of just using the raw IDs in the session?

    6. Explain what happens when you click “Complete Purchase.” Which action in index.php runs, what loop is executed, which function writes each record to the database, and which table is updated?
