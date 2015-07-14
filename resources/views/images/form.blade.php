<div class="form-group">
    {!! Form::label('title', 'عنوان') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group row padding-15">
    {!! Form::label('image', 'تصویر') !!}
    @if(isset($audio) && $audio->image_url != '')
        <img src="{{ url($audio->image_url) }}" class="pull-left" />
    @endif
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'توضیحات') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group row padding-15">
    {!! Form::label('video', 'فیلم') !!}
    @if(isset($image) && $image->video_url != '')
        <!--
         todo
          add player to check video in edit mode
        -->
        {{ url($image->video_url) }}
    @endif
    {!! Form::file('video', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group row padding-15">
    {!! Form::label('audio', 'صوت') !!}
    @if(isset($image) && $image->audio_url != '')
        <!--
         todo
          add player to check video in edit mode
        -->
        {{ url($image->audio_url) }}
    @endif
    {!! Form::file('audio', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tag_list', 'تگ ها') !!}
    {!! Form::select('tag_list[]', $tags , null, ['id' => 'tag_list', 'class' => 'form-control','multiple']) !!}
</div>
<div class="form-group row">
    <div class="pull-left panel">
        {!! Form::submit("ثبت", ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>
