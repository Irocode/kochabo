@extends('backend/_layout/layout')
@section('content')
<div class="container">
   <nav class="navbar navbar-inverse">
      <ul class="nav navbar-nav">
         <li><a href="{{ URL::to('admin/userverwaltung') }}">Zeige alle Benutzer</a></li>
         <li><a href="{{ URL::to('admin/register') }}">Benutzer anlegen</a>
      </ul>
   </nav>
   <div class="pull-right">
      <a href="javascript:history.back();"><button class="btn btn-u">&lt;&lt; Zurück</button></a>
   </div>
   <h1>Alle Benutzer</h1>
   <!-- will be used to show any messages -->
   @if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
   @endif
   <table class="table table-striped table-bordered">
      <thead>
         <tr>
            <td>ID</td>
            <td>Vorname</td>
            <td>Nachname</td>
            <td>E-Mail</td>
            <td>Aktionen</td>
         </tr>
      </thead>
      <tbody>
         @foreach($varibale_ausgabe as $key => $value)
         <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->first_name }}</td>
            <td>{{ $value->last_name }}</td>
            <td>{{ $value->email }}</td>
            <!-- we will also add show, edit, and delete buttons -->
            <td>
               <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
               <!-- we will add this later since its a little more complicated than the first two buttons -->
               {{ Form::open(array('url' => 'admin/userverwaltung/' . $value->id, 'class' => 'pull-right')) }}
               {{ Form::hidden('_method', 'DELETE') }}
               {{ Form::submit('Löschen', array('class' => 'btn btn-danger')) }}
               {{ Form::close() }}
               <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
               <a class="btn btn-small btn-success" href="{{ URL::to('admin/userverwaltung/' . $value->id) }}">Anzeigen</a>
               <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
               <a class="btn btn-small btn-success" href="{{ URL::to('admin/userverwaltung/' . $value->id . '/edit') }}">Ändern</a>
               <!--
                  <div class="btn-group">
                                        <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
                                            Newsletter
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                        
                                            <li>
                                                <a href="{{ URL::to('newsletter/' . $value->id . '/edit') }}">
                                                    <span class="glyphicon glyphicon-edit"></span>&nbsp;Newsletter bearbeiten
                                                </a>
                                            </li>                                    
                                         
                                             <li class="divider"></li>
                                            <li>
                                                <a target="_blank" href="{{ URL::to('newsletter/' . $value->id . '/') }}">
                                                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Newsletter zeigen
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                  
                  -->
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>
@stop