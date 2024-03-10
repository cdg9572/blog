<form method="POST">
    @csrf
    <label>제목</label><br>
    <input type="text" name="title" placeholder="Title"><br>
    <label>본문</label><br>
    <textarea name="body" placeholder="body"></textarea><br>
    <button type="submit">Create</button>
</form>