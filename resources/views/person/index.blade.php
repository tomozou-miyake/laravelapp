@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
  @parent
  インデックスページ
  <div class="links">
    <a href="{{ url('/person/find') }}">検索</a>
    <a href="{{ url('/person/add') }}">追加</a>
    <a href="{{ url('/person/edit?id=1')}}">編集</a>
    <a href="{{ url('/person/del?id=1')}}">削除</a>
  </div>
@endsection

@section('content')
   <table>
   <tr><th>Person</th><th>Board</th></tr>
   @foreach ($hasItems as $item)
       <tr>
           <td>{{$item->getData()}}</td>
           <td>
               <table width="100%">
               @foreach ($item->boards as $obj)
                   <tr><td>{{$obj->getData()}}</td></tr>
               @endforeach
               </table>
           </td>
       </tr>
   @endforeach
   </table>
   <div style="margin:10px;"></div>
   <table>
   <tr><th>Person</th></tr>
   @foreach ($noItems as $item)
       <tr>
           <td>{{$item->getData()}}</td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2019 miyake.
@endsection
