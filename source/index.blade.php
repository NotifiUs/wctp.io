@extends('_layouts.master')
@section('title', 'The modern WCTP engine')
@section('body')

@include('_layouts.nav')



<div class="container px-4 mx-auto max-w-2xl sm:w-full text-center">
    <img class="inline-block w-48 my-4 mx-auto relative" src="/assets/images/phones.svg" alt="WCTP Gateway" title="SMS aggregator for Amtelco systems">

    @include('_layouts.wctp')

    <h1 class="font-extrabold text-indigo-700 text-4xl text-center font-sans">
        Become your own SMS aggregator using <span class="italic">Twilio</span>, <span class="italic">ThinQ</span>, and <span class="italic">more</span>!
    </h1>
    <h2 class="text-2xl text-center my-1 text-gray-700">
        Ardently crafted for the <span class="font-bold text-gray-800 italic">Amtelco</span> community.
    </h2>
    <div class="container mx-auto max-w-md my-10 text-center">
        <a href="https://github.com/notifius/wctp-gateway"
           class="shadow uppercase font-bold p-4 text-lg border focus:shadow-outline border-gray-300 hover:border-gray-400 bg-gray-300 hover:text-gray-700 text-gray-600 hover:bg-gray-400 rounded-lg max-w-sm">
            <i class="fas fa-cloud-download-alt text-indigo-600"></i> Download Now
        </a>
    </div>
</div>

<div class="flex flex-wrap mx-auto max-w-6xl text-center lg:text-justify my-16 text-2xl">

    <div class="lg:w-4/12 sm:w-full md:w-1/2 p-6">
        <h3 class="font-extrabold uppercase italic">Free and Open Source</h3>
        <p class="text-gray-600 text-xl text-center lg:text-left font-semibold">
            Download, modify, and run without restrictions.
            MIT licensed for personal or commercial use.
        </p>
        <a class="focus:shadow-outline inline-block text-lg shadow uppercase font-bold py-3 px-4 border border-gray-300 hover:text-gray-900 text-gray-700 bg-gray-300 hover:bg-gray-400 hover:border-gray-400 rounded-lg my-4"
           href="https://github.com/notifius/wctp-gateway"><i class="fas fa-code text-indigo-500"></i> View Code</a>
    </div>

    <div class="lg:w-4/12 sm:w-full md:w-1/2 p-6">
        <h3 class="font-extrabold uppercase italic">Professional Setup</h3>
        <p class="text-gray-600 text-xl text-center lg:text-left font-semibold">
            Not comfortable installing on your own? Try our professional installation, setup, and support.
        </p>
        <a class="focus:shadow-outline inline-block text-lg shadow uppercase font-bold py-3 px-4 border border-gray-300 hover:text-gray-900 text-gray-700 bg-gray-300 hover:bg-gray-400 hover:border-gray-400 rounded-lg my-4"
           href="https://notifi.us/contact"><i class="fas fa-life-ring text-indigo-500"></i> Get Help</a>
    </div>

    <div class="lg:w-4/12 sm:w-full md:w-3/4 mx-auto p-6 bg-gray-300 shadow border lg:rounded-lg border-gray-400">
        <h3 class="font-extrabold uppercase italic">Dedicated Hosting</h3>
        <p class="text-gray-600 text-xl text-center lg:text-left font-semibold">
            We do all the hard work! Just enter the credentials into your WCTP settings and start sending.
        </p>
        <a class="focus:shadow-outline inline-block text-lg shadow uppercase font-bold py-3 px-4 border border-indigo-300 hover:text-gray-100 text-gray-200 bg-indigo-500 hover:bg-indigo-600 rounded-lg my-4"
           href="https://notifi.us/contact"><i class="fas fa-fire-alt text-gray-400"></i> Let's Talk</a>
    </div>

</div>

<div class="flex flex-wrap mx-0 bg-gray-400 mt-6 text-2xl border-t border-b border-gray-400 shadow-inner ">

    <div class="mx-auto max-w-4xl text-center">

        <h3 class="text-gray-600 font-extrabold mt-12 mb-10 uppercase">The modern WCTP engine</h3>

        <img src="/assets/images/wctp_flow_mobile.png"
             class="my-6 px-4 mx-auto block sm:block md:hidden lg:hidden xl:hidden"
             title="WCTP gateway flow chart" alt="WCTP flow">

        <table class="my-12 mx-auto hidden md:table">
            <tbody>
                <tr>
                    <td>
                        <i title="Recipients, clients, customers, etc." class="fas fa-mobile-alt fa-2x text-gray-800"></i>
                        <br>
                        <small class="text-sm uppercase text-gray-600 text-semibold">Recipients</small>
                    </td>
                    <td>
                        <i class="fas fa-exchange-alt text-gray-500 fa-2x mx-4 my-2"></i>

                    </td>
                    <td>
                        <i title="Twilio, ThinQ, and more" class="fas fa-broadcast-tower fa-2x text-gray-800"></i>
                        <br>
                        <small class="text-sm uppercase text-gray-600 text-semibold">Telecom API</small>
                    </td>
                    <td>
                        <i class="fas fa-exchange-alt text-gray-500 fa-2x mx-4 my-2"></i>
                    </td>
                    <td>
                        <i title="This app!" class="fas fa-server text-indigo-600 fa-2x"></i>
                        <br>
                        <small class="text-sm uppercase text-gray-600 text-semibold">Carrier Gateway</small>
                    </td>
                    <td>
                        <i class="fas fa-exchange-alt text-gray-500 fa-2x mx-4 my-2"></i>
                    </td>
                    <td>
                        <i title="Enterprise host"  class="fas fa-cube fa-2x text-gray-800"></i>
                        <br>
                        <small class="text-sm uppercase text-gray-600 text-semibold">Enterprise Host</small>
                    </td>
                </tr>
            <tr class="my-0 py-0">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <small class="text-sm uppercase text-indigo-600 font-extrabold">You are here</small>
                </td>
                <td></td>
                <td>
                    <small class="text-sm uppercase text-gray-600 font-extrabold">Amtelco</small>
                </td>
            </tr>
            </tbody>
        </table>

        <div class="container px-5 w-auto mb-12 text-gray-600 text-xl">
           Acting as a <strong class="text-indigo-600">WCTP Carrier Gateway</strong>, we relay messages between the
            <span class="italic font-semibold">Amtelco 2-Way WCTP API</span> &mdash;
            also known as the <strong>WCTP Enterprise Host</strong> &mdash; for delivery through popular
            <strong>Telecom API providers</strong> like <a title="Twilio" href="https://twilio.com" class="hover:text-gray-700 font-semibold italic">Twilio</a> and <a title="ThinQ" href="https://thinq.com" class="hover:text-gray-700 font-semibold italic">ThinQ</a>.
        </div>

    </div>
