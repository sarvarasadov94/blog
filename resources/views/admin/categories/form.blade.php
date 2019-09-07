<label for="">Статус</label>
<select class="form-control" name="published">
    @if(isset($category->id))
        <option value="0" @if($category->published ==0) selected="" @endif>Не опублиовано</option>
        <option value="1" @if($category->published ==1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опублиовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>
<label for="">Наименование</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории"
       value="{{$category->title or ""}}" required>

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация"
       value="{{$category->slug or ""}}" required>

<label for="">Родительская категория</label>
<select class="form-control" name="parent_id">
    <option value="0">-- без родительской категории --</option>
    @include('admin.categories.categories',['categories'=>$categories])
</select>
<input type="text" class="form-control" name="parent_id" placeholder="Заголовок категории"
       value="{{$category->title or ""}}" required>

<hr>
<input class="btn btn-primary" type="submit" value="Сохранить">
