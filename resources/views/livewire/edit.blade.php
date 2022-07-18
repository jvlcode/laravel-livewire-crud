<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Title:</label>
        <input wire:model='title' type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" >
        @error('title')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Body:</label>
        <textarea wire:model='body' type="email" class="form-control" id="exampleFormControlInput2"  placeholder="Enter Body"></textarea>
        @error('body')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <button wire:click.prevent="update()" class="btn btn-success mt-3">Update</button>
    <button wire:click.prevent="cancelUpdate()" class="btn btn-danger mt-3">Cancel</button>
</form>
