<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css"><!--Link to the general CSS style-->
    @yield('style')
    <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css"><!--Link to the family font-->
    @yield('title')
</head>

<body>
<header>
    @yield('header')
</header>

<nav>
    <ul class="nav">
        <li class="nav"><a class="nav"  id="{{ Request::path() === '/' ? 'active': '' }}" href="/">Home</a></li>
        <li class="nav"><a class="nav" id="{{ Request::path() === 'profile' ? 'active': '' }}" href="/profile">Profile</a></li>
        <li class="nav"><a class="nav" id="{{ Request::path() === 'dashboard' ? 'active': '' }}" href="/dashboard">Dashboard</a></li>
        <li class="nav"><a class="nav" id="{{ Request::path() === 'faq' ? 'active': '' }}" href="/faq">FAQ</a></li>
        <li class="nav"><a class="nav" id="{{ Request::path() === 'blog' ? 'active': '' }}" href="/blog">Blog</a></li>
    </ul>
</nav>

<main class="{{ Request::path() === 'dashboard' ? '': 'container' }}">
    @if(Request::path() !== 'dashboard')
        <div>
            <aside>
                <p class="aside-title">MENU</p>
                <ul class="aside">
                    <li class="aside" id="link-border"><a class="aside" href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/EN/6.-Regulations-Study-Programmes/CER-HZ-Bachelor-full-time-2022-2023-DEF-June-13.pdf" target="_blank">HZ HBO-ICT Course and Examination Regulations (CER)</a></li>
                    <li class="aside" id="link-border"><a class="aside" href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2022-2023/IR-CER-HZ-B-HBO-ICT-full-time-2022-2023-DEF2.pdf" target="_blank">Implementation Regulations (IR) of the HBO-ICT program</a></li>
                    <li class="aside" id="link-border"><a class="aside" href="https://learn.hz.nl/my/" target="_blank">Learn Environment</a></li>
                    <li class="aside" id="link-border"><a class="aside" href="https://teams.microsoft.com/_#/school/conversations/General?threadId=19:827654897ab746089c081f24aff1c984@thread.skype&ctx=channel" target="_blank">Teams environment of the study program</a></li>
                    <li class="aside" id="link-border"><a class="aside" href="https://hz.osiris-student.nl/#/voortgang/" target="_blank">Study progress</a></li>
                    <li class="aside"><a class="aside" href="https://github.com/HZ-HBO-ICT" target="_blank">HZ HBO-ICT Github Environment</a></li>
                </ul>
                @yield('second_aside_menu')
            </aside>
        </div>
    @endif

    @yield('content')
</main>

<footer>
    @yield('footer')
</footer>
</body>
</html>
