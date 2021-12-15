# erendi-location

Location packages for province, citites, district, and subdistrict indonesian support laravel 8

### screenshoot

![Screenshoot](https://raw.githubusercontent.com/bimacoding/location/master/Capture.PNG)

### Installation

1. Install dengan composer

```php
composer require erendi/location
```

2. Tambahkan kelas berikut, ke array "providers" di file config/app.php

```php
Erendi\Location\LocationServiceProvider::class,
```

3. Tambahkan facades di file config/app.php "aliase"

```php
'Lokasi' => Erendi\Location\Facades\Location::class,
```

4. Publish packages

```php
php artisan vendor:publish --provider="Erendi\Location\LocationServiceProvider"
```

5.  Lakukan migration data

```php
php artisan migrate
```

### Penggunaan

1.  pada halaman view create/add/atau tambah

```php
@extends('layouts.template')
@section('content')
    {!! Lokasi::render() !!}
    @once
        @push('ext_css')
            {!! Lokasi::css() !!}
        @endpush
        @push('ext_scripts')
            {!! Lokasi::scripts() !!}

        @endpush
    @endonce
@endsection
```

2.  Pada halaman view edit atau ubah

```php
@extends('layouts.template')
@section('content')
    {!! Lokasi::render() !!}
    @once
        @push('ext_css')
            {!! Lokasi::css() !!}
        @endpush
        @push('ext_scripts')
            {!! Lokasi::scriptsedit() !!}

        @endpush
    @endonce
@endsection
```
### Contoh Pimplemntasi langsung
-   ini pada file "create.blade.php" yang saya punya
```php
@extends('layouts.template')
@section('content')
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ $title }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
                            <div class="form-body">
                                <div class="row">
                                    /*---- code saya -----*/ 
                                    {!! Lokasi::render() !!}
                                    /*---- code saya -----*/
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @once
        @push('ext_css')
            {!! Lokasi::css() !!}
        @endpush
        @push('ext_scripts')
            {!! Lokasi::scripts() !!}
        @endpush
    @endonce
@endsection

```
-   ini pada file edit.blade.php yang saya punya
```php
@extends('layouts.template')
@section('content')
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ $title }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]]) !!}
                            <div class="form-body">
                                <div class="row">
                                    
                                    {!! Lokasi::render($addloc->getRawOriginal()) !!}
                                    
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @once
        @push('ext_css')
            {!! Lokasi::css() !!}
        @endpush
        @push('ext_scripts')
            {!! Lokasi::scriptsedit($addloc->getRawOriginal()) !!}
        @endpush
    @endonce
@endsection

```
### Mengunakan Model Provinsi, Kota/Kabupate, Kecamatan, Desa

Cara menggunaka model yang lokasi

```php
// provinsi
use Erendi\Location\Models\Provinces;
// Kabupaten / Kota
use Erendi\Location\Models\Cities;
// Kecamatan
use Erendi\Location\Models\Districts;
// Desa
use Erendi\Location\Models\Subdistricts;
```
