# Install Laravel Requierements.

- Install php >= v8.0
- Install composer (last version)
- Install Xampp or Lamp 

# Steps

- <p>Clone the repository by <b>HTTPS</b> or <b>SSH</b>: <a href="https://github.com/joelcede/Alcolicos_Anonimos">https://github.com/joelcede/Alcolicos_Anonimos</a>
</p>

- <P>Create an <b>.env</b> file in reto root and add the incoming <a href="https://www.notion.so/Alcoh-licos-An-nimos-a6b16230bec14a3883193c796bf71988#a76e71e8600f4f9ebe21413cead6d1d5">link</a>
</P>

- <p>Create Schema <b>DB_Sistema_AA</b> with<br> 
    <b>User</b> and <b>Password</b> = root,<br>
    <b>Host</b> = 127.0.0.1 and<br>
    <b>DBPort</b> = 3306
</p>

- Execute the comand `composer install` in case of error execute the command `composer install --ignore-platform-reqs` or `composer update --ignore-platform-reqs`

- Use `php artisan migrate` for migrate tables database

- composer update
- Finally executed the comand `php artisan serve`
  
# fix bug install not found
- If you have any problem create a Issue in github
