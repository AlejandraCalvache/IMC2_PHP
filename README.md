# BMI Calculator with PHP

This is a simple web application developed in PHP that allows you to calculate the Body Mass Index (BMI) from the weight and height provided by the user.

## Files

- **index.php**: Main application file.
- **style.css**: Style file for the user interface.

## Configuration and Execution

### 1. Local Execution

1. **Install a web server with PHP**:
If you do not have a web server with PHP, you can install [XAMPP](https://www.apachefriends.org/es/index.html) or [MAMP](https://www.mamp.info/en/), which include Apache and PHP.

2. **Place the files in the appropriate directory**:
Place all the files (`index.php`, `style.css`) inside the `htdocs` directory (in XAMPP) or the equivalent directory in MAMP.

3. **Run the web server**:
Open the XAMPP or MAMP control panel and start Apache.

4. **Access the application**:
Open your browser and go to [http://localhost](http://localhost) to see the BMI calculator.

### 2. Running with Docker

1. **Build the Docker image**:
Run the following command in the directory containing the `Dockerfile`:
```bash
docker build -t bmi-calculator-php .
