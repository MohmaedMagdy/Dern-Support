@extends('layouts.layout')
@section('title')
    Q & A
@endsection
@section('some-head-else')
<style>
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
<div class="container">
    <div class="row p-5">
        <div class="accordion" id="faqAccordion">
            <h1>Questions and answers about hardware malfunctions</h1>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <h5 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What should I do if my computer doesn't turn on at all?
                        </h5>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="card-body">
                    First, ensure that the power cable is securely plugged in and the power outlet is functional. If the computer still doesn't turn on, check for any signs of life such as lights or fan noise. If there are no signs of power, it could indicate a faulty power supply unit (PSU) or motherboard.
                    </div>
                </div>
            </div></br>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <h5 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How can I troubleshoot a noisy fan in my computer?
                        </h5>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="card-body">
                    A noisy fan could be caused by dust accumulation, worn bearings, or improper installation. Start by cleaning the fan and its surroundings to remove any dust. If the noise persists, consider replacing the fan with a new one
                    </div>
                </div>
            </div></br>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <h5 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What could be causing my computer to randomly restart?
                        </h5>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="card-body">
                        Random restarts can be caused by overheating, faulty power supply, or software issues such as driver conflicts or malware infections. Check the CPU temperature, ensure proper ventilation, and update device drivers and antivirus software to rule out software-related issues.
                    </div>
                </div>
            </div></br>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <h5 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            My computer is running slowly. What could be the problem?
                        </h5>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="card-body">
                        Slow performance could be due to insufficient RAM, a fragmented hard drive, or malware infections. Check the available system resources using Task Manager (Windows) or Activity Monitor (Mac) and consider upgrading RAM or replacing the hard drive with a solid-state drive (SSD) for improved performance.
                    </div>
                </div>
            </div></br>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <h5 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How can I identify if my graphics card is failing?
                        </h5>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="card-body">
                        Signs of a failing graphics card include artifacts on the screen, graphical glitches, driver crashes, or system freezes during graphics-intensive tasks. Test the graphics card in another computer if possible, update drivers, and check for overheating issues.
                    </div>
                </div>
            </div></br>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <h5 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What should I do if my computer displays a "No Boot Device Found" error?
                        </h5>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                    <div class="card-body">
                        This error typically indicates a problem with the hard drive or its connection. Check the connections between the hard drive and motherboard, ensure the hard drive is recognized in the BIOS/UEFI settings, and consider replacing the hard drive or reinstalling the operating system if necessary.
                    </div>
                </div>
            </div></br>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <h5 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How can I troubleshoot a malfunctioning keyboard or mouse?
                        </h5>
                    </h2>
                </div>
                <div >
                    <div class="card-body">
                        Ensure that the keyboard/mouse is properly connected to the computer and that the cables are not damaged. Try using the keyboard/mouse on another computer to see if the issue persists. If it does, consider replacing the keyboard/mouse with a new one.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
