@extends('backend/_layout/layout')
@section('content')
{{ Notification::showAll() }}
<div class="container">
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Bundesländer anlegen</h3>
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <a href="{{ URL::route('admin.list_bundesland.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neues Bundesland erstellen
               </a>
            </div>
         </div>
         <br>
         <br>
         <br>
         @if($list_bundesland->count())
         <div class="table-responsive">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Bundesland</th>
                     <th>Erstellt am</th>
                     <th>Update am</th>
                     <th>Aktion</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach( $list_bundesland as $v )
                
                  <tr>
                     <td> {{ link_to_route( 'admin.list_bundesland.edit', $v->id, $v->id, array( 'class' => 'btn btn-link btn-xs' )) }}</td>
                     <td> {{{  $v->bezeichnung}}} </td>
                   
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
                                 <a href="{{ URL::route('admin.list_bundesland.show', array($v->id)) }}">
                                     <span class="glyphicon glyphicon-eye-open"></span>&nbsp;list_bundesland ansehen
                                 </a>
                                 </li>-->
                              <li>
                                 <a href="{{ URL::route('admin.list_bundesland.edit', array($v->id)) }}">
                                 <span class="glyphicon glyphicon-edit"></span>&nbsp;Bundesland {{{$v->bezeichnung}}} <b>ansehen/bearbeiten</b>
                                 </a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                 <a href="{{ URL::route('admin.list.list_bundesland.delete', array($v->id)) }}">
                                 <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Bundesland {{{$v->bezeichnung}}} <strong>löschen</strong>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
         @else
         <div class="alert alert-danger">Kein Bundesland gefunden</div>
         @endif
      </div>
   </div>
   <div class="pull-left">
      <ul class="pagination">
         {{ $list_bundesland->links() }}
      </ul>
   </div>
</div>
@stop