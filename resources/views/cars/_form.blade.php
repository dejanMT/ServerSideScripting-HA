<div class="form-group">
    <label for="model">Model</label>
    <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" value="{{ old('model', $car->model) }}">
    @error('model')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <label for="year">Year</label>
    <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{ old('year', $car->year) }}">
    @error('year')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <label for="salesperson_email">Salesperson Email</label>
    <input type="email" class="form-control @error('salesperson_email') is-invalid @enderror" id="salesperson_email" name="salesperson_email" value="{{ old('salesperson_email', $car->salesperson_email) }}">
    @error('salesperson_email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <label for="manufacturer">Manufacturer</label>
    <select class="form-control @error('manufacturer_id') is-invalid @enderror" id="manufacturer" name="manufacturer_id">
        <option value="">Select Manufacturer</option>
        @foreach ($manufactors as $id => $name)
            <option {{ $id == old('manufacturer_id', $car->manufacturer_id) ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
    @error('manufacturer_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<hr>
<div class="form-group row mb-0">
  <div class="col-md-9 offset-md-3">
     <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary">Cancel</a>
  </div>
</div>