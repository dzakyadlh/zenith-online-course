@extends('layouts.main')

@section('container')
    <h3>{{ $course->title }}</h3>
    {!! $course->body !!}
@endsection

{{-- $course::create([
    'title'=>'Course 4',
    'slug'=>'course-4',
    'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam optio quo quasi culpa illo maiores voluptatibus',
    'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam optio quo quasi culpa illo maiores voluptatibus, similique, a suscipit exercitationem minima facere esse iure aperiam quam inventore ipsa doloremque. Neque!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eveniet dignissimos libero hic illo, id, nam provident distinctio nobis quae ullam suscipit atque reiciendis possimus nihil iusto, optio sit? Magnam eos exercitationem pariatur inventore fugiat nisi possimus illo doloribus sit.</p>',
    'thumbnail'=>'https://firebasestorage.googleapis.com/v0/b/gradee-b80f3.appspot.com/o/mathematics_hs.jpg?alt=media&token=0c870127-71e9-49c8-afe0-00cd0be2bc9a'  
]) --}}