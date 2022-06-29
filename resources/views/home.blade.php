<h1>TRAINS</h1>

<ul>
    @foreach ($trains as $train)
        <li>
            <h3>{{ $train->train_code }}</h3>
            <h4>{{ $train->company }}</h4>
            <p>
                {{ $train->arr_station }}
            </p>
            <p>
                {{ $train->dep_station }}
            </p>
            <p>
                {{ $train->arr_time }}
            </p>
            <p>
                {{ $train->dep_time }}
            </p>
            <p>
                {{ $train->wagons }}
            </p>
            <p>
                {{ $train->on_time }}
            </p>
            <p>
                {{ $train->canceled }}
            </p>
        </li>
    @endforeach
</ul>
