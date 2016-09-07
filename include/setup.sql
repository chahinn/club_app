# All queries that you use should be recorded here as documentation.

# Write and SQL statement to create your club membership table.

"CREATE TABLE newclubdb (

firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
password char(50),
timedate datetime,
memtype varchar(70)
)";

# Write sql statements to insert club members .

 "INSERT INTO newclubdb (firstname, lastname, email, password, timedate, memtype)
				VALUES ('$firstname','$lastname','$email', ' $password1', now(), '$memtype') ";

# Write SQL statement to select all  members with a particular email address.   

"SELECT email FROM clubdb  WHERE email===$email";

# Write sql to update club  member data for a specific member.

"UPDATE clubdb  SET lastname='chahin' WHERE lastname='adios'";  

#  Finally write an SQL statement to delete a member. 

"DELETE FROM clubdb lastname='ah'"