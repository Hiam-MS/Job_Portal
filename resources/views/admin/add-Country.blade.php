<div class="text-center">
    <h1>
    @csrf

        
        @foreach($country->Cities as $count)
                <h3>{{$count['city_name']}}</h3>




                <ul>
                    <p class="text-lg text-gray-700 py-3">
                        City
                    </p>
                </ul>

        @endforeach
    </h1>
</div>