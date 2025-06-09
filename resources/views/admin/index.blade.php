@extends('layouts.dashboard_layout')

@section('content')
    <div class="card" style="background-color: white; height: auto; padding: 20px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 8px;">

        <div style="margin-bottom: 20px;">
            <h2>Dashboard</h2>
        </div>

    {{-- Statistik Section --}}
    <div style="display: flex; gap: 20px; margin-bottom: 30px;">
    <div style="flex: 1; background-color: white; padding: 15px 20px; border-radius: 10px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 2px 8px rgba(0,0,0,0.05);"> 
        <div>
            <div style="font-size: 14px; ">Total Kucing</div>
            <div style="font-size: 30px; font-weight: bold; padding-top: 10px;">10</div>
        </div>
        <div style="background-color: #d9fce5; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-users" style="color: green;"></i>
        </div>
    </div>
    <div style="flex: 1; background-color: white; padding: 15px 20px; border-radius: 10px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 2px 8px rgba(0,0,0,0.05);"> 
        <div>
            <div style="font-size: 14px; ">Total Anjingr</div>
            <div style="font-size: 30px; font-weight: bold; padding-top: 10px;">10</div>
        </div>
        <div style="background-color: #dcd6ff; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-users" style="color: #5b3ee7;"></i>
        </div>
    </div>

    <div style="flex: 1; background-color: white; padding: 15px 20px; border-radius: 10px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 2px 8px rgba(0,0,0,0.05);"> 
        <div>
            <div style="font-size: 14px; ">Total Hamster</div>
            <div style="font-size: 30px; font-weight: bold; padding-top: 10px;">10</div>
        </div>
        <div style="background-color: #ffe0e0; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
             <i class="fas fa-clipboard-list" style="color: #e53e3e; "></i>
        </div>
    </div>

    <div style="flex: 1; background-color: white; padding: 15px 20px; border-radius: 10px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 2px 8px rgba(0,0,0,0.05);"> 
        <div>
            <div style="font-size: 14px; ">Total Marmut</div>
            <div style="font-size: 30px; font-weight: bold; padding-top: 10px;">10</div>
        </div>
        <div style="background-color: #fff3b0; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
             <i class="fas fa-pills" style="color: #e6a100; "></i>
        </div>
    </div>

        <div style="flex: 1; background-color: white; padding: 15px 20px; border-radius: 10px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 2px 8px rgba(0,0,0,0.05);"> 
        <div>
            <div style="font-size: 14px; ">Total Kelinci</div>
            <div style="font-size: 30px; font-weight: bold; padding-top: 10px;">10</div>
        </div>
        <div style="background-color: #fff3b0; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
             <i class="fas fa-pills" style="color: #e6a100; "></i>
        </div>
    </div>

        <div style="flex: 1; background-color: white; padding: 15px 20px; border-radius: 10px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 2px 8px rgba(0,0,0,0.05);"> 
        <div>
            <div style="font-size: 14px; ">Total Shelter & Rescue</div>
            <div style="font-size: 30px; font-weight: bold; padding-top: 10px;">10</div>
        </div>
        <div style="background-color: #fff3b0; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
             <i class="fas fa-pills" style="color: #e6a100; "></i>
        </div>
    </div>

    </div>

    </div>
@endsection