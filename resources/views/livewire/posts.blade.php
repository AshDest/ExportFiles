<div>
    <form wire:submit.prevent="save">
        <label for="title">Title</label>
        <input type="text" class="form-control" wire:model='title' id="title">
        <label for="content">Body</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control" wire:model='content'></textarea>
        <button class="btn btn-primary">Enregistrer</button>
    </form>
</div>