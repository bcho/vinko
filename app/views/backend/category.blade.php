@extends('backend.module')
{{-- */$current = $category['name'];/* --}}

@section('module_name')
{{ $category['name'] }} 的文章
@stop

@section('module_content')
<div class="inner pure-g">
    <div id="module-meta" class="pure-u-2-3">
        <p>一共有 {{ count($posts) }} 篇文章</p>
    </div>
    <section id="module-op" class="pure-u-1-3">
        <a class="pure-button pure-button-success pull-right" href="{{ URL::route('show_post_create', array('cate_slug' => $category['slug'])) }}">创建</a>
    </section>
</div>
@if (count($posts))
<table class="list pure-table pure-table-horizontal">
    <thead>
        <tr>
            <th>标题</th>
            <th>发表日期</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($posts as $post)
        <tr>
            <td>
                <a href="{{ URL::route('show_post_edit', array('post_id' => $post->id)) }}">{{ $post['title'] }}</a>
            </td>
            <td>{{ $post['created_at'] }}</td>
            <td>
                <a class="pure-button pure-button-error" href="{{ URL::route('remove_post', array('post_id' => $post->id)) }}">删除</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endif
@stop
