<?php
// Database connection setup
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pemweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add your main PHP logic here
?>

<html>
    <head>
        <title>Profil</title>
        <link rel="stylesheet" type="text/css" href="profilpage.css">
    </head>
    <body>
        <nav class="navbar">
            <div class="navbar-logo">StudiTips</div>
            <div class="navbar-nav">
                <a href="main_page.html">Home</a>
                <a href="profil.html">Profil</a>
                <a href="table of contents fix.html">Kategori</a>
                <a href="register.html">sign in</a>
            </div>
        </nav>
        <div class="container">
            <div class="sidebar-profile">
                <div class="sp-text">
                    <h3>Set Up Your Profile!</h3>
                    <img src="profil.jpg" class="rounded-circle" width="150" alt="profile picture">
                    <input type="text" class="no-box" placeholder="Kelompok 10">
                </div>
            </div>
            <div class="sidebar-container">
                <div class="sc-text">
                    <h3>About me</h3>
                    <div class="right-panel">
                        <input placeholder="Name" type="text" id="name"/>
                        <input placeholder="Email" type="email" id="email"/>
                        <input placeholder="Date of Birth" type="date" id="dob"/>
                        <input placeholder="Phone" type="text" id="phone"/>
                        <div class="gender">
                            <label>Gender:</label>
                            <label>
                                <input name="gender" type="radio" value="male" id="male"/> Male
                            </label>
                            <label>
                                <input name="gender" type="radio" value="female" id="female"/> Female
                            </label>
                        </div>
                        <div class="buttons">
                            <button class="cancel" id="cancelBtn">Cancel</button>
                            <button class="save" id="saveBtn">Save</button>
                        </div>
                    </div>
                </div>        
            </div>
        </div>

        <script>
            // Fungsi untuk menyimpan profil
            function saveProfile() {
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const dob = document.getElementById('dob').value;
                const phone = document.getElementById('phone').value;
                const gender = document.querySelector('input[name="gender"]:checked') ? document.querySelector('input[name="gender"]:checked').value : '';

                if (name && email && dob && phone && gender) {
                    alert("Profile Saved!");
                    console.log('Profile Information:');
                    console.log('Name:', name);
                    console.log('Email:', email);
                    console.log('Date of Birth:', dob);
                    console.log('Phone:', phone);
                    console.log('Gender:', gender);
                } else {
                    alert("Please fill all fields.");
                }
            }

            // Fungsi untuk membatalkan perubahan
            function cancelProfile() {
                document.getElementById('name').value = '';
                document.getElementById('email').value = '';
                document.getElementById('dob').value = '';
                document.getElementById('phone').value = '';
                document.querySelectorAll('input[name="gender"]').forEach(input => input.checked = false);
            }

            // Menambahkan event listener ke tombol
            document.getElementById('saveBtn').addEventListener('click', saveProfile);
            document.getElementById('cancelBtn').addEventListener('click', cancelProfile);
        </script>
    </body>
</html>
