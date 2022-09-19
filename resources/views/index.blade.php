<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <div style="border: 1px solid #ccc;z-index: 9999">
            <div id="toolbar-{{$id}}" style="border-bottom: 1px solid #ccc;"><!-- 工具栏 --></div>
            <div id="editor-{{$id}}" style="height: {{$height}}"><!-- 编辑器 --></div>
        </div>

        <input type="hidden" name="{{$name}}" value="{{ old($column, $value) }}" />

        @include('admin::form.help-block')

    </div>
</div>
