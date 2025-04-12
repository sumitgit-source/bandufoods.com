<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times Int'l College Admission Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        header {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #343a40;
        }

        h4 {
            margin-top: 20px;
            color: #6c757d;
        }

        form {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="tel"],
        input[type="email"],
        input[type="number"] {
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #007bff;
            border: none;
            border-radius: 4px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <header class="fixed-top">
        <nav class="navbar navbar-dark bg-dark fw-light text-center">
            <center>

                <span class="navbar-brand mb-0 h1 text-center fw-light">Times Int'l College Admission Form</span>
            </center>
        </nav>
    </header>
    <div style="height: 50vh; background: url(https://timescollege.edu.np/assets/old/Inquiry.png); width: 100%;">

    </div>

    <div class="container mt-0 pt-2">
        <h2 class="text-center my-4">Admission Form</h2>
        <form action="/controllers/handle-admission.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="studentFirstName">Student's Firstname</label>
                    <input type="text" class="form-control" id="studentFirstName" name="studentFirstName" placeholder="Firstname">
                </div>
                <div class="form-group col-md-4">
                    <label for="studentMiddleName">Student's Middlename</label>
                    <input type="text" class="form-control" id="studentMiddleName" name="studentMiddleName" placeholder="Middlename">
                </div>
                <div class="form-group col-md-4">
                    <label for="studentLastName">Student's Lastname</label>
                    <input type="text" class="form-control" id="studentLastName" name="studentLastName" placeholder="Lastname">
                </div>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>
            <div class="form-group">
                <label for="permanentAddress">Permanent Address</label>
                <input type="text" class="form-control" id="permanentAddress" name="permanentAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="tel" class="form-control" id="contact" name="contact" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <label for="email">Email (optional)</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            </div>

            <h4>Father's Information</h4>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="fatherFirstName">Father's Firstname</label>
                    <input type="text" class="form-control" id="fatherFirstName" name="fatherFirstName" placeholder="Firstname">
                </div>
                <div class="form-group col-md-4">
                    <label for="fatherMiddleName">Father's Middlename</label>
                    <input type="text" class="form-control" id="fatherMiddleName" name="fatherMiddleName" placeholder="Middlename">
                </div>
                <div class="form-group col-md-4">
                    <label for="fatherLastName">Father's Lastname</label>
                    <input type="text" class="form-control" id="fatherLastName" name="fatherLastName" placeholder="Lastname">
                </div>
            </div>

            <h4>Mother's Information</h4>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="motherFirstName">Mother's Firstname</label>
                    <input type="text" class="form-control" id="motherFirstName" name="motherFirstName" placeholder="Firstname">
                </div>
                <div class="form-group col-md-4">
                    <label for="motherMiddleName">Mother's Middlename</label>
                    <input type="text" class="form-control" id="motherMiddleName" name="motherMiddleName" placeholder="Middlename">
                </div>
                <div class="form-group col-md-4">
                    <label for="motherLastName">Mother's Lastname</label>
                    <input type="text" class="form-control" id="motherLastName" name="motherLastName" placeholder="Lastname">
                </div>
            </div>

            <h4>Education</h4>
            <div class="col-12 m-0 p-0 row">
                <div class="col-6 m-0 p-0">
                    <div class="form-group">
                        <label for="gpaSEE">GPA</label>
                        <input type="text" class="form-control" id="gpaSEE" name="gpaSEE" placeholder="GPA in SEE">
                    </div>
                </div>
                <div class="col-6 m-0 p-0">
                    <div class="form-group">
                        <label for="gpaPlus2">GPA in</label>
                        <select name="gpa_in" id="gpaPlus2" class="form-control">
                            <option value="see">SEE</option>
                            <option value="+2">+2</option>
                            <option value="bachelors">Bachelors</option>
                        </select>
                    </div>
                </div>
                <div class="col-6 m-0 p-0 mb-2">
                    <input type="text" class="form-control" name="college_from" placeholder="College">
                </div>
                <div class="col-6 m-0 p-0 mb-2">
                    <input type="text" class="form-control" name="district" placeholder="District">
                </div>
            </div>
            <!-- WHAT YOU WANT TO STUDY -->
            <div class="col-12 m-0 p-0 row">
                <div class="col-6 m-0 p-0">
                    <div class="form-group">
                        <label for="gpaPlus2">What you want to study?</label>
                        <select name="subject_choosed" id="gpaPlus2" class="form-control">
                            <option value="+2">+2</option>
                            <option value="bachelors">Bachelors</option>
                            <option value="masters">Masters</option>
                        </select>
                    </div>
                </div>
                <div class="col-6 m-0 p-0">
                    <div class="form-group">
                        <label for="gpaPlus2">Choose Faculty</label>
                        <select name="faculty_choosed" id="" class="form-control">
                            <option value="science">Science</option>
                            <option value="management">Management</option>
                            <!-- <option value="bachelors">Masters</option> -->
                        </select>
                    </div>
                </div>
                <div class="col-6 m-0 p-0">
                    <div class="form-group">
                        <label for="gpaPlus2">Selected Entrance Date</label>
                        <select name="selected_entrance_date" id="" class="form-control">
                            <option value="19/03/2081">Asar 19, 8AM</option>
                            <option value="26/03/2081">Asar 26, 11 AM</option>
                            <!-- <option value="bachelors">Masters</option> -->
                        </select>
                    </div>
                </div>
                <!-- <div class="col-6 m-0 p-0 mb-2">
                    <input type="text" class="form-control" name="college_from" placeholder="College">
                </div>
                <div class="col-6 m-0 p-0 mb-2">
                    <input type="text" class="form-control" name="district" placeholder="District">
                </div> -->
            </div>
            <!--  -->

            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>