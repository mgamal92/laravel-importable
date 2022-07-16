# laravel-importable

This package provides a nice way to import large CSV files to database via _Laravel Queues_ and the ability to save the file to different destinations (Local, AWS, etc..) with little configurations.

## Installation
You can install the package via composer:

```bash
composer require mgamal92/laravel-importable
```

## Features
- Detect file headings Or Insert custom headings
- Choose the destination to save
- Follow the progress while importing
- Display error when importing failed
- Send Email when importing finished
- Integration with [Laravel Horizon](https://laravel.com/docs/9.x/horizon) to easily monitor key metrics of your queue system such as job throughput, runtime, and job failures.  _(may be later)_

## Usage
```php 

// Import and upload the file to specific destination
$uploadedFile->import($dest);

/** 
Specify the headings to be used in importing process.
This is an optional, the default is detecting the file heading.
**/
$uploadedFile->withHeadings(array $headings);

// If you need to detect any errors while importing process.
$uploadedFile->import($dest)->withErrors();

// Send Notification when the impoting process finished.
$uploadedFile->import($dest)->withNotification($email);

// Display the progress of the importing process.
$uploadFile->import($dest)->withProgress();

// You can use the method chaining
$uploadFile->import($dest)
           ->withErrors()
           ->withNotifications($email)
           ->withProgress();
```

## Testing
You can run the tests with:

``` bash
composer test
```

## Credits
- [Laravel Queues](https://laravel.com/docs/9.x/queues)

## License
This application is under the MIT License.
