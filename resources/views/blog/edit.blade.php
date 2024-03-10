<form method="POST">
    @csrf
    @method('PUT')
    <label>제목</label><br>
    <input type="text" name="title" placeholder="Title" value="{{ $blogPost->title }}"><br>
    <label>본문</label><br>
    <textarea name="body" placeholder="body">{{ $blogPost->body }}</textarea><br>
    <input type="submit" value="저장">
</form>