
{{-- {{dd($generalSetting)}} --}}
<h3>General Setting</h3>
<form class="needs-validation" action="{{route('admin.setting.update',$generalSetting->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="mb-1 col-12">
            <div class="mb-1 col-12">
                <label class="form-label" for="basic-addon-name">Company Name</label>
                <input type="text" id="basic-addon-name" class="form-control" placeholder="Name" aria-label="Name"
                    aria-describedby="basic-addon-name" name="company_name" value="{{$generalSetting->company_name}}" required />
            </div>
            <div class="row">
                <div class="mb-1 col-6">
                    <label class="form-label" for="basic-default-email1">Contact Email</label>
                    <input type="email" id="basic-default-email1" class="form-control"
                        placeholder="john.doe@email.com" aria-label="john.doe@email.com" name="email" value="{{$generalSetting->email}}"
                        required />
                </div>
                <div class="mb-1 col-6">
                    <label class="form-label" for="phone">Phone</label>
                    <input type="text" id="phone" class="form-control" placeholder="" name="p_number"
                        value="{{$generalSetting->p_number}}" aria-label="" required />
                </div>
            </div>
            {{-- <div class="col-12 mb-1">
                <label class="form-label" for="currency">Default Currency</label>
                <select class="select2 form-select" id="currency" name="currancy" value=''>
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    <option value="CA">California</option>
                    <option value="SC">South Carolina</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WV">West Virginia</option>
                </select>
            </div> --}}
            {{-- <div class="col-12 mb-1">
                <label class="form-label" for="color-theme">Color Theme</label>
                <select class="select2 form-select" id="color-theme" name="color_theme" value="">
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    <option value="CA">California</option>
                    <option value="SC">South Carolina</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WV">West Virginia</option>
                </select>
            </div> --}}
            {{-- <div class="col-12 mb-1">
                <label class="form-label" for="language">Language</label>
                <select class="select2 form-select" id="language" name="language" value="">
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    <option value="CA">California</option>
                    <option value="SC">South Carolina</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WV">West Virginia</option>
                </select>
            </div> --}}
        </div>
        {{-- <div class="col-4">
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset($generalSetting->logo) }}" id="blog-feature-image" class="rounded me-2 mb-1 mb-md-0"
                    width="170" height="110" alt="Blog Featured Image" />
                <div class="d-inline-block pt-1">
                    <input class="form-control" type="file" id="blogCustomFile" accept="image/*" name="logo" />
                </div>
            </div>
        </div> --}}
    </div>
    <div class="row">
        <div class="mb-1 col-12">
            <label class="form-label" for="physical-address">Physical Address</label>
            <input type="text" class="form-control " id="physical-address"
                name="phy_address" value="{{$generalSetting->phy_address}}" required />
        </div>
    </div>
    <div class="row">
        <div class="mb-1 col-12">
            <label class="form-label" for="postal-address">Postal Address</label>
            <input type="text" class="form-control " id="postal-address"
                name="postal_address" value="{{$generalSetting->postal_address}}" required />
        </div>
    </div>
    <div class="row">
        <div class="mb-1 col-12">
            <label class="form-label" for="website-url">Website Url</label>
            <input type="text" class="form-control " id="website-url" name="website_url"
                value="{{$generalSetting->website_url}}" required />
        </div>
    </div>
    <div class="row">
        <div class="mb-1 col-12">
            <label class="form-label" for="zip-code">Zip Code</label>
            <input type="text" class="form-control " name="zip_code" id="zip-code"
                value="{{$generalSetting->zip_code}}" required />
        </div>
        {{-- <div class="mb-1 col-6">
            <label class="form-label" for="date-formate">Date Formate</label>
            <input type="text" class="form-control " name="date-formate" id="date-formate" name="date_format"
                value="" required />
        </div> --}}
    </div>
    {{-- <div class="row">
        <div class="mb-1 col-4">
            <label class="form-label" for="amount-thousand-separator">Amount Thousand Separator</label>
            <select class="select2 form-select" id="amount-thousand-separator" name="thousand_seprator">
                <option value="AK">Alaska</option>
                <option value="HI">Hawaii</option>
                <option value="CA">California</option>
                <option value="SC">South Carolina</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WV">West Virginia</option>
            </select>
        </div>
        <div class="mb-1 col-4">`
            <label class="form-label" for="amount-decimal-separator">Amount Decimal Separator</label>
            <select class="select2 form-select" id="amount-decimal-separator" name="decimal_seprator">
                <option value="AK">Alaska</option>
                <option value="HI">Hawaii</option>
                <option value="CA">California</option>
                <option value="SC">South Carolina</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WV">West Virginia</option>
            </select>
        </div>
        <div class="mb-1 col-4">
            <label class="form-label" for="amount-decimal">Amount Decimals</label>
            <select class="select2 form-select" id="amount-decimal" name="amount_decimal">
                <option value="AK">Alaska</option>
                <option value="HI">Hawaii</option>
                <option value="CA">California</option>
                <option value="SC">South Carolina</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WV">West Virginia</option>
            </select>
        </div>
    </div> --}}
    <div class="col-12 d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">Update</button></div>
</form>
