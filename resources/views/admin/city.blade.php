<div class="card mb-4">
    <div class="card-header">{{ __('Villes') }}</div>
    <div class="card-body">
        <form method="POST" action="/city/store" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="selected_country" class="col-md-4 col-form-label text-md-right">{{ __('Pays') }}</label>

                <div class="col-md-6">
                    <select name="selected_country" id="selected_country" class="form-control">
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                <div class="col-md-6">
                    <input id="name" name="name" type="text" class="form-control" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="to_only_select" class="col-md-4 col-form-label text-md-right">{{ __('Point de départ uniquement') }}</label>

                <div class="col-md-6">
                    <input class="form-control" type="checkbox" id="to_only_select" name="to_only_select">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ 'Ajouter' }}
                    </button>
                </div>
            </div>
        </form>
    </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nom</th>
          <th scope="col">Pays</th>
          <th scope="col">Départ uniquement</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
          @foreach($cities ?? '' as $city)
          <tr>
              <th scope="row">{{ $city->id }}</th>
              <td>{{ $city->name }}</td>
              <td>{{ $city->country->name }}</td>
              <td>
                  @if($city->to_only == 'on')
                    Oui
                  @else
                    Non
                  @endif
              </td>
              <td><a href="/city/{{ $city->id }}/delete">Supprimer</a></td>
          </tr>
      </tbody>
      @endforeach
    </table>
</div>
