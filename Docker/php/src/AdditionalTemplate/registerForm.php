<article> 
            <form action="../RequiredFiles/register.php" method="POST">
			    <p>REGISTRATION DETAILS:</p>

			    <label for="fullname">Full Name: </label> 
				<input type="text" name = "fullname" id = "fullname" required/>

			    <label for="email">Email: </label> 
				<input type="email" name = "email" id = "email" required/>

                <label for="userpass">Password: </label> 
				<input type="password" name = "password" id = "userpass" required/>

			    <input type="submit" name="submitReg" value="Register" />
		    </form>

</article>