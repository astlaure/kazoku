# Integrators

1. The working directory is *src/main/resources*
    1. /assets contains source sass and js files
    2. /static contains built css and js files with images or fonts etc
    3. /templates contains the html
    4. application.properties contains the app config
    
# Run the project with

1. Set the correct values for the app config *Do once*
2. Create the database *Do once*
    ```sql
    create database database_name;
    ```
3. Run the webserver (Tomcat)
    ```bash
   cmd.exe
   mvnw -Pdev spring-boot:run
   powershell.exe
   .\mvnw -Pdev spring-boot:run
   ```
4. Run the watch task
    ```bash
   npm run build:watch 
   ```
   
# Production Deployment

1. Run with -Pprod