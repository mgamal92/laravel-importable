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
Route::middleware('importer')->group(function () {
    // all files will be imported automatically
    Route::post('import-csv-files', 'UploadController@index');
});
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
