# AdminLTE Blade Components for Laravel 7+

[![Latest Stable Version](https://poser.pugx.org/dgvai/laravel-adminlte-components/v/stable)](https://packagist.org/packages/dgvai/laravel-adminlte-components)
[![Total Downloads](https://poser.pugx.org/dgvai/laravel-adminlte-components/downloads)](https://packagist.org/packages/dgvai/laravel-adminlte-components)
[![Latest Unstable Version](https://poser.pugx.org/dgvai/laravel-adminlte-components/v/unstable)](https://packagist.org/packages/dgvai/laravel-adminlte-components)
[![License](https://poser.pugx.org/dgvai/laravel-adminlte-components/license)](https://packagist.org/packages/dgvai/laravel-adminlte-components)
[![Monthly Downloads](https://poser.pugx.org/dgvai/laravel-adminlte-components/d/monthly)](https://packagist.org/packages/dgvai/laravel-adminlte-components)
[![Daily Downloads](https://poser.pugx.org/dgvai/laravel-adminlte-components/d/daily)](https://packagist.org/packages/dgvai/laravel-adminlte-components)
[![composer.lock](https://poser.pugx.org/dgvai/laravel-adminlte-components/composerlock)](https://packagist.org/packages/dgvai/laravel-adminlte-components)

This package contains [Laravel Blade Components](https://laravel.com/docs/7.x/blade#components) for [AdminLTE 3](https://adminlte.io/docs/3.0/) free Boostrap admin panel UI Kit. Since, blade components are only available after Laravel 7, thus only laravel 7.x+ can use this package.

## Contents

<!-- TOC -->

- [AdminLTE Blade Components for Laravel 7+](#adminlte-blade-components-for-laravel-7)
    - [Contents](#contents)
    - [Installation](#installation)
    - [Configurations](#configurations)
    - [Components](#components)
        - [Widgets](#widgets)
            - [**INFO BOX**](#info-box)
            - [**SMALL BOX**](#small-box)
            - [**CARDS**](#cards)
            - [**ALERT**](#alert)
            - [**CALLOUT**](#callout)
            - [**PROGRESS**](#progress)
            - [**PROFILE FLAT**](#profile-flat)
            - [**PROFILE WIDGET**](#profile-widget)
            - [**MODAL**](#modal)
            - [**DATATABLE**](#datatable)
        - [Form Components](#form-components)
            - [INPUT](#input)
            - [INPUT-FILE](#input-file)
            - [INPUT-COLOR](#input-color)
            - [INPUT-DATE](#input-date)
            - [INPUT-SWITCH](#input-switch)
            - [INPUT-TAG](#input-tag)
            - [SELECT](#select)
            - [SELECT2](#select2)
            - [SELECT-ICON](#select-icon)
            - [TEXTAREA](#textarea)
            - [TEXT-EDITOR](#text-editor)
            - [SUBMIT](#submit)
    - [Summary](#summary)
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

#### **INFO BOX**  
![Info Box](assets/info-box.png)  
![Info Box Full](assets/info-box-full.png)  

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

#### **SMALL BOX**  
![Small Box](assets/small-box.png)

**MINIMUM USAGE**  
```html
<x-dg-small-box title="New User" text="500" />
```
**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE | DETAILS                                                                                    | REQUIRED | TYPE    |
|-----------|--------------------------------------------------------------------------------------------|----------|---------|
| title     | Title of the info box                                                                      | true     | string  |
| text      | Data text                                                                                  | true     | string  |
| bg        | Background Color of the icon. This follows bootstrap colors: success, info, primary... etc | false    | string  |
| icon      | The fontawesome icon class. Eg. ``fas fa-star``, ``fas fa-user-plus``                      | false    | string  |
| url       | The url to follow.                                                                         | false    | string  |
| urlText   | Text of the HyperLink.                                                                     | false    | string  |
| loading   | Set loading state ``true/false``                                                           | false    | boolean |

**EXAMPLE**
```html
<x-dg-small-box title="Small box" text="500" bg="warning" url="#" urlText="See More" loading="false" />
```

#### **CARDS**  
![Cards](assets/cards.png)

**MINIMUM USAGE**  
```html
<x-dg-card title="Title">
    ...
</x-dg-card>
```
**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE   | DETAILS                                                                                    | REQUIRED | TYPE    |
|-------------|--------------------------------------------------------------------------------------------|----------|---------|
| title       | Title of the Card                                                                          | true     | string  |
| bg          | Background Color of the icon. This follows bootstrap colors: success, info, primary... etc | false    | string  |
| collapsed   | Is Collapsed? ``true/false``                                                               | false    | boolean |
| removable   | Is removable? ``true/false``                                                               | false    | boolean |
| maximizable | Is maximizable? ``true/false``                                                             | false    | boolean |
| disabled    | Is disabled? ``true/false``                                                                | false    | boolean |
| outline     | Is outlined? ``true/false``                                                                | false    | boolean |
| full        | Is full background? ``true/false``                                                         | false    | boolean |

**EXAMPLE**
```html
<x-dg-card title="Title" bg="primary" :outline="true" :full="true" :collapsed="false" :maximizable="true"           :removable="true" :disabled="false">
    ...
</x-dg-card>
```

#### **ALERT**  
![Alerts](assets/alert.png)

**MINIMUM USAGE**  
```html
<x-dg-alert title="Alert!">
    This is alert
</x-dg-alert>
```
**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE   | DETAILS                                                       | REQUIRED | TYPE    |
|-------------|---------------------------------------------------------------|----------|---------|
| title       | Title of the Alert                                            | true     | string  |
| type        | Type of alert. Boostrap types: success, info, primary,... etc | false    | string  |
| dismissable | Is the alert dismissable? ``true/false``                      | false    | boolean |

**EXAMPLE**
```html
<x-dg-alert type="danger" title="Error!" :dismissable="true">
    This is alert
</x-dg-alert>
```

#### **CALLOUT**  
![Alerts](assets/callout.png)

**MINIMUM USAGE**  
```html
<x-dg-callout>This is callout</x-dg-callout>
```
**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE | DETAILS                                                       | REQUIRED | TYPE   |
|-----------|---------------------------------------------------------------|----------|--------|
| title     | Title of the Callout                                          | false    | string |
| type      | Type of alert. Boostrap types: success, info, primary,... etc | false    | string |

**EXAMPLE**
```html
<x-dg-callout type="warning" title="Oops!">
    This is callout
</x-dg-callout>
```

#### **PROGRESS**  
![Alerts](assets/progress.png)

**MINIMUM USAGE**  
```html
<x-dg-progress value="56"/>
```
**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE | DETAILS                                                             | REQUIRED | TYPE    |
|-----------|---------------------------------------------------------------------|----------|---------|
| bg        | Type of background. Boostrap backgd: success, info, primary,... etc | false    | string  |
| size      | Size or progress bar: sm, xs, xxs                                   | false    | string  |
| value     | Value of progress.                                                  | true     | numeric |
| stripped  | Is stripped design? ``true/false``                                  | false    | boolean |
| vertical  | Is vertical? ``true/false``                                         | false    | boolean |

**EXAMPLE**
```html
<x-dg-progress value="56" bg="danger" size="sm" :stripped="true" :vertical="false"/>
```

#### **PROFILE FLAT**  
![Alerts](assets/prof-1.png)

**USAGE**  
```html
<x-dg-profile-flat img="https://via.placeholder.com/150" name="Nadia Carmicheal" desc="Lead Developer">
    <x-dg-profile-flat-item title="Projects" text="31" url="#" badge="primary"/>
    <x-dg-profile-flat-item title="Tasks" text="5" />
    <x-dg-profile-flat-item title="Completed Projects" text="12" badge="success" />
    <x-dg-profile-flat-item title="Followers" text="842" badge="danger" />
</x-dg-profile-flat>
```

#### **PROFILE WIDGET**  
![Alerts](assets/prof-23.png)

**USAGE**  
```html
<x-dg-profile-widget img="https://via.placeholder.com/150" name="Alexander Prince" desc="Founder CEO" bg="info">
    <x-dg-profile-widget-item title="followers" text="533"/>
    <x-dg-profile-widget-item title="sales" text="20" col="4"/>
    <x-dg-profile-widget-item title="inbox" text="0"/>
</x-dg-profile-widget>

<x-dg-profile-widget img="https://via.placeholder.com/150" name="Elizabeth Pierce" desc="Founder CEO" cover="https://via.placeholder.com/150">
    <x-dg-profile-widget-item title="followers" text="533"/>
    <x-dg-profile-widget-item title="sales" text="20" col="4"/>
    <x-dg-profile-widget-item title="inbox" text="0"/>
</x-dg-profile-widget>
```

#### **MODAL**  

**MINIMUM USAGE**  
```html
<x-dg-modal id="login_modal" title="Modal Title">
    ...
</x-dg-modal>
```
**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE | DETAILS                            | REQUIRED | TYPE    |
|-----------|------------------------------------|----------|---------|
| id        | ID of modal                        | true     | string  |
| title     | Title of modal                     | true     | string  |
| size      | modal size: sm,lg,fluid            | false    | string  |
| centered  | is centered? ``true/false``        | false    | boolean |
| index     | No of index. (Modal up on a modal) | false    | integer |

**EXAMPLE**
```html
<x-dg-modal id="login_modal" title="Modal Title" size="sm" :centered="true" index="1">
    ...
</x-dg-modal>
```

#### **DATATABLE**  

**MINIMUM USAGE**  
```html
<x-dg-datatable id="sales-table" :heads="['#','Name','Phone','Actions']"/>
...

<script>
$(()=>{
   $('#sales-table').Datatable({
       ...
       ...
   });
});
</script>
```
**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE | DETAILS                       | REQUIRED | TYPE    |
|-----------|-------------------------------|----------|---------|
| id        | ID of the table               | true     | string  |
| heads     | Array of the headings (thead) | true     | array   |
| beautify  | to beautify? ``true/false``   | false    | boolean |
| bordered  | is bordered? ``true/false``   | false    | boolean |
| hoverable | is hoverable? ``true/false``  | false    | boolean |
| condensed | is condensed? ``true/false``  | false    | boolean |
| footer    | has footer? ``true/false``    | false    | boolean |

### Form Components

#### INPUT
**USAGE**
```html
<x-dg-input />
```

**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE   | DETAILS                         | DEFAULT     | TYPE    |
|-------------|---------------------------------|-------------|---------|
| type        | Input Type                      | text        | string  |
| id          | Input ID                        | null        | string  |
| name        | Input name                      | null        | string  |
| label       | Input Label                     | Input Label | string  |
| placeholder | Input placeholder               | null        | string  |
| topclass    | class along with 'fomr-group'   | null        | string  |
| inputclass  | class along with 'form-control' | null        | string  |
| value       | Input value                     | null        | string  |
| disabled    | is disabled?                    | false       | boolean |
| required    | is required?                    | false       | boolean |

#### INPUT-FILE
**REQUIRES**  
[bs-custom-file-input.min.js](https://www.npmjs.com/package/bs-custom-file-input)  

**USAGE**
```html
<x-dg-input-file />
```

**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE   | DETAILS                         | DEFAULT     | TYPE    |
|-------------|---------------------------------|-------------|---------|
| id          | Input ID                        | null        | string  |
| name        | Input name                      | null        | string  |
| label       | Input Label                     | Input Label | string  |
| placeholder | Input placeholder               | null        | string  |
| topclass    | class along with 'fomr-group'   | null        | string  |
| inputclass  | class along with 'form-control' | null        | string  |
| value       | Input value                     | null        | string  |
| disabled    | is disabled?                    | false       | boolean |
| required    | is required?                    | false       | boolean |
| multiple    | is multiple?                    | false       | boolean |

#### INPUT-COLOR
**REQUIRES**  
[bootstrap-colorpicker](https://www.npmjs.com/package/bootstrap-colorpicker)  

**USAGE**
```html
<x-dg-input-color id="myID" />
```

**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE   | DETAILS                         | DEFAULT     | TYPE    |
|-------------|---------------------------------|-------------|---------|
| id          | Input ID                        | null        | string  |
| name        | Input name                      | null        | string  |
| label       | Input Label                     | Input Label | string  |
| placeholder | Input placeholder               | null        | string  |
| topclass    | class along with 'fomr-group'   | null        | string  |
| inputclass  | class along with 'form-control' | null        | string  |
| value       | Input value                     | null        | string  |
| disabled    | is disabled?                    | false       | boolean |
| required    | is required?                    | false       | boolean |

#### INPUT-DATE
**REQUIRES**  
[tempusdominus-bootstrap-4](https://tempusdominus.github.io/bootstrap-4/)  

**USAGE**
```html
<x-dg-input-date id="myID" />
```

**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE   | DETAILS                         | DEFAULT     | TYPE    |
|-------------|---------------------------------|-------------|---------|
| id          | Input ID                        | null        | string  |
| name        | Input name                      | null        | string  |
| label       | Input Label                     | Input Label | string  |
| placeholder | Input placeholder               | null        | string  |
| topclass    | class along with 'fomr-group'   | null        | string  |
| inputclass  | class along with 'form-control' | null        | string  |
| value       | Input value                     | null        | string  |
| disabled    | is disabled?                    | false       | boolean |
| required    | is required?                    | false       | boolean |
| format      | [Moment.js](https://momentjs.com/docs/#/displaying/format/) datetime format       | YYYY-MM-DD  | string  |

#### INPUT-SWITCH
**REQUIRES**  
[bootstrap-switch](https://bttstrp.github.io/bootstrap-switch/)  

**USAGE**
```html
<x-dg-input-switch/>
```

**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE   | DETAILS                         | DEFAULT     | TYPE    |
|-------------|---------------------------------|-------------|---------|
| id          | Input ID                        | null        | string  |
| name        | Input name                      | null        | string  |
| label       | Input Label                     | Input Label | string  |
| placeholder | Input placeholder               | null        | string  |
| topclass    | class along with 'fomr-group'   | null        | string  |
| inputclass  | class along with 'form-control' | null        | string  |
| disabled    | is disabled?                    | false       | boolean |
| required    | is required?                    | false       | boolean |
| checked     | is checked?                     | false       | boolean |

#### INPUT-TAG
**REQUIRES**  
[bootstrap-tagsinput](https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/)  

**USAGE**
```html
<x-dg-input-tag/>
```

**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE   | DETAILS                         | DEFAULT     | TYPE    |
|-------------|---------------------------------|-------------|---------|
| id          | Input ID                        | null        | string  |
| name        | Input name                      | null        | string  |
| label       | Input Label                     | Input Label | string  |
| placeholder | Input placeholder               | null        | string  |
| topclass    | class along with 'fomr-group'   | null        | string  |
| inputclass  | class along with 'form-control' | null        | string  |
| disabled    | is disabled?                    | false       | boolean |
| required    | is required?                    | false       | boolean |
| max         | max tag count                   | 10          | integer |


#### SELECT 

**USAGE**
```html
<x-dg-select id="myID">
    <x-dg-option value="val">Text</x-dg-option>
</x-dg-select>
```

**ALL AVAILABLE ATTRIBUTES: SELECT**  
| ATTRIBUTE   | DETAILS                         | DEFAULT     | TYPE    |
|-------------|---------------------------------|-------------|---------|
| id          | Input ID                        | null        | string  |
| name        | Input name                      | null        | string  |
| label       | Input Label                     | Input Label | string  |
| placeholder | Input placeholder               | null        | string  |
| topclass    | class along with 'fomr-group'   | null        | string  |
| inputclass  | class along with 'form-control' | null        | string  |
| disabled    | is disabled?                    | false       | boolean |
| required    | is required?                    | false       | boolean |
| multiple    | is multiple?                    | false       | boolean |

**ALL AVAILABLE ATTRIBUTES: OPTION**  
| ATTRIBUTE | DETAILS         | DEFAULT | TYPE    |
|-----------|-----------------|---------|---------|
| value     | value of option | null    | string  |
| selected  | is selected?    | false   | boolean |
| disabled  | is disabled?    | false   | boolean |

#### SELECT2 
**REQUIRES**  
[select2](https://select2.org/)  

**USAGE**
```html
<x-dg-select2 id="myID">
    <x-dg-option value="val">Text</x-dg-option>
</x-dg-select2>
```

**ALL AVAILABLE ATTRIBUTES: SELECT**  
| ATTRIBUTE   | DETAILS                         | DEFAULT     | TYPE    |
|-------------|---------------------------------|-------------|---------|
| id          | Input ID                        | null        | string  |
| name        | Input name                      | null        | string  |
| label       | Input Label                     | Input Label | string  |
| placeholder | Input placeholder               | null        | string  |
| topclass    | class along with 'fomr-group'   | null        | string  |
| inputclass  | class along with 'form-control' | null        | string  |
| disabled    | is disabled?                    | false       | boolean |
| required    | is required?                    | false       | boolean |
| multiple    | is multiple?                    | false       | boolean |

**ALL AVAILABLE ATTRIBUTES: OPTION**  
| ATTRIBUTE | DETAILS         | DEFAULT | TYPE    |
|-----------|-----------------|---------|---------|
| value     | value of option | null    | string  |
| selected  | is selected?    | false   | boolean |
| disabled  | is disabled?    | false   | boolean |

#### SELECT-ICON 
**REQUIRES**  
[bootstrap-select](https://developer.snapappointments.com/bootstrap-select/)  

**USAGE**
```html
<x-dg-select-icon id="myID">
    <x-dg-option value="val" icon="true" content="fas fa-star">Text</x-dg-option>
</x-dg-select-icon>
```

**ALL AVAILABLE ATTRIBUTES: SELECT**  
| ATTRIBUTE   | DETAILS                         | DEFAULT     | TYPE    |
|-------------|---------------------------------|-------------|---------|
| id          | Input ID                        | null        | string  |
| name        | Input name                      | null        | string  |
| label       | Input Label                     | Input Label | string  |
| placeholder | Input placeholder               | null        | string  |
| topclass    | class along with 'fomr-group'   | null        | string  |
| inputclass  | class along with 'form-control' | null        | string  |
| disabled    | is disabled?                    | false       | boolean |
| required    | is required?                    | false       | boolean |
| multiple    | is multiple?                    | false       | boolean |

**ALL AVAILABLE ATTRIBUTES: OPTION**  
| ATTRIBUTE | DETAILS         | DEFAULT | TYPE    |
|-----------|-----------------|---------|---------|
| value     | value of option | null    | string  |
| icon      | has icon?       | false   | boolean |
| content   | icon class      | null    | string  |
| selected  | is selected?    | false   | boolean |
| disabled  | is disabled?    | false   | boolean |

#### TEXTAREA 

**USAGE**
```html
<x-dg-textarea>Hi,,,</x-dg-textarea>
```

**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE   | DETAILS                         | DEFAULT     | TYPE    |
|-------------|---------------------------------|-------------|---------|
| id          | Input ID                        | null        | string  |
| name        | Input name                      | null        | string  |
| label       | Input Label                     | Input Label | string  |
| placeholder | Input placeholder               | null        | string  |
| topclass    | class along with 'fomr-group'   | null        | string  |
| inputclass  | class along with 'form-control' | null        | string  |
| disabled    | is disabled?                    | false       | boolean |
| required    | is required?                    | false       | boolean |
| rows        | textarea rows                   | 10          | integer |

#### TEXT-EDITOR
**REQUIRES**  
[summernote](https://summernote.org/)  

**USAGE**
```html
<x-dg-text-editor id="myEditor"/>
```

**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE   | DETAILS                         | DEFAULT     | TYPE    |
|-------------|---------------------------------|-------------|---------|
| id          | Input ID                        | null        | string  |
| name        | Input name                      | null        | string  |
| label       | Input Label                     | Input Label | string  |
| placeholder | Input placeholder               | null        | string  |
| topclass    | class along with 'fomr-group'   | null        | string  |
| inputclass  | class along with 'form-control' | null        | string  |
| disabled    | is disabled?                    | false       | boolean |
| required    | is required?                    | false       | boolean |
| body        | texteditor text body            | null        | long text |
| height      | texteditor height               | 800         | integer |
| fonts       | set custom fonts                | null        | array   |

**Example Fonts Array**
```php
    $fonts = ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Impact', 'Montserrat',  'Open Sans'];
```

#### SUBMIT
```html
<x-dg-submit />
```

**ALL AVAILABLE ATTRIBUTES**  
| ATTRIBUTE   | DETAILS                         | DEFAULT     | TYPE    |
|-------------|---------------------------------|-------------|---------|
| type      | button type: success, primary, ...,etc | info    | string |
| label     | button label                           | Submit  | string |
| topclass    | class along with 'fomr-group'   | null        | string  |
| inputclass  | class along with 'form-control' | null        | string  |

## Summary
This document might not be well-documented. I will happily accept any documentation pull-requests.  
> PULL REQUESTS for new components should be in non-master branch


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
