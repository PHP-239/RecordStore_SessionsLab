
# Reflection Questions
    1. In your own words, explain what require_login() does in index.php. When does it run, and what does it enforce?

    2. Describe the login process step-by-step: from clicking the “Login” button on the form to the moment the user is redirected. Which file and which case handles the logic? 
    
    3. What session variables are set after a successful login?

    4. When you click “Add to Cart,” what exactly gets stored in $_SESSION['cart']? Which action adds items to the cart, and what type of data is being stored?

    5. On the cart page, you use $records_in_cart. Where does that variable come from, and why do we need records_by_ids() instead of just using the raw IDs in the session?

    6. Explain what happens when you click “Complete Purchase.” Which action in index.php runs, what loop is executed, which function writes each record to the database, and which table is updated?
