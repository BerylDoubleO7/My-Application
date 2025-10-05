<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Me</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #000000, #434343);
            color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: rgba(255, 255, 255, 0.05);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0,0,0,0.6);
            animation: fadeIn 1.5s ease;
        }

        h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            color: #ffcc00;
            text-shadow: 0 0 10px rgba(255, 204, 0, 0.6);
        }

        h2 {
            font-weight: normal;
            margin: 10px 0;
            font-size: 1.5rem;
        }

        .highlight {
            color: #00c6ff;
            font-weight: bold;
        }

        a.btn {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 25px;
            background: linear-gradient(135deg, #ff512f, #dd2476);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s ease;
        }

        a.btn:hover {
            background: linear-gradient(135deg, #dd2476, #ff512f);
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>About Me</h1>
        <h2>Name: <span class="highlight"><?php echo e($name); ?></span></h2>
        <h2>Email: <span class="highlight"><?php echo e($email); ?></span></h2>
        <a href="/welcome" class="btn">⬅ Back to Welcome</a>
    </div>
</body>
</html>
<?php /**PATH C:\Users\franc\OneDrive\Documents\CSPC\myapp\resources\views/about.blade.php ENDPATH**/ ?>