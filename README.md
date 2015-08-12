# testapp2

This is a very simple PHP application that connects to an Azure SQL database. It contains an incredibly simplistic login page that checks if a username and password combination exist in the database, before allowing the user to see a homepage, personalised with their username. It also contains the functionality to register a new user.

## Database connection information

The database connection information is stored in dbconnection.php and uses the following information:
* The server name, under "$serverName"
* The database name, under "$dbname"
* The server administrator login, under "$serverAdmin"
* The server administrator password, under "$serverPassword"
