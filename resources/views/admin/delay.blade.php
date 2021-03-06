<div class="card mb-4">
    <div class="card-header">{{ __('Delais') }}</div>
    <div class="card-body">
        <form method="POST" action="/delay/store" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de jours') }}</label>

                <div class="col-md-6">
                    <input id="name" name="name" type="text"class="form-control" required>
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
          <th scope="col">Nombre de jours</th>
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>
          @foreach($delays ?? '' as $delay)
          <tr>
              <th scope="row">{{ $delay->id }}</th>
              <td>{{ $delay->name }}</td>
              <td><a href="/delay/{{ $delay->id }}/delete">Supprimer</a></td>
          </tr>
      </tbody>
      @endforeach
    </table>
</div>
