<div class="mb-3">
    <label for="name" class="form-label">Tashkelot nomi</label>
    <input type="text" class="form-control" id="name" name = "name" value="{{old('name') ?? $company -> name}}">
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Tashkelot manzili</label>
    <input type="text" class="form-control" id="address" name="address" value="{{old('address') ?? $company -> address}}">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Tashkelot telefon raqami</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{old('name') ?? $company -> phone}}">
  </div>