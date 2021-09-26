@extends('header')
@section('content')
    <form action="">
    @csrf

    <table>
        <thead>
            <tr>
                <td>
                    <a href="{{route('company.show')}}" class="btn btn-primary">  إضافة بلد</a>
                  
                </td>
                <td>
                    <a href="{{route('company.show')}}" class="btn btn-primary">  إضافة مدينة</a>
                </td>
               
            </tr>
            <tr>
                <td>
                     <a href="{{route('addJob')}}" class="btn btn-primary">  اضافة عمل </a>
                </td>
                <td>
                    <a href="{{route('company.profile')}}" class="btn btn-primary">  إضافة شركة </a>
                </td>
            </tr>
            <tr>
                <td>
                <a href="{{route('company.show')}}" class="btn btn-primary">  إضافة بلد</a>
                </td>
                <td>
                <a href="{{route('company.show')}}" class="btn btn-primary">  إضافة بلد</a>
                </td>
            </tr>
        </thead>
        
    </table>

    
 
    </form>
@endsection()