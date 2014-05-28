@extends('backend/_layout/layout')
@section('content')
   {{ Notification::showAll() }}
<script type="text/javascript">
    $(document).ready(function () {

        

        // publish settings
        $(".publish").bind("click", function (e) {
            var id = $(this).attr('id');
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{ url('/admin/news/" + id + "/toggle-publish/') }}",
                success: function (response) {
                    if (response['result'] == 'success') {
                        var imagePath = (response['changed'] == 1) ? "{{url('/')}}/assets/img/backend/images/publish.png" : "{{url('/')}}/assets/img/backend/images/not_publish.png";
                        $("#publish-image-" + id).attr('src', imagePath);
                    }
                },
                error: function () {
                    alert("error");
                }
            })
        });
    });
</script>
<div class="container">
     
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">News</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{{ URL::route('admin.news.create') }}" class="btn btn-u">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;Neuen Newsbeitrag erstellen
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
            @if($news->count())
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Titel</th>
                        <th>Beitragsdatum</th>
                        <th>Erstellt am</th>
                        <th>Update am</th>
                        <th>Aktion</th>
                        <th>Veröffentlichung</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $news as $v )

<?php
$datumumwandeln= $v->datetime;
$datumumwandelnx= date("d.m.Y", strtotime($datumumwandeln)); 
?>


                    <tr>
                        <td> {{ link_to_route( 'admin.news.edit', $v->title, $v->id, array( 'class' => 'btn btn-link btn-xs' )) }}</td>
                        <td> {{{  $datumumwandelnx}}}   </td>
                        <td> {{{  $v->created_at->format('d-m-Y (H:i:s)') }}} </td>
                        <td> {{{  $v->updated_at->format('d-m-Y (H:i:s)') }}}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                    Aktion
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                   <!-- <li>
                                        <a href="{{ URL::route('admin.news.show', array($v->id)) }}">
                                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp;News ansehen
                                        </a>
                                    </li>-->
                                    <li>
                                        <a href="{{ URL::route('admin.news.edit', array($v->id)) }}">
                                            <span class="glyphicon glyphicon-edit"></span>&nbsp;Newsbeitrag ansehen/bearbeiten
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ URL::route('admin.news.delete', array($v->id)) }}">
                                            <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;News Beitrag löschen
                                        </a>
                                    </li>
                                     <li class="divider"></li>
                                    <li>
                                        <a target="_blank" href="{{ URL::route('dashboard.news.show', ['id' => $v->id, 'slug' => $v->slug]) }}">
                                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Voransicht
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td>
                        <a href="#" id="{{ $v->id }}" class="publish">
                            <img id="publish-image-{{ $v->id }}" src="{{url('/')}}/assets/img/backend/images/{{ ($v->is_published) ? 'publish.png' : 'not_publish.png'  }}"/>

                            

                        </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="alert alert-danger">Keine Newsbeiträge gefunden</div>
            @endif
        </div>
    </div>

    <div class="pull-left">
        <ul class="pagination">
            {{ $news->links() }}
        </ul>
    </div>
</div>



@stop