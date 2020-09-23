#unieq_names

The setcookie() function defines a cookie to be sent along with the rest of the HTTP headers.
A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.
The name of the cookie is automatically assigned to a variable of the same name. For example, if a cookie was sent with the name "user", a variable is automatically created called $user, containing the cookie value.
The setcookie() function must appear BEFORE the <html> tag.