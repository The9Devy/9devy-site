<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9Devy</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        body {
            background-color: #F5F5F5;
        }
        header {
            background-color: #007BFF;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        nav {
            width: 250px;
            background-color: #FFFFFF;
            height: 100vh;
            position: fixed;
            padding: 1rem;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        nav ul {
            list-style: none;
        }
        nav ul li {
            margin: 1rem 0;
        }
        nav ul li a {
            text-decoration: none;
            color: #007BFF;
            font-weight: 500;
        }
        nav ul li a:hover {
            color: #0056b3;
        }
        main {
            margin-left: 270px;
            padding: 2rem;
        }
        .search-bar {
            margin: 1rem 0;
            display: flex;
            gap: 0.5rem;
        }
        .search-bar input {
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
        }
        .search-bar button {
            padding: 0.5rem 1rem;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .search-bar button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to 9Devy</h1>
        <p>A creative studio specializing in videography, photography, and social media optimization.</p>
    </header>
    <nav>
        <ul>
            <li><a href="#">About WordPress</a></li>
            <li><a href="#">Get Involved</a></li>
            <li><a href="#">Showcase</a></li>
            <li><a href="#">Learn WordPress</a></li>
            <li><a href="#">Documentation</a></li>
            <li><a href="#">Developers</a></li>
            <li><a href="#">Feedback</a></li>
            <li><a href="#">Plugins</a></li>
            <li><a href="#">Themes</a></li>
            <li><a href="#">Patterns</a></li>
        </ul>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <button>Search</button>
        </div>
    </nav>
    <main>
        <h2>Content Area</h2>
        <p>This is where your main content will go. Add more sections, images, or cards here.</p>
    </main>
</body>
</html>