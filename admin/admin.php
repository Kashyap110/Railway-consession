<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <nav>
        <div class="logo-name">
                <i class="uil uil-bars sidebar-toggle"></i>
            <span class="logo_name">Admin Portal</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="newrequest.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">New Requests</span>
                </a></li>
                <li><a href="renewalrequest.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Renewal Requests</span>
                </a></li>
                <li><a href="resubmission.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Resubmissions</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="../logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name" onclick="alert('Logged out successfully!');">Logout</span>
                </a></li>

            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-notes"></i>
                    <span class="text">Guidelines</span>
                </div>
                <br>
            <div class="boxes">
                <div class="box box1">
                    <span class="text"><ul><br>
                        <li>Read all the guidelines before filling out the form.</li><br>
                        <li>Filling of the Student details form is mandatory for the application of railway concession form.</li><br>
                        <li>All the information should be filled to one's complete knowledge.</li><br>
                        <li>Concession slip would be given only after the verification of application.</li><br>
                        <li>Upload any required documents in clearly visible pdf format.</li><br>
                        <li>Any kind of malpractices will not be tolerated.</li><br>
                        
                        
                    </ul></span>
                </div>
            </div>

        </div>
    </section>

    <script src="../js/dashboard.js"></script>
</body>
</html>
