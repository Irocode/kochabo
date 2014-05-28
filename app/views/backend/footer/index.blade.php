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
                url: "{{ url('/admin/footer/" + id + "/toggle-publish/') }}",
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
            <h3 class="panel-title">Footer</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                      <!-- <div class="btn-toolbar">
                  <!--  <a href="{{ URL::route('admin.footer.create') }}" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;New footer
                    </a>-->
               <!--  </div>
            </div>
            <br>
            <br>
            <br>-->
            @if($footer->count())
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
                    @foreach( $footer as $v )
                    <tr>
                        <td> {{ link_to_route( 'admin.footer.edit', $v->title, $v->id, array( 'class' => 'btn btn-link btn-xs' )) }}</td>
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
                                        <a href="{{ URL::route('admin.footer.show', array($v->id)) }}">
                                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Show footer
                                        </a>
                                    </li>-->
                                    <li>
                                        <a href="{{ URL::route('admin.footer.edit', array($v->id)) }}">
                                            <span class="glyphicon glyphicon-edit"></span>&nbsp; Footer ansehen/bearbeiten
                                        </a>
                                    </li>
                                    
                                   <!-- <li><li class="divider"></li>
                                        <a href="{{ URL::route('admin.footer.delete', array($v->id)) }}">
                                            <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Delete footer
                                        </a>
                                    </li>-->
                                     <li class="divider"></li>
                                    <li>
                                        <a target="_blank" href="{{ URL::route('dashboard.footer.show', ['id' => $v->id, 'slug' => $v->slug]) }}">
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
            <div class="alert alert-danger">Kein Footer vorhanden</div>
            @endif
        </div>
    </div>

    <div class="pull-left">
        <ul class="pagination">
            {{ $footer->links() }}
        </ul>
    </div>
</div>
@stop