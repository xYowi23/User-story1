<form wire:submit.prevent="store()">
    <div class="mb-3">
      <label for="title" class="form-label">Titolo Annuncio</label>
      <input type="text" class="form-control" wire:model="title">
      @error('name') <span class="error text-success">{{$message}}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Descrizione</label>
        <input type="text" class="form-control" wire:model="body">
        @error('body') <span class="error text-success">{{$message}}</span> @enderror
      </div>
    <div class="mb-3">
      <label for="price" class="form-label">Prezzo</label>
      <input type="numeric" class="form-control" wire:model="price">
      @error('price') <span class="error text-success">{{$message}}</span> @enderror
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>