<div class="form-group">
    <label>Title:</label>
    <input name="title"
           value="{{ old('title', $post->title ?? null) }}"
           class="form-control" >
</div>
<div class="form-group">
    <label>Content:</label>
    <input name="content"
           value="{{ old('content', $post->title ?? null) }}"
           class="form-control" >
</div>
<div class="form-group">
    <label>Thumbnail:</label>
    <input type="file" name="thumbnail" class="form-control-file" >
</div>


@errors @enderrors


