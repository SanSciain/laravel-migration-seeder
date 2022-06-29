<h1>TRAINS</h1>

<ul>
    @foreach ($trains as $train)
        <li>
            <h3>Train code: {{ $train->train_code }}</h3>
            <h4>Comapny: {{ $train->company }}</h4>
            <p>
                Arrive Station: {{ $train->arr_station }}
            </p>
            <p>
                time: {{ $train->arr_time }}
            </p>
            <p>
                Departure Sattion: {{ $train->dep_station }}
            </p>
            <p>
                time: {{ $train->dep_time }}
            </p>
            <p>
                Wagons number: {{ $train->wagons }}
            </p>
            <p>
                {{ $train->on_time ? 'On time' : 'Delay' }}
            </p>
            <p>
                {{ $train->canceled ? '' : 'Canceled' }}
            </p>
        </li>
    @endforeach
</ul>
