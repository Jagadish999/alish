<article> 
    <form action="../RequiredFiles/login.php" method="POST">

        <p>LOGIN DETAILS: </p>

        <label for="fullname">Full Name: </label> 
        <input type="text" name = "fullname" id = "fullname" required/>

        <label for="email">Email: </label> 
        <input type="email" name = "email" id = "email"/>

        <label for="userpass">Password: </label> 
        <input type="password" name = "password" id = "userpass" required/>

        <label for="usertype">User Type: </label>
        <select name="usertype" id="usertype">

            <option>User</option>
            <option>Admin</option>

        </select>

        <input type="submit" name="submitLog" value="Log In" />
    </form>

</article>