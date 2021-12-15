# erendi-location

Location packages for province, citites, district, and subdistrict indonesian support laravel 8

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
