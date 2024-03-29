@extends('layout')

@section('style')
    <link rel="stylesheet" href="../css/faq.css"><!--Link to the faq specific CSS style-->
@endsection

@section('title')
    <title>FAQ</title>
@endsection

@section('header')
    <h1>FAQ</h1>
    <h2>You got a question? I got an answer</h2>
@endsection

@section('second_aside_menu')
    <p class="aside-title">ABOUT</p>
    <ul class="aside">
        <li class="aside" id="link-border"><a class="aside" href="#print">Printing</a></li>
        <li class="aside" id="link-border"><a class="aside" href="#scan">Scanning</a></li>
        <li class="aside" id="link-border"><a class="aside" href="#buy">Buying on the HZ web shop</a></li>
        <li class="aside" id="link-border"><a class="aside" href="#covid">COVID</a></li>
        <li class="aside" id="link-border"><a class="aside" href="#book">Booking a project space</a></li>
        <li class="aside"><a class="aside" href="#parking">Parking your car at HZ</a></li>
    </ul>
@endsection

@section('content')
    <div>
        <article>
            <h1>QUESTIONS</h1>
            <details><!--Drop down to see more information about the question-->
                <summary id="print">How can you print a document from your laptop at HZ?</summary>
                <ol><!--Hidden Answer to the question-->
                    <li>First put money in you HZ student card (Close to the reception, there is a machine where you can deposit with a bank account).</li>
                    <li>Got to <a class="faq-go-to-this-links" href="https://print.hz.nl/login.cfm?dest=index.cfm&" target="_blank">'print.hz.nl'</a> and use your login details. </li>
                    <li>Choose the document you want to print and press 'Next'</li>
                    <li>Select a printer (HZ Plotter is for extremely big papers, HZ printer is the normal one). If you want to print in color or several copies press advance to see the settings of the printer.</li>
                    <li>Then go to the printer (There is one in every floor).</li>
                    <li>Place your student card in the iPad that is connceted to the printer, and select print.</li>
                    <li>Choose the document you wanted to print, and select print one more time.</li>
                    <li>Logout from your account in the iPad.</li>
                </ol>
            </details>

            <details>
                <summary id="scan">How can you scan a document and send it to your laptop at HZ?</summary>
                <ol>
                    <li>Make sure you have at least €0.07 credit in your student card (Scanning is free; nevertheless, you need to have credit).</li>
                    <li>Then go to the printer (There is one in every floor).</li>
                    <li>Place your student card in the iPad that is connceted to the printer, and select scan.</li>
                    <li>Place the original sheet on the feeder or glass plate.</li>
                    <li>Press 'scan and send'.</li>
                    <li>Press 'scan to me'.</li>
                    <li>Press 'yes' and 'start' button.</li>
                    <li>Press 'Start sending' and when the scan is completed press 'stop'.</li>
                    <li>Logout from your account in the iPad.</li>
                </ol>
            </details>

            <details>
                <summary id="buy">How can I buy something on the HZ web shop?</summary>
                <ol>
                    <li>Go to <a class="faq-go-to-this-links" href="https://webshop.hz.nl/WebshopApp/defaulten.aspx?menu=082076044027019251066025111065201099237062130097" target="_blank">'webshop.hz.nl'</a> and sign in with your HZ account.</li>
                    <li>Look for your target purchase, and press 'ORDER'</li>
                    <li>If you are done, go to the 'shopping cart', which is found in the navegation bar.</li>
                    <li>Finally, use your back account to pay.</li>
                </ol>
            </details>

            <details>
                <summary id="covid">Where can I find the latest instructions on what to do when you are sick/show symptoms of COVID?</summary>
                <ol>
                    <li>Go to <a class="faq-go-to-this-links" href="https://hz.nl/en/current-affairs/coronavirus" target="_blank">'hz.nl/en/current-affairs/coronavirus'</a>.</li>
                    <li>Then select 'Latest updates'.</li>
                    <li>Read</li>
                </ol>
            </details>

            <details>
                <summary id="book">How can you book a project space in one of the wings?</summary>
                <ol>
                    <li>Go to <a class="faq-go-to-this-links" href="https://portal.hz.nl/en/" target="_blank">'portal.hz.nl'</a>.</li>
                    <li>Select 'Selfservice Portal' in the navegation bar (If it is not there, change the personal menu first).</li>
                    <li>Press in 'Make a reservation'. Then, press 'Reserve meeting room or project group...'.</li>
                    <li>Press in 'Reserve a room'. Select the date and you will get the rooms available.</li>
                    <li>Finally select the room, time period, and answer the given questions</li>
                </ol>
            </details>

            <details>
                <summary id="parking">What are the instructions if you want to park your car at the HZ parking lot?</summary>
                <ul>
                    <li>Free parking is possible on the car park of PZEM at the Poelendaelesingel 10 in Middelburg. This is a few minutes' walk to the HZ. Unfortunately, it is not possible to park directly at the HZ building. However, there are two disabled parking spaces and spaces for HZ cars near the building itself.</li>
                    <li>If you park at the Poelendaelesingel, you cannot reach the HZ via the tunnel because of the construction works for the Joint Research Center Zeeland. You can cross over via the intersection at the traffic lights.</li>
                </ul>
            </details>
        </article>
        @foreach( $faqs as $faq)
            <li>{{ $faq->question }}</li>
            <h2>{{ $faq->answer }}</h2>
        @endforeach

    </div>
@endsection

@section('footer')
    <h4>DO YOU HAVE ANY OTHER QUESTION?</h4>
    <p class="footer-text">Email your question to: ana.rivera432@yahoo.com.mx or rive0008@hz.nl</p>
@endsection
