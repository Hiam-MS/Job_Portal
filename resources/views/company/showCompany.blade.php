@extends('header')
@section('content')


<style>
    th, td 
    {
        border-bottom: 1px solid #ddd;
    }
    tr:hover 
    {
        background-color: grey;
    }



</style>

    <form action="" method="">

    
    @csrf
    <a href="{{ route('company.profile') }}">

        <button type="submit" class="btn btn-primary" >  اضافة شركة جديدة</button>
	</a>
  

        <table>
           <thead>
               <tr>
                   <td>رقم </td>
                   <th>اسم الشركة</th>
                   <th>موقع الشركة</th>
                   <th>اختصاص الشركة</th>
                   <th>السجل التجاري</th>
                   <th></th>
                   
               </tr>
           </thead>
           <tbody>
                @foreach($company as $comp)
                    <tr>
                        <td>{{$comp->id}}</td>
                        <td>{{$comp->company_name_ar}}</td>
                        <td>{{$comp->location}}</td>
                        <td>{{$comp->company_specialist}}</td>
                        <td>{{$comp->commercial_record}}</td>
                        <td>
                            <a href="{{url('/company/editProfile',$comp->id)}}" class="btn">تعديل</a>
                        </td>
                        
                    </tr>
                   
               @endforeach
           </tbody>
        </table>
    </form>
@endsection()