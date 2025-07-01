<?php
session_start();

// Check if the user is logged in, otherwise redirect to login page
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poppleton Dog Show</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:wght@600&display=swap" rel="stylesheet"> 
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('dogPic.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            line-height: 1.6;
        }
        header {
            background: linear-gradient(45deg, #00bcd4, #009688);
            color: white;
            text-align: center;
            padding: 70px 20px;
            border-bottom: 5px solid #00bcd4;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
        }
        header:hover {
            background: linear-gradient(45deg, #009688, #00bcd4);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }
        header h1 {
            font-family: 'Lobster', cursive; 
            font-size: 4rem;
            margin: 0;
            text-transform: uppercase;
        }
        /* Logout Button Styling */
        .logout-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #ff5722;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .logout-btn:hover {
            background-color: #e64a19;
            transform: translateY(-2px);
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-top: 30px;
            transition: all 0.3s ease;
        }
        .container:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }
        .message {
            margin: 20px 0;
            font-size: 26px;
            text-align: center;
            color: #00bcd4;
            font-weight: bold;
            font-family: 'Poppins', sans-serif;
            animation: highlight 2s ease-in-out;
            transition: color 0.3s ease-in-out;
        }
        .message:hover {
            color: #009688;
        }
        @keyframes highlight {
            0% {
                background-color: transparent;
                color: #333;
            }
            50% {
                background-color: #00bcd4;
                color: white;
                padding: 10px;
                border-radius: 5px;
            }
            100% {
                background-color: transparent;
                color: #00bcd4;
            }
        }
        h2 {
            font-size: 2.5rem;
            color: #00bcd4;
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
            transition: color 0.3s ease-in-out;
        }
        h2:hover {
            color: #009688;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-family: 'Poppins', sans-serif;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        table:hover {
            transform: scale(1.01);
        }
        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
            transition: background-color 0.3s ease;
        }
        th {
            background-color: #00bcd4;
            color: white;
            font-size: 1.1rem;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }
        td {
            background-color: #f9f9f9;
            font-size: 1rem;
        }
        tr:nth-child(even) td {
            background-color: #f1f1f1;
        }
        tr:hover td {
            background-color: #e0f7fa;
        }
        td a {
            color: #00bcd4;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        td a:hover {
            color: #009688;
            text-decoration: underline;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            letter-spacing: 1px;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2.5rem;
            }
            .container {
                width: 95%;
                padding: 20px;
            }
            table th, table td {
                font-size: 0.9rem;
                padding: 12px;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Poppleton Dog Show</h1>
        <form action="logout.php" method="post">
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </header>

    <div class="container">
        <div class="message">
            Welcome to Poppleton Dog Show! This year 50 owners entered 300 dogs in 10 events!
        </div>

        <h2>Top 10 Dogs</h2>
        <table>
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Dog Name</th>
                    <th>Breed</th>
                    <th>Average Score</th>
                    <th>Owner</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Emily</td>
                    <td>Rottweiler</td>
                    <td>10.0000</td>
                    <td><a href="owner1.html">Dominic Stewart</a></td>
                    <td><a href="mailto:freddie.saunders@gmail.com">freddie.saunders@gmail.com</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Henry</td>
                    <td>Boxer</td>
                    <td>9.0000</td>
                    <td><a href="owner2.html">Lee Edwards</a></td>
                    <td><a href="mailto:elsie25@yahoo.com">elsie25@yahoo.com</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Vicky</td>
                    <td>Mastiff</td>
                    <td>8.6667</td>
                    <td><a href="owner3.html">Harrison Baker</a></td>
                    <td><a href="mailto:georgia.harrison@hotmail.com">georgia.harrison@hotmail.com</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Craig</td>
                    <td>Bloodhound</td>
                    <td>8.5000</td>
                    <td><a href="owner4.html">Sienna Hunt</a></td>
                    <td><a href="mailto:victoria97@hotmail.co.uk">victoria97@hotmail.co.uk</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Jacob</td>
                    <td>Boxer</td>
                    <td>8.5000</td>
                    <td><a href="owner5.html">Luke Wright</a></td>
                    <td><a href="mailto:jodie90@yahoo.co.uk">jodie90@yahoo.co.uk</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Ruby</td>
                    <td>Mastiff</td>
                    <td>8.0000</td>
                    <td><a href="owner6.html">Alfie Ellis</a></td>
                    <td><a href="mailto:drose@hotmail.com">drose@hotmail.com</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Lucy</td>
                    <td>Labradoodle</td>
                    <td>8.0000</td>
                    <td><a href="owner7.html">Carole Robertson</a></td>
                    <td><a href="mailto:awalsh@gmail.com">awalsh@gmail.com</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Sonia</td>
                    <td>Bulldog</td>
                    <td>7.5000</td>
                    <td><a href="owner8.html">Amber Taylor</a></td>
                    <td><a href="mailto:philip23@gmail.co.uk">philip23@gmail.co.uk</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Daniel</td>
                    <td>Terrier</td>
                    <td>7.5000</td>
                    <td><a href="owner9.html">Mark Morgan</a></td>
                    <td><a href="mailto:selina.saunders@yahoo.co.uk">selina.saunders@yahoo.co.uk</a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Amber</td>
                    <td>Pug</td>
                    <td>7.5000</td>
                    <td><a href="owner9.html">Mark Morgan</a></td>
                    <td><a href="mailto:selina.saunders@yahoo.co.uk">selina.saunders@yahoo.co.uk</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer>
        &copy; 2024 Poppleton Dog Show. All rights reserved.
    </footer>

</body>
</html>
