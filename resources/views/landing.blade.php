@extends('layouts.layout')
@section('title')
    Landing
@endsection
@section('some-head-else')
    <style>
        img{
            width: 650px;
            height: 400px;
        }

        body{
            background-image: url('img_tree.gif');

        }
        .card img{
            width: 20rem;
            height: 20rem;

        }
        img{
            border-radius:100px;

        }
        .header{
        background-color: purple;
        height: 80pt;
        padding-top: 20px;
        color:white;
        }
    </style>
@endsection
@section('content')


    <div class="header">
        <h1 class="text-center">Dern Support</h1>
    </div>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-6">
                    <h1 class="">Support Everything with One Remote Support Solution</h1>
                    <p>The #1 enterprise solution for remote support</p>
                    <p>Support iOS and Android devices with screen sharing and remote control</p>
                    <p>Connect in seconds to any remote system or device, on or off network Sign up for an extended 45-day free trial.</p></br>

            </div>
                <div class="col-md-6">
                    <img src="https://freshysites.com/wp-content/uploads/Top-Computer-Repair-Service-Websites.jpg">
                </div>
        </div>

        <div class="row p-4">
            <div class="col">
                <h1>The Only Remote Support Tool You'll Need</h1>
                <p>Consolidate Remote Tools: Replace dozens of point-to-point and SaaS tools, and enable secure remote connections on Windows, Mac, Linux, iOS, Android, or Network Devices.</p>
                <p>Improve Service Desk Metrics: Integrate with ITSM/CRM systems to increase first call resolution, reduce support costs, and improve customer satisfaction.</p>
                <p>Get Military-Grade Security: Satisfy the rigorous security requirements of branches of military and government, as well as banking and financial institutions around the world.</p>
            </div>
        </div>

        <h2 id="use-cases" class="products-h2 cursor-text text-center" aria-label="Copy Use Cases to your clipboard">
            Use Cases
        </h2></br>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4Sg-YBwGgDWebzyT1NTdLHQZwdNJHwifjUUiRgA5sbw&s" >
                    <div class="card-body">
                        <h5 class="card-title">Modern Service Delivery Across the Enterprise</h5>
                        <p class="card-text">Support any user, device and system inside and outside your network, across Windows, macOS, Linux, and more with one tool.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top"  src="https://cdn-icons-png.flaticon.com/512/4703/4703650.png">
                    <div class="card-body">
                        <h5 class="card-title">Comprehensive & Secure Remote Support</h5>
                        <p class="card-text">Take advantage of secure, monitored access capabilities to troubleshoot and update servers, workstations, and network devices.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top"  src="https://cdn-icons-png.flaticon.com/512/6963/6963703.png">
                    <div class="card-body">
                        <h5 class="card-title">Secure Remote Access without a VPN</h5>
                        <p class="card-text">Protect access paths and attack vectors with a secure tool that doesn't require a VPN and audits every session</p>
                    </div>
                </div>
            </div>
            </br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="{{ route('login') }}" class="btn btn-outline-info btn-lg" type="submit">Sign in</a>
            </div></br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="{{ route('register') }}" class="btn btn-outline-info btn-lg" type="submit">Register</a>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="{{ route('fqa') }}" class="btn btn-outline-info btn-lg" type="submit">Q & A</a>
            </div>
        </div>
    </div>


@endsection
