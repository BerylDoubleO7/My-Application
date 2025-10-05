<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get Started</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #000000ff, #383838ff);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .container {
            background: rgba(0, 0, 0, 0.3);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            animation: fadeIn 1.5s ease;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
        }

        .btn {
            display: inline-block;
            padding: 15px 30px;
            background: #00c6ff;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.1);
            background: linear-gradient(135deg, #0072ff, #00c6ff);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Welcome to My Laravel Website</h1>
        <p>Click the button below to get started.</p>
        <a href="/welcome" class="btn">Go to Welcome Page</a>
    </div>
</body>
</html>
<?php /**PATH C:\Users\franc\OneDrive\Documents\CSPC\myapp\resources\views/home.blade.php ENDPATH**/ ?>