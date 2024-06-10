<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weather app</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
<!-- </head>
<body>
    <div>
    <select id="province-select">
        <option value="">Select Province</option>
    </select>
    <select id="district-select" style="display:none;">
        <option value="">Select District</option>
    </select>
</div>
    </div>
    <div class="card">
    <div class="search">
        <input type="text" id="search-input" placeholder="Enter Your City" spellcheck="false">
        <button id="search-button"><img src="img/images/search.png"></button>
      
    </div>

        <div class="weather">
            <img src="img/images/rain.png" class="weather-icon"><h1 class="temp">
                22 °C
            </h1>
            <h2>New York</h2>
            <div class="details">
                <div class="col">
                    <img src="img/images/humidity.png" alt="">
                    <div>
                        <p class="humidity">50%</p>
                        <p>Humidity</p>
                    </div>
                </div>
                <div class="col">
                    <img src="img/images/wind.png" alt="">
                    <div>
                        <p class="wind">15 km/h</p>
                        <p>Wind Speed</p>
                    </div>
                </div>
            </div>

        </div>


    </div>
    
</body>
</html> 
 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Forecast</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #00feba, #5b548a); /* Fixed background color with a gradient */
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 1400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }

        .search-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        select {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .weather-container {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 20px;
            padding: 20px;
            background-color: #1A4B96;
            border-radius: 8px;
        }

        .weather {
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
            background-color: #ddf1f1;
            border-radius: 8px;
        }

        .weather-icon,
        .col img {
            width: 50px;
            height: 50px;
        }

        .details {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }

        .col {
            text-align: center;
        }
    </style> -->
</head>
<body>
<!-- <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #00feba, #5b548a);
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        .search-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        select {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .weather-container {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 20px;
            padding: 20px;
            background-color: #1A4B96;
            border-radius: 8px;
        }
        .weather {
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        .weather-icon, .col img {
            width: 50px;
            height: 50px;
        }
        .details {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }
        .col {
            text-align: center;
        }
    </style> -->
</head>
<body>

<div class="container">
    <div class="search-container">
        <select id="province-select">
            <option value="">Select Province</option>
            <!-- Add options dynamically using JavaScript if needed -->
        </select>
        <select id="district-select">
            <option value="">Select District</option>
            <!-- Add options dynamically using JavaScript if needed -->
        </select>
    </div>
<div id="weather-container" class="weather-container"></div>

<script>
    const weatherData = [
        { day: 'Sunday', condition: 'rain', temp: '22 °C', city: 'New York', humidity: '50%', wind: '15 km/h' },
        { day: 'Monday', condition: 'sunshine', temp: '24 °C', city: 'Los Angeles', humidity: '60%', wind: '10 km/h' },
        { day: 'Tuesday', condition: 'cloudy', temp: '18 °C', city: 'Chicago', humidity: '55%', wind: '20 km/h' },
        { day: 'Wednesday', condition: 'rain', temp: '25 °C', city: 'Houston', humidity: '70%', wind: '5 km/h' },
        { day: 'Thursday', condition: 'sunshine', temp: '20 °C', city: 'Phoenix', humidity: '30%', wind: '10 km/h' },
        { day: 'Friday', condition: 'rain', temp: '23 °C', city: 'Philadelphia', humidity: '65%', wind: '12 km/h' },
        { day: 'Saturday', condition: 'cloudy', temp: '19 °C', city: 'San Antonio', humidity: '45%', wind: '8 km/h' }
    ];

    const container = document.getElementById('weather-container');

    weatherData.forEach(day => {
        const weatherDiv = document.createElement('div');
        weatherDiv.className = 'weather';
        
        let iconSrc;
        switch(day.condition) {
            case 'rain':
                iconSrc = 'img/images/rain.png';
                break;
            case 'sunshine':
                iconSrc = 'img/images/clear.png';
                break;
            case 'cloudy':
                iconSrc = 'img/images/clouds.png';
                break;
            default:
                iconSrc = 'img/images/default.png';
        }

        weatherDiv.innerHTML = `
        <div class=""card">
        <h3>${day.day}</h3>
            <img src="${iconSrc}" class="weather-icon" alt="${day.condition}">
            <h1 class="temp">${day.temp}</h1>
            <h2>${day.city}</h2>
            <div class="details">
                <div class="col">
                    <img src="img/images/humidity.png" alt="Humidity Icon">
                    <div>
                        <p class="humidity">${day.humidity}</p>
                        <p>Humidity</p>
                    </div>
                </div>
                <div class="col">
                    <img src="img/images/wind.png" alt="Wind Icon">
                    <div>
                        <p class="wind">${day.wind}</p>
                        <p>Wind Speed</p>
                    </div>
                </div>
            </div></div>
            
        `;

        container.appendChild(weatherDiv);
    });
</script>

</body>
</html> 




