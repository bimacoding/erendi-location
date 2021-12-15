<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="provinces">Provinsi</label>
                <select id="provinces" class="form-control">
                    <option value="">-- select --</option>
                    @foreach ($provinces as $prov)
                        <option value="{{ $prov->prov_id }}"> {{ $prov->prov_name }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="cities">Kabupaten / Kota</label>

                <select id="cities" class="form-control">
                    <option value="">-- select --</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="district">Kecamatan</label>
                <select id="district" class="form-control">
                    <option value="">-- select --</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="subdistrict">Desa</label>
                <select id="subdistrict" class="form-control">
                    <option value="">-- select --</option>
                </select>
            </div>
        </div>
    </div>
</div>
