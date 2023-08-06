<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="Form.css">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
   <title>Responsive Regisration Form </title>
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="Home.php">
              
            <div class="form first">
                <div class="details personal">
                    <span class="title">Car Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Car Name</label>
                            <input type="text" placeholder="Enter Your Car Name" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Manufacturing</label>
                            <input type="date" placeholder="Enter Date of Manufacturing" required>
                        </div>

                        <div class="input-field">
                            <label>Color</label>
                            <input type="text" placeholder="Enter Color of Car" required>
                        </div>

                        <div class="input-field">
                            <label>Model Number</label>
                            <input type="text" placeholder="Enter Model Number" required>
                        </div>

                        <div class="input-field">
                            <label>Power</label>
                            <select required>
                                <option selected>Select Engine Power</option>
                                <option>300cc</option>
                                <option>700cc</option>
                                <option>800cc</option>
                                <option>1000cc</option>
                                <option>1200cc</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Num Plate</label>
                            <input type="text" placeholder="Enter Number on Plate" required>
                        </div>
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">Customer Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>ID Num</label>
                            <input type="text" placeholder="Enter CNIC Number" required>
                        </div>

                        <div class="input-field">
                            <label>Driving License</label>
                            <input type="text" placeholder="Enter Driving License Number" required>
                        </div>

                        <div class="input-field">
                            <label>Customer Name </label>
                            <input type="text" placeholder="Enter Customer Name" required>
                        </div>

                        <div class="input-field">
                            <label>Issued State</label>
                            <input type="text" placeholder="Enter Issued State" required>
                        </div>

                        <div class="input-field">
                            <label>Issued Date</label>
                            <input type="date" placeholder="Enter your Issued date" required>
                        </div>

                        <div class="input-field">
                            <label>Return Date</label>
                            <input type="date" placeholder="Enter Return Date" required>
                        </div>
                    </div>

                    
                        <button type="submit" class="btnText">Rent Now</button>
                        <i class="uil uil-navigator"></i>
                    
                </div> 
            </div>
        </form>

    <script src="main.js"></script>
</body>
</html>