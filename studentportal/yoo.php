<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="crstyle.css">
</head>
<body>
    <div class="container">
        <div class="container3">
            <span>
                <p>
                    2021/2022 ALPHA SEMESTER REGISTRATION
                </p>
            </span><br>
            <span>
               <p>LASTNAME FIRSTNAME MIDDLENAME REGN0 - MATRICNO</p> 
            </span><br>
            <span>
                <p> Level : 300 Registration Status: Regular</p>
            </span><br>
            <span>
                <p>Program: Management Information System</p>
            </span><br>
        </div>
        <header>
            <br><p>Select Courses to Register</p>
        </header>
        
        <div class="container2">
            <form action="crconnect.php" method="post">
                <table>
                    <tr><th>Course Code</th> <th>Title</th> <th>Unit</th> <th>Type</th> <th>Action</th> </tr>
                    <tr>
                        <td>BFN311</td> <td>Business Finance II</td> <td>3</td> <td>C</td> <td><input type="radio" name="Enroll" id="button" value="Enroll">  Enroll  </td>
                    </tr>

                    <tr>
                        <td>BUS313</td> <td>Commercial Law</td> <td>3</td> <td>C</td> <td><input type="radio" name="BUS313" id="button" value="BUS313">  Enroll</td> 
                    </tr>

                    <tr>
                        <td>CBS211</td> <td>Mathematics for Business and Social Sciences II</td> <td>3</td> <td>E</td> <td><input type="radio" name="CBS211" id="button" value="CBS211">  Enroll</td>
                    </tr>

                    <tr>
                        <td>CIT310</td> <td>Cyber Security Specialist - Application Security</td> <td>0</td> <td>V</td> <td><input type="radio" name="CIT310" id="button" value="CIT310">  Enroll</td>
                    </tr>

                    <tr>
                        <td>CSC310</td> <td>Internet Programming</td> <td>2</td> <td>C</td> <td><input type="radio" name="CSC310" id="button" value="CSC310">  Enroll</td>
                    </tr>

                    <tr>
                        <td>CSC312</td> <td>Fundamentals of Data Structures</td> <td>2</td> <td>C</td> <td><input type="radio" name="CSC312" id="button" value="CSC312">  Enroll</td>
                    </tr>

                    <tr>
                        <td>CSC313</td> <td>Object-Oriented Programming</td> <td>2</td> <td>C</td> <td><input type="radio" name="CSC313" id="button" value="CSC313">  Enroll</td>
                    </tr>

                    <tr>
                        <td>CSC317</td> <td>System Analysis and Design</td> <td>2</td> <td>C</td> <td><input type="radio" name="CSC317" id="button" value="CSC317">  Enroll</td>
                    </tr>

                    <tr>
                        <td>EDS311</td> <td>Entrepreneurial Development Studies V</td> <td>2</td> <td>V</td> <td><input type="radio" name="EDS311" id="button" value="EDS311">  Enroll</td>
                    </tr>

                    <tr>
                        <td>GST311</td> <td>History and Philosophy of Science</td> <td>2</td> <td>U</td> <td><input type="radio" name="GST311" id="button" value="GST311">  Enroll</td>
                    </tr>

                    <tr>
                        <td>MIS316</td> <td>Research Methods</td> <td>2</td> <td>C</td> <td><input type="radio" name="MIS316" id="button" value="MIS316">  Enroll</td>
                    </tr>

                    <tr>
                        <td>TMC311</td> <td>Total Man Concept V</td> <td>2</td> <td>V</td> <td><input type="radio" name="TMC311" id="button" value="TMC311">  Enroll</td>
                    </tr>

                    <tr>
                        <td>TMC312</td> <td>Total Man Concept –Sports V</td> <td>0</td> <td>V</td> <td><input type="radio" name="TMC312" id="button" value="TMC312">  Enroll</td>
                    </tr>
                    <tr>
                        <th>Total unit</th> <td></td><th>23</th><td></td><td><input type="submit" id="button" value="Register"></td>
                    </tr>
                </table>
            </form>
        </div>

    </div>
    
</body>
</html>