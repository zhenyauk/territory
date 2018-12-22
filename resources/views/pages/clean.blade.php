<div class="page-header">
    <h1 class="page-title">{{$page->title or 'No title'}}</h1>
</div>


<div class="page-content">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{$page->title2 or ''}}</h3>
        </div>
        <div class="panel-body">
            <!-- content -->
        {!! $page->content or '' !!}
        <!-- endcontent -->
        </div>
    </div>
</div>