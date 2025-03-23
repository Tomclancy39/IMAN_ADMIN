<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALDERAAN CORPORATION</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Besley:ital,wght@0,400..900;1,400..900&family=DM+Serif+Text:ital@0;1&family=Great+Vibes&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Montaga&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&family=WindSong:wght@400;500&family=Yeseva+One&display=swap" rel="stylesheet">    <style>
       
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Merriweather', serif;
        }
        

        .topnav {
        background-color: #333;
        overflow: hidden;
        }

        body {
            overflow-x: hidden;
        }
        
        .container {
            background: url('Image/UHFURNITURESTORE.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            padding: 20px;
            position: relative;
        }
        
        .header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #5E4736;
            color: white;
            z-index: 10;
        }

        .header h2 {
            font-size: 1rem; 
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            color: white; 
            text-decoration: none; 
            font-family: 'Poppins', sans-serif; 
            font-weight: 300;
        }
        
        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            z-index: 5;
        }
        
        .content h1 {
            margin-top: 90px;
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
            
        }
        
        .content p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            line-height: 1.6;
        }
        
        
        .features-section {
            background-color: #453d33;
            padding: 10px 30px;
            color: white;
            margin-bottom: -15px;
        }
        
        .top-features {
            display: flex;
            justify-content: space-around;
            margin-bottom: 30px;
            flex-wrap: wrap;
            padding: 0 30px; 
        }
                
        .feature {
            display: flex;
            align-items: center;
            gap: 15px;
            max-width: 300px;
            margin: 10px;
        }
        
        .material-icons {
            font-size: 42px;
        }
        
        .feature-text h3 {
            font-size: 1rem;
            margin-bottom: 5px;
        }
        
        .feature-text p {
            font-size: 0.9rem;
        }
        
        .center-content-wrapper {
            background-color: #786C5D;
            padding: 40px 30px;
        }
        
        .center-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .image-container {
            width: 30%;
            min-width: 300px;
            margin: 10px;
            height: 300px; 
            overflow: hidden;
        }
        
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        
        .center-text {
            text-align: center;
            width: 30%;
            min-width: 300px;
            margin: 20px auto;
            font-size: 1.4rem;
            line-height: 1.4;
            color: white;
        }
        
        .center-content-wrapper {
    background-color: #786C5D;
    padding: 40px 30px;
    overflow: visible; 
}

        .footer {
    text-align: center;
    background-color: #5E4736;
    color: white;
    font-size: 0.9rem;
    padding:0.7rem;
}
    </style>

</head>
<body>
    <div class="container">
        <header class="header">
        <h2><a href="index.php" style="color: white; text-decoration: none; font-family: 'Poppins', sans-serif; font-weight: 300; float:left; padding: 1rem">Splater</a>
                <a href="Customer.php" style="color: white; text-decoration: none; font-family: 'Poppins', sans-serif; font-weight: 300; float: right; padding: 1rem">Customer Orders</a>
                <a href="Billing.php" style="color: white; text-decoration: none; font-family: 'Poppins', sans-serif; font-weight: 300; float: right; padding: 1rem">Billing</a>
                <a href="Inventory.php" style="color: white; text-decoration: none; font-family: 'Poppins', sans-serif; font-weight: 300; float: right; padding: 1rem">Inventory/Stocks</a>
                <a href="Overall.php" style="color: white; text-decoration: none; font-family: 'Poppins', sans-serif; font-weight: 300; float: right; padding: 1rem">Accounts</a>
        </h2>  </header>

        <div class="content">
            <h1 style="font-size:12rem">Splater</h1>
            <p style="background-color: #5E4736;">You are currently in the index of the admin wesbite</p>
        </div>

        <div class="content">
        </div>
    </div>

</body>

<footer class="footer" style="height: 5vh; text-align: center;">
    Copyright 2025
</footer>

</html>
