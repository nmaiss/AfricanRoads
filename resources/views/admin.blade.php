<style>
    .country-flag {
        width: 50px;
    }
</style>

@extends('app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">{{ __('Ajouter des pays') }}</div>
                <div class="card-body">
                    <form method="POST" action="/country/store" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom du pays') }}</label>

                            <div class="col-md-6">
                                <input id="name" name="name" type="text"class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone_code" class="col-md-4 col-form-label text-md-right">{{ __('Indicatif téléphonique') }}</label>

                            <div class="col-md-6">
                                <input id="telephone_code" name="telephone_code" type="text"class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="timezone" class="col-md-4 col-form-label text-md-right">{{ __('Fuseau horaire') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="timezone" id="timezone" class="span5">
                                	<option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
                                	<option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
                                	<option value="-10:00">(GMT -10:00) Hawaii</option>
                                	<option value="-09:50">(GMT -9:30) Taiohae</option>
                                	<option value="-09:00">(GMT -9:00) Alaska</option>
                                	<option value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                                	<option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                                	<option value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                                	<option value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                                	<option value="-04:50">(GMT -4:30) Caracas</option>
                                	<option value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                                	<option value="-03:50">(GMT -3:30) Newfoundland</option>
                                	<option value="-03:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                                	<option value="-02:00">(GMT -2:00) Mid-Atlantic</option>
                                	<option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>
                                	<option value="+00:00" selected="selected">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                                	<option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                                	<option value="+02:00">(GMT +2:00) Kaliningrad, South Africa</option>
                                	<option value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                                	<option value="+03:50">(GMT +3:30) Tehran</option>
                                	<option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                	<option value="+04:50">(GMT +4:30) Kabul</option>
                                	<option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                                	<option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                                	<option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>
                                	<option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                                	<option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>
                                	<option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                	<option value="+08:00">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                                	<option value="+08:75">(GMT +8:45) Eucla</option>
                                	<option value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                                	<option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>
                                	<option value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                                	<option value="+10:50">(GMT +10:30) Lord Howe Island</option>
                                	<option value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                                	<option value="+11:50">(GMT +11:30) Norfolk Island</option>
                                	<option value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                                	<option value="+12:75">(GMT +12:45) Chatham Islands</option>
                                	<option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>
                                	<option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country_flag" class="col-md-4 col-form-label text-md-right">{{ __('Drapeau') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control-file" name="country_flag" id="country_flag" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Drapeau</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Indicatif</th>
                      <th scope="col">Fuseau horaire</th>
                      <th scope="col">Supprimer</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($countries ?? '' as $country)
                      <tr>
                          <th scope="row">{{ $country->id }}</th>
                          <td><img src="/storage/{{ $country->country_flag }}" class="country-flag"></td>
                          <td>{{ $country->name }}</td>
                          <td>{{ $country->telephone_code }}</td>
                          <td>{{ $country->timezone }}</td>
                          <td><a href="/country/{{ $country->id }}/delete">Supprimer</a></td>
                      </tr>
                  </tbody>
                  @endforeach
                </table>
            </div>

            @include('admin.city')

            <div class="card mb-4">
                <div class="card-header">{{ __('Ajouter des moyens de transport') }}</div>
                <div class="card-body">
                    <form method="POST" action="/mean/store" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" name="name" type="text"class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number_place" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de places') }}</label>

                            <div class="col-md-6">
                                <input id="number_place" name="number_place" type="text"class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control-file" name="image" id="image" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="important_check" class="col-md-4 col-form-label text-md-right">{{ __('Important') }}</label>

                            <div class="col-md-6">
                                <div class="form-check">
                                  <input class="form-control" type="checkbox" value="" id="important_check" name="important_check">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Image</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Important</th>
                      <th scope="col">Nombre de places</th>
                      <th scope="col">Supprimer</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($means ?? '' as $mean)
                      <tr>
                          <th scope="row">{{ $mean->id }}</th>
                          <td><img src="/storage/{{ $mean->image }}" class="country-flag"></td>
                          <td>{{ $mean->name }}</td>
                          <td>
                            @if( $mean->important == "true" )
                                Oui
                            @else
                                Non
                            @endif
                          </td>
                          <td>{{ $mean->number_places }}</td>
                          <td><a href="/mean/{{ $mean->id }}/delete">Supprimer</a></td>
                      </tr>
                  </tbody>
                  @endforeach
                </table>
            </div>

            @include('admin.delay')
        </div>
    </div>
</div>

@endsection
