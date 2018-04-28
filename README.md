# smis-local
A simple API that provides student information to systems implementing such data and needs a local simulation copy of
a Student Information System.

The API basically has a few routes for getting student information using predefined parameters such as
<b>ID</b> or <b>Registration Number</b>

#params
<ul>
  <li>Id</b>
  <li>Reg</b>
  <li>gender</b>
  <li>code</b>
</ul>

#installation
##[1] You can clone the repository or download it.

##[2] You need to create a database and set your configurations as appropriate in the .env file but as you can see the .env file is available
and it uses a database called smis_

##[3] You need to run the migrations to set up the necessary tables

##[4] you can run the batch file <b>server.cmd</b> to start up the server and finally access your smis-local copy.


#Note
SMIS-local presents a simple documentation on usage after you open the served copy preset to localhost:8000


  
