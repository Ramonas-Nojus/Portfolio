<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Website</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
            color: #333;
        }

        .header {
            position: sticky;
            background: #000456;
            color: #fff;
            padding: 1rem 0;
            top: 0;
            z-index: 1000;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            padding: 0;
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #fff;
            font-size: 1rem;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #61dafb;
        }

        .hero {
            background: linear-gradient(to top right, #000456 0%, #ac99ff 100%);
            color: #fff;
            text-align: center;
        }

        .hero {
            position: fixed; /* Keeps the hero section fixed to the viewport */
            top: 0;
            left: 0;
            width: 100%; /* Full width */
            height: 40vh; /* Full height of the viewport */
            color: #fff;
            text-align: center;
            padding: 5rem 1rem;
            z-index: 1; /* Keeps the hero below other sections */
            display: flex; /* Center the content */
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .projects, .about, .footer {
            position: relative;
            z-index: 2; /* Ensures these sections hover over the hero */
            background: #fff; /* Provide a background to mask the hero */
            padding: 2rem 1rem;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .projects {
            margin-top: 60vh; /* Pushes the projects section below the fixed hero */
        }


        .hero h2 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .btn {
            background-color: #61dafb;
            color: #20232a;
            text-decoration: none;
            padding: 0.75rem 2rem;
            border-radius: 25px;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #21a1f1;
        }

        .projects {
            background: #ffffff;
            padding: 4rem 2rem;
            position: relative;
        }

        .projects-title {
            writing-mode: vertical-rl;
            transform: rotate(180deg);
            font-size: 1.5rem;
            font-weight: bold;
            text-align: left;
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%) rotate(180deg);
            z-index: 10; /* Ensure it stays on top */
        }

        @media (max-width: 768px) {
            .projects-title {
                writing-mode: horizontal-tb; /* Change to horizontal text for small screens */
                transform: none;
                position: static; /* Place it in normal document flow */
                text-align: center;
                margin-bottom: 1rem;
            }
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Default: 3 columns */
            gap: 2rem;
            margin-left: 4rem;
        }

        @media (max-width: 1024px) {
            .projects-grid {
                grid-template-columns: repeat(2, 1fr); /* 2 columns for medium screens */
                margin-left: 2rem;
            }
        }

        @media (max-width: 768px) {
            .projects-grid {
                grid-template-columns: 1fr; /* 1 column for small screens */
                margin-left: 0;
            }
        }



        .project {
            background-color: #ffffff00;
            padding: 2rem;
            border: 2px solid #ddd;
            border-radius: 10px;
            position: relative;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .project:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .project::before {
            content: attr(data-number);
            position: absolute;
            top: 1rem;
            right: 1rem;
            font-size: 3rem;
            font-weight: bold;
            color: rgba(0, 0, 0, 0.1);
        }

        .project h3 {
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }

        .project p {
            font-size: 1rem;
            line-height: 1.5;
            color: #555;
        }

        .about {
            margin: auto;
            width: 50%;
            padding: 3rem 1rem;
            background-color: #f4f4f4;
        }

        .about h2 {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2.5rem;
        }

        .about-content p {
            line-height: 1.8;
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }

        .footer {
            background: linear-gradient(to bottom right, #2229b4 0%, #ac99ff 100%);
            color: #fff;
            text-align: center;
            padding: 2rem 1rem;
        }

        .footer h2 {
            margin-bottom: 1rem;
            font-size: 1.8rem;
        }

        .social-links {
            margin-bottom: 1rem;
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .social-links a {
            text-decoration: none;
            color: #61dafb;
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: #21a1f1;
        }

        address {
            font-style: normal;
            font-size: 0.9rem;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .hero h2 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .btn {
                padding: 0.5rem 1.5rem;
                font-size: 0.9rem;
            }

            .projects-title {
                font-size: 2rem;
            }

            .about h2 {
                font-size: 2rem;
            }
        }

        a {
            text-decoration: none;
            color: black;
        }

        .project-image {
            width: 30%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 1rem;
            transition: transform 0.3s ease;
        }

        .project:hover .project-image {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <!-- Top Section -->
    <!-- <header class="header">
        <div class="container">
            <h1 class="logo">Portfolio</h1>
            <nav>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                </ul>
            </nav>
        </div>
    </header> -->

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>Noah Ram.</h2>
            <p>Portfolio</p>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects">
        <h2 class="projects-title">My Projects</h2>
        <div class="projects-grid">
            <a href="http://keyson.local">
                <div class="project" data-number="1">
                    <h3>Personal project - KeysON</h3>
                    <img src="./img/KeysON.png" alt="KeysON project" class="project-image">
                    <p>An interactive custom keyboard builder allowing users to design and visualize their own unique mechanical keyboards with a real-time preview.</p>
                </div>
            </a>
            <div class="project" data-number="2">
                <h3>Personal project - FloreDrop</h3>
                <img src="./img/FloreDrop.png" alt="KeysON project" class="project-image">
                <p>A minimalist jewelry store website created as a practice project, showcasing a simple product display and basic e-commerce features</p>
            </div>
            <div class="project" data-number="3">
                <h3>Personal project - GustoRano</h3>
                <img src="./img/GustoRano.png" alt="KeysON project" class="project-image">
                <p>A simple yet functional website that fetches and displays recipes from an external API, providing users with easy access to various meal ideas.</p>
            </div>
            <div class="project" data-number="4">
                <h3>Personal project - CMS</h3>
                <p>A dynamic social platform where users can create profiles, connect with others, share updates, and engage through interactive features like comments and reactions.</p>
            </div>
            <div class="project" data-number="5">
                <h3>Personal project - Niterria</h3>
                <p>A clean and responsive blog platform designed to share engaging articles and reviews, optimized for readability and user interaction.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="about-content">
            <h2>About Me</h2>
            <p>I’m Noah, a back-end web developer with a focus on PHP development. I also have experience working with technologies like HTML, CSS, JavaScript, and Python/Flask.
                I began coding at 14 and have spent the past years improving my skills through projects. My portfolio includes examples of PHP development, database management, and API integration.</p>
        </div>
    </section>

    <script>
        window.addEventListener("scroll", () => {
            const scrollPosition = window.scrollY;
            const heroSection = document.querySelector(".hero");
            
            // Adjust the transform to move the hero section slightly on scroll
            heroSection.style.transform = `translateY(${scrollPosition * -0.5}px)`; // Adjust amplitude here (0.3)
        });
    </script>
    

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-content">    
            <p>&copy; 2025 Noah Ram.</p>
        </div>
    </footer>
</body>
</html>
