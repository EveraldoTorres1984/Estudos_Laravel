<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>

<body>
    <div style="
    display:flex;
    flex-direction:row;
    justify-content: center;
    margin-top: 5em
   ">
        @foreach ($pessoas as $p)
            {{-- @component('components.avatar')
                @slot('image')
                    {{ $p['image'] }}
                @endslot
                @slot('nome')
                    {{ $p['nome'] }}
                @endslot
                @slot('idade')
                    {{ $p['idade'] }}
                @endslot
                @slot('birth')
                    {{ $p['birth'] }}
                @endslot
            @endcomponent
        @endforeach
 --}}

    @include('components/avatar', $p)
    @endforeach
    </div>

</body>

</html>
