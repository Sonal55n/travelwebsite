<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
        }
        
        nav {
            background-color: #FDFAF5;
            color: black;
            padding: 1rem;
            position: relative;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            height: 100px; /* Increased to accommodate larger logo */
        }
        
        .logo {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.5rem;
            font-weight: bold;
            height: 100px;
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 100px; /* Increased from 40px to 100px */
            max-width: 100%;
            object-fit: contain;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
            margin-left: auto;
        }
        
        .nav-links li {
            margin-left: 2rem;
        }
        
        .nav-links a {
            color: black;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s;
            font-weight: 500;
        }
        
        .nav-links a:hover {
            color: #555;
        }
        
        .hamburger {
            display: none;
            cursor: pointer;
            margin-left: auto;
        }
        
        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: black;
            margin: 5px;
            transition: all 0.3s ease;
        }
        
        @media (max-width: 768px) {
            .nav-links {
                position: absolute;
                right: 0;
                top: 100%;
                background-color: #FDFAF5;
                flex-direction: column;
                width: 100%;
                text-align: center;
                clip-path: circle(0px at 90% -10%);
                -webkit-clip-path: circle(0px at 90% -10%);
                transition: all 0.5s ease-out;
                pointer-events: none;
                box-shadow: 0 5px 5px rgba(0,0,0,0.1);
            }
            
            .nav-links.active {
                clip-path: circle(1000px at 90% -10%);
                -webkit-clip-path: circle(1000px at 90% -10%);
                pointer-events: all;
            }
            
            .nav-links li {
                margin: 1rem 0;
                opacity: 0;
            }
            
            .nav-links.active li {
                opacity: 1;
            }
            
            .hamburger {
                display: block;
                z-index: 100;
            }
            
            .logo {
                position: static;
                transform: none;
                margin: 0 auto;
                height: auto;
                margin-left:18vh;
            }
            
            .nav-container {
                height: auto;
                padding: 1rem 0;
            }
        }
        
        /* Animation for hamburger to X */
        .hamburger.active div:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
            background-color: black;
        }
        
        .hamburger.active div:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger.active div:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
            background-color: black;
        }
        
        /* Animation for nav links */
        @keyframes navLinkFade {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-container">
            <div class="logo">
                <img src="photos/logo.jpg" alt="Company Logo">
            </div>
            
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="gallery.php">gallery</a></li>
                <!--<li><a href="#">visit ladakh</a></li>-->
                <li><a href="contact.php">Contact us</a></li>
            </ul>
            
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </nav>

    <script>
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        const navLinksItems = document.querySelectorAll('.nav-links li');
        
        hamburger.addEventListener('click', () => {
            // Toggle nav
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('active');
            
            // Animate links
            navLinksItems.forEach((link, index) => {
                if (link.style.animation) {
                    link.style.animation = '';
                } else {
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
                }
            });
        });
    </script>
</body>
</html>