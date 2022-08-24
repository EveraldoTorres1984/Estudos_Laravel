<div style="
    width: 200px;
    padding: 20px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    margin: 20px;
    box-shadow: -2px 2px 17px 11px darkgrey
">
    <img src="{{ $image }}">

    <div style="padding: 20px">
        <h1>{{ $nome }}</h1>
        <h3>{{ $idade }}</h3>
        <p> Nasceu em <br> {{ $birth }}</p>
    </div>

</div>
