# Name Corrector

A small PHP application that accepts a name, appends it to `names.txt`, and displays the saved names on a separate page.

## Requirements

- PHP 8.3 or later (PHP 8.3 is used by the automated GitHub Actions checks).
- No Composer packages or database are currently required.

## Run locally on Windows

1. Open PowerShell in this project folder.
2. Check PHP is available:

   ```powershell
   php -v
   ```

   If PHP is installed in `C:\php` but is not on PATH, use `C:\php\php.exe` instead.

3. Start PHP's built-in development server:

   ```powershell
   php -S localhost:8000
   ```

4. Open http://localhost:8000 in your browser.
5. Keep the PowerShell window open while using the application. Press Ctrl+C to stop the server.

## Automated checks

GitHub Actions runs on pushes to `main`, pull requests targeting `main`, and manual workflow dispatch. It:

- Reports the PHP and Composer versions.
- Checks PHP syntax with `php -l`.
- Validates and installs Composer dependencies if a `composer.json` is added later.
- Starts PHP's built-in server and tests the form submission and saved-name display.

See the **Actions** tab in this repository for the latest result.

## Current project scope

The application uses a plain text file for storage. It does not currently use a framework, Composer packages, or a database. The PHP built-in server and the GitHub Actions runner are for development and testing, not production hosting.
