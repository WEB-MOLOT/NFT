<div class="form-group">
    <label>Content</label>
    <textarea class="form-control" name="data[text]" data-editor>{{ $page->data['text'] ?? '' }}</textarea>
</div>

<div class="form-group">
    <label>Telegram</label>
    <input type="text" class="form-control" name="data[telegram]" value="{{ $page->data['telegram'] ?? '' }}">
</div>

<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="data[email]" value="{{ $page->data['email'] ?? '' }}">
</div>

