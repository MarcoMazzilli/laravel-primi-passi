@include('partials.head')
<body>


    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
    <h1>Laravel primi passi!</h1>
    <h3>Benvenuto {{$loris}} / {{$luca}}</h3>
    <p> (non so chi lo correggerà)</p>
    <p>Cliccando su uno dei link presenti qui sotto, verrai tiportato in un altra pagina!!!</p>
    <span>Non ci credi?? prova tu stesso!</span>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about-us') }}">Chi siamo?</a></li>
    </ul>

</body>
</html>
