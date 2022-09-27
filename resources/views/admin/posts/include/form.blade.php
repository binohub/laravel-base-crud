<div>
    <div class="form-group p-3">
        <label for="exampleInputTitle">title</label>
        <input name="title" type="text" class="form-control" id="exampleInputTitle" aria-describedby="titleHelp"
            placeholder="enter title" value="{{ $post->title }}">
        @error('title')
            <div class="alert alert-danger">
                {{ $title }}
            </div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label for="exampleInputAuthor">author</label>
        <input name="author" type="text" class="form-control" id="exampleInputAuthor" aria-describedby="authorHelp"
            placeholder="enter author" value="{{ $post->author }}">
        @error('author')
            <div class="alert alert-danger">
                {{ $author }}
            </div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label for="exampleInputDescription">description</label>
        <textarea class="form-control" name="description" id="exampleInputDescription" cols="30" rows="10">
            {{ $post->description }}
        </textarea>
        @error('description')
            <div class="alert alert-danger">
                {{ $description }}
            </div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label for="exampleInputPic">pic</label>
        <input name="image" type="file" class="form-control" id="exampleInputPic" aria-describedby="picHelp"
            placeholder="enter image" value="{{ asset('/storage' . '/' . $post->image) }}">
        @error('pic')
            <div class="alert alert-danger">
                {{ $image }}
            </div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label for="exampleInputDate">date</label>
        <input name="date" type="text" class="form-control" id="exampleInputDate" aria-describedby="dateHelp"
            placeholder="enter date" value="{{ $post->date }}">
        @error('date')
            <div class="alert alert-danger">
                {{ $date }}
            </div>
        @enderror
    </div>
    <div class="form-group p-3 text-center">
        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
    </div>
</div>
