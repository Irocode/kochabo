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
                url: "{{ url('/admin/article/" + id + "/toggle-publish/') }}",
                success: function (response) {
                    if (response['result'] == 'success') {
                        var imagePath = (response['changed'] == 1) ? "{{url('/')}}/assets/backend/img/backend/images/publish.png" : "{{url('/')}}/assets/backend/img/backend/images/not_publish.png";
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
    {{ Notification::showAll() }}
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Artikel</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{{ URL::route('admin.article.create') }}" class="btn btn-u">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;Neuer Artikel erstellen
                    </a>
                    <a href="{{ URL::route('admin.category.create') }}" class="btn btn-u">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;Neue Kategorie erstellen
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
            @if($articles->count())
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Titel</th>
                     
                        <th>Erstellt am</th>
                        <th>Update am</th>
                        <th>Aktion</th>
                        <th>Veröffentlichung</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $articles as $article )


                    <tr>
                        <td> {{ link_to_route( 'admin.article.edit', $article->title, $article->id, array( 'class' => 'btn btn-link btn-xs' )) }}</td>
                        
                        <td> {{{  $article->created_at->format('d-m-Y (H:i:s)') }}} </td>
                        <td> {{{  $article->updated_at->format('d-m-Y (H:i:s)') }}}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                    Aktion
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                   <!--  <li>
                                        <a href="{{ URL::route('admin.article.show', array($article->id)) }}">
                                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Artikel ansehen
                                        </a>
                                    </li>-->
                                    <li>
                                        <a href="{{ URL::route('admin.article.edit', array($article->id)) }}">
                                            <span class="glyphicon glyphicon-edit"></span>&nbsp;Artikel ansehen/bearbeiten
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ URL::route('admin.article.delete', array($article->id)) }}">
                                            <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Artikel löschen
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a target="_blank" href="{{ URL::route('dashboard.article.show', ['id' => $article->id, 'slug' => $article->slug]) }}">

                                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Voransicht
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td>
                        <a href="#" id="{{ $article->id }}" class="publish">
                            <img id="publish-image-{{ $article->id }}" src="{{url('/')}}/assets/backend/img/backend/images/{{ ($article->is_published) ? 'publish.png' : 'not_publish.png'  }}"/>
                        </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="alert alert-danger">Keinen Artikel gefunden</div>
            @endif
        </div>
    </div>

    <div class="pull-left">
        <ul class="pagination">
            {{ $articles->links() }}
        </ul>
    </div>
</div>
@stop