</div>



<div class="flex flex-wrap mx-0 bg-gray-100 my-0 py-0 text-2xl border-t border-b border-gray-400 shadow-inner">

    <div class="w-full md:w-1/2 flex mx-auto text-center px-5">

        <dl class="mx-auto w-auto md:mr-6">
            <div class="my-12 max-w-sm">
                <dt class="font-extrabold text-gray-800 uppercase italic text-center">
                    <i class="fas fa-sim-card fa-3x text-indigo-600"></i>
                    <h3 class="my-2">Bring your own carrier</h3>
                </dt>
                <dd class="text-gray-600 my-2 text-xl font-semibold">
                    Use your own Twilio and/or ThinQ accounts to send messages! Just bring your API key(s).
                </dd>
            </div>

            <div class="my-12 max-w-sm">
                <dt class="font-extrabold text-gray-800 uppercase italic text-center">
                    <i class="fas fa-shield-alt fa-3x text-indigo-600"></i>
                    <h3 class="my-2">Multi-Factor Authentication</h3>
                </dt>
                <dd class="text-gray-600 my-2 text-xl font-semibold">
                    Multi-Factor Authentication supported using Google Authenticator app.
                </dd>
            </div>

            <div class="my-12 max-w-sm">
                <dt class="font-extrabold text-gray-800 uppercase italic text-center">
                    <i class="fas fa-network-wired fa-3x text-indigo-600"></i>
                    <h3 class="my-2">IP Restrictions</h3>
                </dt>
                <dd class="text-gray-600 my-2 text-xl font-semibold">
                    Restrict what IP addresses your Enterprise Hosts (Amtelco WCTP API) can submit messages from.
                </dd>
            </div>


        </dl>

    </div>

    <div class="w-full md:w-1/2 flex mx-auto text-center px-5">

        <dl class="mx-auto w-auto md:ml-6">
            <div class="my-12 max-w-sm">
                <dt class="font-extrabold text-gray-800 uppercase italic text-center">
                    <i class="fas fa-dumpster-fire fa-3x text-indigo-600"></i>
                    <h3 class="my-2">
                        Automatic carrier failover
                    </h3>
                </dt>
                <dd class="text-gray-600 my-2 text-xl font-semibold">
                    We'll try all of your enabled carriers in the priority you've set before failing an outbound message.
                </dd>
            </div>

            <div class="my-12 max-w-sm">
                <dt class="font-extrabold text-gray-800 uppercase italic text-center">
                    <i class="fas fa-lock fa-3x text-indigo-600"></i>
                    <h3 class="my-2">
                        Opinionated Security
                    </h3>
                </dt>
                <dd class="text-gray-600 my-2 text-xl font-semibold">
                    We require TLS/SSL certificates by default and generate random <code class="text-gray-700">securityCode</code>(s) for you.
                </dd>
            </div>

            <div class="my-12 max-w-sm">
                <dt class="font-extrabold text-gray-800 uppercase italic text-center">
                    <i class="fas fa-toolbox fa-3x text-indigo-600"></i>
                    <h3 class="my-2">Full Control</h3>
                </dt>
                <dd class="text-gray-600 my-2 text-xl font-semibold">
                    Manage every aspect of your WCTP gateway from the included administrative portal.
                </dd>
            </div>


        </dl>

    </div>


</div>

<div class="flex mx-auto w-full text-center px-6 py-24 bg-gray-700 text-center">
    <img class="border border-gray-400 rounded shadow w-auto lg:max-w-4xl mx-auto" src="/assets/images/wctp_admin.png" title="WCTP Gateway web interface dashboard" alt="Admin Dashboard">
</div>

<div class="mx-auto w-full text-center px-6 py-12 text-center">

    <a class="inline-block" href="https://notifi.us" title="NotifiUs, LLC &middot; Level up your call center">
        <img class="my-0 py-0 w-full max-w-sm mx-auto" src="/assets/images/notifius.png" title="Notifi,US LLC &middot; Level up your call center" alt="NotifiUs, LLC">
    </a>
    <p class="-mt-4 my-0 py-0 text-gray-400 text-xl font-bold uppercase">
        A project by Patrick Labbett
    </p>
</div>



@include('_layouts.footer')

@endsection
