# AdminLTE Blade Components for Laravel 7+

[![Latest Stable Version](https://poser.pugx.org/dgvai/laravel-adminlte-components/v/stable)](https://packagist.org/packages/dgvai/laravel-adminlte-components)
[![Total Downloads](https://poser.pugx.org/dgvai/laravel-adminlte-components/downloads)](https://packagist.org/packages/dgvai/laravel-adminlte-components)
[![Latest Unstable Version](https://poser.pugx.org/dgvai/laravel-adminlte-components/v/unstable)](https://packagist.org/packages/dgvai/laravel-adminlte-components)
[![License](https://poser.pugx.org/dgvai/laravel-adminlte-components/license)](https://packagist.org/packages/dgvai/laravel-adminlte-components)
[![Monthly Downloads](https://poser.pugx.org/dgvai/laravel-adminlte-components/d/monthly)](https://packagist.org/packages/dgvai/laravel-adminlte-components)
[![Daily Downloads](https://poser.pugx.org/dgvai/laravel-adminlte-components/d/daily)](https://packagist.org/packages/dgvai/laravel-adminlte-components)
[![composer.lock](https://poser.pugx.org/dgvai/laravel-adminlte-components/composerlock)](https://packagist.org/packages/dgvai/laravel-adminlte-components

This package contains [Laravel Blade Components](https://laravel.com/docs/7.x/blade#components) for [AdminLTE 3](https://adminlte.io/docs/3.0/) free Boostrap admin panel UI Kit. Since, blade components are only available after Laravel 7, thus only laravel 7.x+ can use this package.

## Contents

<!-- TOC -->

- [AdminLTE Blade Components for Laravel 7+](#adminlte-blade-components-for-laravel-7)
    - [Contents](#contents)
    - [Installation](#installation)
    - [Configurations](#configurations)
    - [Components](#components)
        - [Widgets](#widgets)
    - [Changelog](#changelog)
    - [License](#license)

<!-- /TOC -->

## Installation

You can install the package via composer:

``` bash
    composer require dgvai/laravel-adminlte-components
```

## Configurations
You can use this package, stand alone with AdminLTE installed in your app. You just need to add an ``@yield('js')`` at the bottom of your <kbd>master</kbd> blade layout.

Or, if you use [jeroennoten/Laravel-AdminLTE](https://github.com/jeroennoten/Laravel-AdminLTE) package, then you do not need to add anything at ``master``. I will prefer to use this package.

## Components

### Widgets
**INFO BOX**
![Info Box](assets\info-box.png)
![Info Box Full](assets\info-box-full.png)

**MINIMUM USAGE**  
```html
<x-dg-info-box title="Order" text="12" />
```
**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE | DETAILS                                                                                    | REQUIRED | TYPE    |
|-----------|--------------------------------------------------------------------------------------------|----------|---------|
| title     | Title of the info box                                                                      | true     | string  |
| text      | Data text                                                                                  | true     | string  |
| bg        | Background Color of the icon. This follows bootstrap colors: success, info, primary... etc | false    | string  |
| icon      | The fontawesome icon class. Eg. ``fas fa-star``, ``fas fa-user-plus``                      | false    | string  |
| grad      | Use gradient color? ``true/false``                                                         | false    | boolean |
| full      | Use full INFO BOX? ``true/false``                                                          | false    | boolean |

**EXAMPLE**
```html
<x-dg-info-box bg="success" title="Yo title" text="123" icon="fas fa-star" :full="true" :grad="true"/>
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
