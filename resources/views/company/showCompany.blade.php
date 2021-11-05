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
 
  
<div>
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
                           
                        </td>
                        
                    </tr>
                   
               @endforeach
           </tbody>
        </table>
    </form>
</div>

@endsection()