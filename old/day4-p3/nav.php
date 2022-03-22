<style>
    ul li{
        display: inline;
        content: '|';
    }
    ul li::after{
        
        content: ' |';
    }
    ul li:last-child::after{
        content: '';
    }
    ul li a{
        text-decoration: none;
        color: darkred;
    }
</style>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="welcome.php">Welcome</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>