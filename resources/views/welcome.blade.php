<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #000000ff, #2d2d2dff);
            color: #fff;
            margin: 0;
            padding: 0;
        }

        header {
            background: #111;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.6);
        }

        header h1 {
            font-size: 2.5rem;
            margin: 0;
            color: #ffcc00;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ff9800;
        }

        section {
            padding: 60px 20px;
            text-align: center;
        }

        /* INTRO SECTION */
        .intro h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .intro p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: auto;
        }

        .profile-pic {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #ffcc00;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.6);
        }

        /* PORTFOLIO SECTION */
        .card-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 40px;
        }

        .card {
            background: rgba(255, 255, 255, 0.08);
            padding: 30px;
            border-radius: 15px;
            width: 280px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.4);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-8px);
        }

        .card h3 {
            color: #ffcc00;
            margin-bottom: 15px;
        }

        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background: #ff9800;
            border-radius: 25px;
            color: white;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .btn:hover {
            background: #e68900;
        }

        footer {
            background: #111;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
            font-size: 0.9rem;
            color: #bbb;
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <header>
        <h1>✨ Welcome to My Website ✨</h1>
        <nav>
            <a href="#intro">Home</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
            <a href="/about">About Me</a>
        </nav>
    </header>

    <!-- INTRO SECTION -->
    <section id="intro" class="intro">
        <!-- Profile Picture Placeholder -->
        <img src="https://scontent.fcrk2-3.fna.fbcdn.net/v/t39.30808-6/518384132_24187565717561111_4206007168097896589_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=NVsMwbr5Ho8Q7kNvwGRDdBm&_nc_oc=Adn5bs2IF2OJGn-2F8KAbAc0eBkYxo4PIMOrZTY-rsve7bCIoBbrbUdrLgOobNPN6UI&_nc_zt=23&_nc_ht=scontent.fcrk2-3.fna&_nc_gid=02DkZ_0Y0bLtOtrC9qK4ew&oh=00_AfcUDpAaCbwIXLKj5WUnIwHnNxROhop4jH4Ja6jkWUbmig&oe=68E67B98" alt="Profile Picture" class="profile-pic">

        <h2>Hello, I’m <span style="color:#00c6ff;">Francois Gabriel P. Osea</span></h2>
        
    </section>

    <!-- PORTFOLIO SECTION -->
    <section id="portfolio">
        <h2>📂 Portfolio</h2>
        <div class="card-container">
            <div class="card">
                <h3>💻 Web Development</h3>
                <p>I build modern web applications using Laravel, React, and more.</p>
                <a href="#" class="btn">View Projects</a>
            </div>
            <div class="card">
                <h3>📱 Mobile Apps</h3>
                <p>Developing mobile solutions that connect people and businesses.</p>
                <a href="#" class="btn">View Apps</a>
            </div>
            <div class="card">
                <h3>⚙️ Systems</h3>
                <p>Custom systems for businesses like car dealerships and shops.</p>
                <a href="#" class="btn">View Systems</a>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact">
        <h2>📩 Get in Touch</h2>
        <p>Email me at: <span style="color:#00c6ff;">frosea@my.cspc.edu.ph</span></p>
        <a href="mailto:frosea@my.cspc.edu.ph" class="btn">Send Email</a>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>&copy; 2025 Francois Gabriel P. Osea | Built with ❤️ using Laravel</p>
    </footer>
</body>
</html>
